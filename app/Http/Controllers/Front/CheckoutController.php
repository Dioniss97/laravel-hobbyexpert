<?php

namespace App\Http\Controllers\Front; 

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\Front\ClientRequest;
use App\Models\Checkout;
use App\Models\Cart;
use App\Models\Sell;
use App\Models\Client;
use App\Models\Fingerprint;
use Debugbar;
use Illuminate\Http\Request;
use DB;

class CheckoutController extends Controller
{

    protected $checkout;

    public function __construct(Checkout $checkout, Cart $cart, Sell $sell, Client $client, Fingerprint $fingerprint)
    {

        $this->checkout = $checkout;
        $this->cart = $cart;
        $this->sell = $sell;
        $this->client = $client;
        $this->fingerprint = $fingerprint;
    }

    public function index(Request $request)
    {

        $totals = $this->cart
            ->where('carts.fingerprint', $request->cookie('fp'))
            ->where('carts.active', 1)
            ->where('carts.sell_id', null)
            ->join('prices', 'prices.id', '=', 'carts.price_id')
            ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
            ->select(DB::raw('sum(prices.base_price) as base_total'),
            DB::raw('sum(prices.base_price * taxes.multiplicator) as total'))
            ->first();

        $taxes = $this->cart
            ->where('carts.fingerprint', $request->cookie('fp'))
            ->where('carts.active', 1)
            ->where('carts.sell_id', null)
            ->join('prices', 'prices.id', '=', 'carts.price_id')
            ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
            ->select(DB::raw('taxes.type as type'))
            ->first();

        $sections = View::make('front.pages.checkout.index')
            ->with('fingerprint', $request->cookie('fp'))
            ->with('base_total', $totals->base_total)
            ->with('total', $totals->total)
            ->with('tax_total', ($totals->total - $totals->base_total))
            ->with('type', $taxes->type)
            ->renderSections();
            
        return response()->json([
            'content' => $sections['content'],
        ]);
    }

    public function store(Request $request)
    {

        $totals = $this->cart
            ->where('carts.fingerprint', $request->cookie('fp'))
            ->where('carts.active', 1)
            ->where('carts.sell_id', null)
            ->join('prices', 'prices.id', '=', 'carts.price_id')
            ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
            ->select(DB::raw('sum(prices.base_price) as base_total'), 
            DB::raw('sum(prices.base_price * taxes.multiplicator) as total'))
            ->first();

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

        // update table fingerprints with client_id
        $fingerprint = $this->fingerprint->where('fingerprint', $request->cookie('fp'))->update([
            'client_id' => $client->id,
        ]);

        $sell = $this->sell
            ->where('active', 1)
            ->orderBy('id', 'desc')
            ->first();

        if(isset($sell->ticket_number) && str_contains($sell->ticket_number, date('Ymd'))) {
            $ticket_number = $sell->ticket_number + 1;
        } else {
            $ticket_number = date('Ymd').'0001';
        }

        $sell = $this->sell->create([
            'ticket_number' => $ticket_number,
            'date_emission' => date('Y-m-d'),
            'time_emission' => date('H:i:s'),
            'payment_method_id' => request('payment'),
            'client_id' => $client->id,
            'total_base_price' =>  ($totals->base_total), // Problemas para guardar los totals.
            'total_tax_price' => ($totals->total - $totals->base_total),
            'total_price' => ($totals->total),
            'active' => 1,
            ]
        );

        $cart = $this->cart
            ->where('fingerprint', request('fingerprint'))
            ->where('active', 1)
            ->where('sell_id', null)
            ->update([
                'sell_id' => $sell->id,
                'client_id' => $client->id,
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