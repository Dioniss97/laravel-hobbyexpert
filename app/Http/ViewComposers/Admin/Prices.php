<?php

namespace App\Http\ViewComposers\Admin;

use Illuminate\View\View;
use App\Models\Price;
use App\Providers\ViewComposerServiceProvider;

class Prices
{
    static $composed;
    // $composed is a static variable that stores the result of the view composer.
    // This variable is used to prevent the view composer from being executed more than once.
    // This is useful when the view composer is used in a view that is rendered multiple times.

    public function __construct(Price $prices)
    {
        $this->prices = $prices;
    }

    public function compose(View $view)
    {

        if(static::$composed)
        {
            return $view->with('prices', static::$composed);
        }

        static::$composed = $this->prices->where('valid', 1)->get();

        $view->with('prices', static::$composed);

    }
}