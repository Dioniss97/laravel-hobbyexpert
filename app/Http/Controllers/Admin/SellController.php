<?php

namespace App\Http\Controllers\Admin; 

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Sell;
use DB;
use Debugbar;

class SellController extends Controller
{

    protected $sell;

    public function __construct(Sell $sell)
    {
        $this->sell = $sell;
    }


    public function index(Sell $sell)
    {

        $sells = $this->sell
            ->where('active', 1)->get();

        $counter = $this->sell
            ->where('active', 1)->count();

        $view = View::make('admin.pages.sells.index')
            ->with('sells', $sells)
            ->with('sell', null)
            ->with('counter', $counter);

        if (request()->ajax()) {

            $sections = $view->renderSections(); 

            return response()->json([
                'table' => $sections['table'],
                'form' => $sections['form'],
            ]);
        }

        return $view;
    }

    public function edit(Sell $sell)
    {

        Debugbar::info($sell->id);

        $counter = $this->sell
            ->where('active', 1)->count();

        $products = $this->sell
            ->where('active', 1)
            ->where('id', $sell->id)
            ->join('carts', 'carts.sell_id', '=', 'sells.id')
            ->join('prices', 'prices.id', '=', 'carts.price_id')
            ->join('products', 'products.id', '=', 'prices.product_id')
            ->select('products.id', 'products.name', 'sum(carts.id) as amount', 'prices.base_price', 'sum(prices.base_price as base_total')

        $view = View::make('admin.pages.sells.index')
            ->with('sell', $sell)
            ->with('sells', $this->sell->where('active', 1)->get())
            ->with('counter', $counter)
            ->with('products', $products)
            ->with('base_total', $products->);

        if (request()->ajax()) {

            $sections = $view->renderSections(); 

            return response()->json([
                'table' => $sections['table'],
                'form' => $sections['form'],
            ]);
        }
    }
}