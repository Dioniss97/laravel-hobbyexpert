<?php

namespace App\Http\Controllers\Front; 

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\Front\ClientRequest;
use App\Models\Checkout;
use App\Models\Cart;
use App\Models\Sell;
use App\Models\Client;
use Debugbar;
use DB;

class CheckoutController extends Controller
{

    protected $checkout;

    public function __construct(Checkout $checkout, Cart $cart, Sell $sell, Client $client)
    {
        $this->checkout = $checkout;
        $this->cart = $cart;
        $this->sell = $sell;
        $this->client = $client;
    }

    public function index($fingerprint)
    {

        $totals = $this->cart
            ->where('carts.fingerprint', $fingerprint)
            ->where('carts.active', 1)
            ->where('carts.sell_id', null)
            ->join('prices', 'prices.id', '=', 'carts.price_id')
            ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
            ->select(DB::raw('sum(prices.base_price) as base_total'), 
            DB::raw('sum(prices.base_price * taxes.multiplicator) as total'))
            ->first();

        $taxes = $this->cart
            ->where('carts.fingerprint', $fingerprint)
            ->where('carts.active', 1)
            ->where('carts.sell_id', null)
            ->join('prices', 'prices.id', '=', 'carts.price_id')
            ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
            ->select(DB::raw('taxes.type as tax'))
            ->first();

        $sections = View::make('front.pages.checkout.index')
            ->with('fingerprint', $fingerprint)
            ->with('tax', $taxes->tax)
            ->with('base_total', $totals->base_total)
            ->with('total', $totals->total)
            ->with('tax_total', ($totals->total - $totals->base_total))
            ->renderSections();

        // if(request()->ajax()) {
            
            return response()->json([
                'content' => $sections['content'],
            ]);

        // }
    }

    public function purchased(ClientRequest $request) 
    {

        DebugBar::info(request('id'));

        $client = $this->client->updateOrCreate([
            'id' => request('id')], [
                'name' => request('name'),
                'surnames' => request('surnames'),
                'telephone' => request('telephone'),
                'email' => request('email'),
                'address' => request('address'),
            ]
        );

        $sell = $this->sell->updateOrCreate([
            'id' => request('id')],[
                'ticket_number' => '123456',
                'client_id' => '1',
                'active' => 1,
                'visible' => 1,
            ]
        );

        $cart = $this->$cart
            ->where('fingerprint', $fingerprint)
            ->where('carts.active', 1)
            ->where('carts.sell_id', null)
            ->create([
                'sell_id' => $this->sell->id,
            ]);
    

        $view = View::make('front.pages.purchased.index');

        if(request()->ajax()) {
            
            $sections = $view->renderSections(); 

            return response()->json([
                'content' => $sections['content'],
            ]);
        }

        return $view;
    }

    public function store(ClientRequest $request)
    {            
        // Use method create() to create a new entrance in the table carts on field sell_id with the value of the sell id
        $cart = $this->cart
            ->where('fingerprint', $request->fingerprint)
            ->where('carts.active', 1)
            ->where('carts.sell_id', null)
            ->update([
                'sell_id' => $request->sell_id,
            ]);

        // Use method create() to create a new entrance in the table sells on field client_id with the value of the client id
        $sell = $this->sell->create([
            'client_id' => $request->client_id,
            'active' => 1,
            'visible' => 1,
        ]);

        // Prepare the view to show that the sell was created successfully
        $view = View::make('front.pages.purchased.index');
    }
}