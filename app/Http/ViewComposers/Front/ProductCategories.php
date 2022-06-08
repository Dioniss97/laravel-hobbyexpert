<?php

namespace App\Http\ViewComposers\Admin;

use Illuminate\View\View;
use App\Models\ProductCategory;
use App\Providers\ViewComposerServiceProvider;

class ProductCategories
{
    static $composed;
    // $composed is a static variable that stores the result of the view composer.
    // This variable is used to prevent the view composer from being executed more than once.
    // This is useful when the view composer is used in a view that is rendered multiple times.

    public function __construct(ProductCategory $product_categories)
    {
        $this->product_categories = $product_categories;
    }

    public function compose(View $view)
    {

        if(static::$composed)
        {
            return $view->with('product_categories', static::$composed);
        }

        static::$composed = $this->product_categories->where('active', 1)->orderBy('title', 'asc')->get();

        $view->with('product_categories', static::$composed);

    }
}