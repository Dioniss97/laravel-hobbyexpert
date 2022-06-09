<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Models\ProductCategory;
use App\Models\Product;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer([
            'admin.pages.products.index'],
            'App\Http\ViewComposers\Admin\ProductCategories'
        );
        view()->composer([
            'front.pages.products.index'],
            'App\Http\ViewComposers\Front\ProductCategories'
        );
    }
}