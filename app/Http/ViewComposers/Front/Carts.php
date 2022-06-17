<?php

namespace App\Http\ViewComposers\Front;

use Illuminate\View\View;
use App\Models\Cart;
use App\Providers\ViewComposerServiceProvider;

class Carts
{

    static $composed;
    protected $table = "carts";

    public function __construct(ProductCategory $carts)
    {
        $this->carts = $carts;
    }

    public function compose(View $view)
    {

        if(static::$composed)
        {
            return $view->with('carts', static::$composed);
        }

        static::$composed = $this->carts->where('active', 1)->get();

        $view->with('carts', static::$composed);

    }
}