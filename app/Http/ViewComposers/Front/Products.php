<?php

namespace App\Http\ViewComposers\Front;

use Illuminate\View\View;
use App\Models\Product;
use App\Providers\ViewComposerServiceProvider;

class Products
{
    static $composed;
    protected $table = "products";
    // $composed is a static variable that stores the result of the view composer.
    // This variable is used to prevent the view composer from being executed more than once.
    // This is useful when the view composer is used in a view that is rendered multiple times.

    // An static variable is used to store the result of the view composer only once.

    public function __construct(Product $products)
    {
        $this->products = $products;
    }

    public function compose(View $view)
    {

        if(static::$composed)
        {
            return $view->with('products', static::$composed);
        }

        static::$composed = $this->products->where('active', 1)->get();

        $view->with('products', static::$composed);

    }
}