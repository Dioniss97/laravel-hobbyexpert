<?php

namespace App\Http\Controllers\Front; 

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Cart;

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

    public function store($price_id, $amount)
    {

        $cart = $this->cart->updateOrCreate([
                'id' => request('id')],[
                'price_id' => $price_id,
                'fingerprint_id' => $price_id,
                'sell_id' => $price_id,
                'active' => 1,
            ]
        );
    }
}