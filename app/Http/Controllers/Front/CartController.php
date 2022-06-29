<?php

namespace App\Http\Controllers\Front; 

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use DB;
use Debugbar;

class CartController extends Controller
{

    protected $cart;

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }

    public function index()
    {
        $view = View::make('front.pages.cart.index');

        if(request()->ajax()) {
            
            $sections = $view->renderSections(); 

            return response()->json([
                'content' => $sections['content'],
            ]);
        }

        return $view;
    }

    public function store(Request $request)
    {

        for($i = 0; $i < request('amount'); $i++) {

            $cart = $this->cart->create([
                'price_id' => request('price_id'),
                'fingerprint_id' => '1', // Falta indicar aquí la clave foranea del fingerprint
                'client_id' => '1',
                'active' => 1,
            ]);
        }

        $carts = $this->cart->select(DB::raw('count(price_id) as amount'),'price_id')
            ->groupByRaw('price_id')
            ->where('active', 1)
            ->where('carts.fingerprint', $request->cookie('fp'))
            ->where('sell_id', null)
            ->orderBy('price_id', 'desc')
            ->get();

        $totals = $this->cart
            ->where('fingerprint', $request->cookie('fp'))
            ->where('carts.active', 1)
            ->where('carts.sell_id', null)
            ->join('prices', 'prices.id', '=', 'carts.price_id')
            ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
            ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('sum(prices.base_price * taxes.multiplicator) as total') )
            ->first();

        $taxes = $this->cart
            ->where('carts.fingerprint', $request->cookie('fp'))
            ->where('carts.active', 1)
            ->where('carts.sell_id', null)
            ->join('prices', 'prices.id', '=', 'carts.price_id')
            ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
            ->select(DB::raw('taxes.type as tax'))
            ->first();

        $sections = View::make('front.pages.cart.index')
            ->with('fingerprint', $request->cookie('fp'))
            ->with('carts', $carts)
            ->with('tax', $taxes->tax)
            ->with('base_total', $totals->base_total)
            ->with('total', $totals->total)
            ->with('tax_total', ($totals->total - $totals->base_total))
            ->renderSections();

        return response()->json([
            'content' => $sections['content'],
        ]);
    }

    public function add($price_id, Request $request)
    {

        $cart = $this->cart->create([
            'price_id' => $price_id,
            'fingerprint' => $request->cookie('fp'),
            'client_id' => '1',
            'active' => 1,
        ]);

        $carts = $this->cart->select(DB::raw('count(price_id) as amount'),'price_id')
            ->groupByRaw('price_id')
            ->where('active', 1)
            ->where('carts.fingerprint', $request->cookie('fp'))
            ->where('sell_id', null)
            ->orderBy('price_id', 'desc')
            ->get();

        $totals = $this->cart
            ->where('fingerprint', $request->cookie('fp'))
            ->where('carts.active', 1)
            ->where('carts.sell_id', null)
            ->join('prices', 'prices.id', '=', 'carts.price_id')
            ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
            ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('sum(prices.base_price * taxes.multiplicator) as total') )
            ->first();

        $taxes = $this->cart
            ->where('carts.fingerprint', $request->cookie('fp'))
            ->where('carts.active', 1)
            ->where('carts.sell_id', null)
            ->join('prices', 'prices.id', '=', 'carts.price_id')
            ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
            ->select(DB::raw('taxes.type as tax'))
            ->first();

        $sections = View::make('front.pages.cart.index')
            ->with('fingerprint', $request->cookie('fp'))
            ->with('carts', $carts)
            ->with('tax', $taxes->tax)
            ->with('base_total', $totals->base_total)
            ->with('total', $totals->total)
            ->with('tax_total', ($totals->total - $totals->base_total))
            ->renderSections();

        return response()->json([
            'content' => $sections['content'],
        ]);
    }

    public function remove($price_id, Request $request)
    {

        $cart = $this->cart
            ->where('fingerprint', $request->cookie('fp'))
            ->where('price_id', $price_id)
            ->where('sell_id', null)
            ->where('active', 1)
            ->first();
        
        $cart->active = 0;
        $cart->save();

        $carts = $this->cart->select(DB::raw('count(price_id) as amount'),'price_id')
            ->groupByRaw('price_id')
            ->where('active', 1)
            ->where('carts.fingerprint', $request->cookie('fp'))
            ->where('sell_id', null)
            ->orderBy('price_id', 'desc')
            ->get();

        $totals = $this->cart
            ->where('fingerprint', $request->cookie('fp'))
            ->where('carts.active', 1)
            ->where('carts.sell_id', null)
            ->join('prices', 'prices.id', '=', 'carts.price_id')
            ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
            ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('sum(prices.base_price * taxes.multiplicator) as total') )
            ->first();

        $taxes = $this->cart
            ->where('carts.fingerprint', $request->cookie('fp'))
            ->where('carts.active', 1)
            ->where('carts.sell_id', null)
            ->join('prices', 'prices.id', '=', 'carts.price_id')
            ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
            ->select(DB::raw('taxes.type as type'))
            ->first();

        $sections = View::make('front.pages.cart.index')
            ->with('fingerprint', $request->cookie('fp'))
            ->with('carts', $carts)
            ->with('base_total', $totals->base_total)
            ->with('total', $totals->total)
            ->with('tax_total', ($totals->total - $totals->base_total))
            ->with('tax', $taxes->type)
            ->renderSections();

        return response()->json([
            'content' => $sections['content'],
        ]);
    }
}
