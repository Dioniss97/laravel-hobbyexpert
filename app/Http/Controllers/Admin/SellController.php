<?php

namespace App\Http\Controllers\Admin; 

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Sell;
use App\Models\Cart;
use DB;
use Debugbar;

class SellController extends Controller
{

    protected $sell;

    public function __construct(Sell $sell, Cart $cart)
    {
        $this->sell = $sell;
        $this->cart = $cart;
    }

    public function index(Sell $sell)
    {

        $sells = $this->sell
            ->where('active', 1)->get();

        $counter = $this->sell
            ->where('active', 1)->count();

        $view = View::make('admin.pages.sells.index')
            ->with('sell', null)
            ->with('sells', $sells)
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

    public function edit(Sell $sell, Cart $cart)
    {
        $carts = $this->cart
            ->where('sell_id', $sell->id)
            ->get();

        $counter = $this->sell
            ->where('active', 1)->count();

        $view = View::make('admin.pages.sells.index')
            ->with('sell', $sell)
            ->with('carts', $carts)
            ->with('counter', $counter)
            ->with('amount', $totals->amount)
            ->with('base_total', $totals->base_total)
            ->with('tax_total', ($totals->total - $totals->base_total))
            ->with('total', $totals->total);

        if (request()->ajax()) {

            $sections = $view->renderSections();

            return response()->json([
                'form' => $sections['form'],
            ]);
        }

        return $view;
    }
}