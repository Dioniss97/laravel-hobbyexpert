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
                // 'sells_id' => null,
                // 'client_id' => null,
                'active' => 1,
            ]);
        }

        // I need to store in the variable $carts the cart that corresponds to the fingerprint 1
        // and prepare the view to show the cart items.
        // Also I need to show the price of the product and the amount of products.

        $fingerprint = '1';

        $carts = $this->cart->select(DB::raw('count(price_id) as amount'), 'price_id')
            ->groupByRaw('price_id')
            ->where('active', '1')
            ->where('fingerprint', $fingerprint)
            ->get();

        $view = View::make('front.pages.cart.index')
        ->with('carts', $carts);

        if(request()->ajax()) {
            
            $sections = $view->renderSections();

            return response()->json([
                'content' => $sections['content'],
            ]);
        }
        Debugbar::info($view);

        return $view;

        // $carts = $this->cart->select(DB::raw('count(price_id) as amount'))
        //     ->groupByRaw('price_id')
        //     ->where('fingerprint', '1')
        //     ->get();

        //     // Inserto en la variable $sections los datos que antes he metido en la variable $carts

        // $sections = View::make('front.pages.cart.index')
        //     ->with('carts', $carts)
        //     ->renderSections();

        //     Debugbar::info($sections);

        //     // Devuelvo los datos en una respuesta json

        //     return view('front.pages.cart.index', [
        //         'carts' => $carts,
        //         'sections' => $sections,
        //     ]);

        // return response()->json([
        //     'content' => $sections['content'],
        // ]);

        // El problema es que en la vista las variables no estan definidas.
    }
}