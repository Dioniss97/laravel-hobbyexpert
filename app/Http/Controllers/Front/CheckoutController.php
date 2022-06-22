<?php

namespace App\Http\Controllers\Front; 

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Checkout;
use App\Models\Cart
use Debugbar;
use DB;

class CheckoutController extends Controller
{

    protected $checkout;

    public function __construct(Checkout $checkout, Cart $cart)
    {
        $this->cart = $cart;
        $this->checkout = $checkout;
    }

    public function index()
    {

        DebugBar::info('hola');

        // DebugBar::info($fingerprint)

        $carts = $this->cart->select(DB::raw('count(price_id) as quantity'),'price_id')
            ->groupByRaw('price_id')
            ->where('active', 1)
            // ->where('fingerprint',  $fingerprint)
            ->where('sell_id', null)
            ->orderBy('price_id', 'desc')
            ->get();

        $totals = $this->cart
            // ->where('carts.fingerprint', $fingerprint)
            ->where('carts.active', 1)
            ->where('carts.sell_id', null)
            ->join('prices', 'prices.id', '=', 'carts.price_id')
            ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
            ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('sum(prices.base_price * taxes.multiplicator) as total') )
            ->first();

        $sections = View::make('front.pages.checkout.index')
            // ->with('fingerprint', $fingerprint);
            ->with('carts', $carts)
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

    public function purchased() 
    {
        $view = View::make('front.pages.purchased.index');

        if(request()->ajax()) {
            
            $sections = $view->renderSections(); 

            return response()->json([
                'content' => $sections['content'],
            ]);
        }

        return $view;
    }

    // public function store(CheckoutRequest $request)
    // {            

    //     $checkout = $this->checkout->Create( [
    //         'name' => request('name'),
    //         'surnames' => request('surnames'),
    //         'email' => request('email'),
    //         'phone' => request('phone'),
    //         'province' => request('province'),
    //         'postal_code' => request('postal_code'),
    //         'address' => request('address'),
    //         'active' => 1,
    //     ]);

    //     $sections = View::make('front.pages.checkout.index')->renderSections();

    //     return response()->json([
    //         'content' => $sections['content'],
    //     ]);
    // }

}