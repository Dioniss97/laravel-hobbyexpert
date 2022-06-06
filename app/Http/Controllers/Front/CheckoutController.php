<?php

namespace App\Http\Controllers\Front; 

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Checkout;
use App\Http\Requests\Front\CheckoutRequest;

class CheckoutController extends Controller
{

    protected $checkout;

    public function __construct(Checkout $checkout)
    {
        $this->checkout = $checkout;
    }


    public function index()
    {
        $view = View::make('front.pages.checkout.index');

        if(request()->ajax()) {
            
            $sections = $view->renderSections(); 

            return response()->json([
                'content' => $sections['content'],
            ]);
        }

        return $view;
    }

    public function store(CheckoutRequest $request)
    {            

        $checkout = $this->checkout->Create( [
            'name' => request('name'),
            'surnames' => request('surnames'),
            'email' => request('email'),
            'phone' => request('phone'),
            'province' => request('province'),
            'postal_code' => request('postal_code'),
            'address' => request('address'),
            'active' => 1,
        ]);

        $sections = View::make('front.pages.checkout.index')->renderSections();

        return response()->json([
            'content' => $sections['content'],
        ]);
    }

}