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
            ->select(DB::raw('taxes.type as type'))
            ->first();

        $sections = View::make('front.pages.checkout.index')
            ->with('fingerprint', $fingerprint)
            ->with('base_total', $totals->base_total)
            ->with('total', $totals->total)
            ->with('tax_total', ($totals->total - $totals->base_total))
            ->with('type', $taxes->type)
            ->renderSections();
            
            return response()->json([
                'content' => $sections['content'],
            ]);
    }

    public function store(ClientRequest $request)
    {
        $client = $this->client->create([
            'name' => request('name'),
            'surnames' => request('surnames'),
            'email' => request('email'),
            'email_verified_at' => now(),
            'telephone' => request('telephone'),
            'address' => request('address'),
            'province' => request('province'),
            'postal_code' => request('postal_code'),
            'country' => request('country'),
            'active' => 1,
            'visible' => 1,
        ]);

        Debugbar::info(request('total_price'));
        Debugbar::info(request('total_base_price'));
        Debugbar::info(request('total_tax_price'));
        Debugbar::info(request('payment'));
        
        $sell = $this->sell->create([
            'ticket_number' => '123456',
            'date_emission' => date('Y-m-d'),
            'time_emission' => date('H:i:s'),
            'payment_method_id' => request('payment'),
            'client_id' => $client->id,

            // Hidden imputs
            'total_base_price' => request('total_base_price'),
            'total_tax_price' => request('total_tax_price'),
            'total_price' => request('total_price'),

            'active' => 1,
            ]
        );

        $cart = $this->$cart
            ->where('fingerprint', $fingerprint)
            ->where('active', 1)
            ->where('sell_id', null)
            ->update([
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
}