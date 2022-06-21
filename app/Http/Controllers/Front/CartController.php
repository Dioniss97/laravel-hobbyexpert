<?php

namespace App\Http\Controllers\Front; 

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use Request;
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
                'fingerprint' => '1',
                'active' => 1,
            ]);
        }

        $totalPrices = DB::table('carts')
            ->join('prices', 'carts.price_id', '=', 'prices.id')
            ->where('carts.fingerprint', $cart->fingerprint)
            ->where('carts.active', '1')
            ->sum('prices.base_price');

        $carts = $this->cart->select(DB::raw('count(price_id) as amount'), 'price_id')
            ->groupByRaw('price_id')
            ->where('active', '1')
            ->where('fingerprint', $cart->fingerprint)
            ->get();

        $sections = View::make('front.pages.cart.index')
            ->with('carts', $carts)
            ->with('fingerprint', $cart->fingerprint)
            ->with('totalPrices', $totalPrices)
            ->renderSections();

        return response()->json([
            'content' => $sections['content'],
        ]);
    }

    public function add($price_id, $fingerprint)
    {

        $cart = $this->cart->create([
            'price_id' => $price_id,
            'fingerprint' => $fingerprint,
            'active' => 1,
        ]);

        $totalPrices = DB::table('carts')
            ->join('prices', 'carts.price_id', '=', 'prices.id')
            ->where('carts.fingerprint', $cart->fingerprint)
            ->where('carts.active', '1')
            ->sum('prices.base_price');

        $carts = $this->cart->select(DB::raw('count(price_id) as amount'), 'price_id')
            ->groupByRaw('price_id')
            ->where('active', '1')
            ->where('fingerprint', $fingerprint)
            ->get();

        $sections = View::make('front.pages.cart.index')
            ->with('carts', $carts)
            ->with('fingerprint', $fingerprint)
            ->with('totalPrices', $totalPrices)
            ->renderSections();

        return response()->json([
            'content' => $sections['content'],
        ]);
    }

    public function remove($fingerprint, $price_id)
    {
        $cart = $this->cart->where('fingerprint', $fingerprint)->where('price_id', $price_id)->first()->delete();

        $totalPrices = DB::table('carts')
            ->join('prices', 'carts.price_id', '=', 'prices.id')
            ->where('carts.fingerprint', $fingerprint)
            ->where('carts.active', '1')
            ->sum('prices.base_price');

        $carts = $this->cart->select(DB::raw('count(price_id) as amount'), 'price_id')
            ->groupByRaw('price_id')
            ->where('active', $fingerprint)
            ->where('fingerprint', '1')
            ->get();

        $sections = View::make('front.pages.cart.index')
            ->with('carts', $carts)
            ->with('fingerprint', $fingerprint)
            ->with('totalPrices', $totalPrices)
            ->renderSections();

        return response()->json([
            'content' => $sections['content'],
        ]);
    }
}