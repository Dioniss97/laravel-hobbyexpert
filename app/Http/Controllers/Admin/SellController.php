<?php

namespace App\Http\Controllers\Admin; 

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Sell;
use App\Http\Requests\Admin\SellRequest;
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
    
    public function index()
    {
        $sells = $this->sell
        ->where('active', 1)->get();

        $view = View::make('admin.pages.sells.index')
            ->with('sells', $sells);

            DebugBar::info($sells);

        // if(request()->ajax()) {

            $sections = $view->renderSections(); 

            return response()->json([
                'table' => $sections['table'],
                'form' => $sections['form'],
            ]);
        // }

        return $view;
    }

    public function edit(Sell $sell)
    {

        Debugbar::info($sell->id);

        $sell = $this->sell
            ->select(DB::raw('count(sells.id) as sells_volume'))
            ->where('client_id', 1)
            ->get();

        $view = View::make('admin.pages.sells.index')
            ->with('sell', $sell->where('id', $sell->id))
            ->with('sells', $this->sell->where('active', 1)->get());

        if(request()->ajax()) {

            Debugbar::info($view);

            $sections = $view->renderSections();

            Debugbar::info($sections);
    
            return response()->json([
                'form' => $sections['form'],
            ]); 
        }

        return $view;
    }
}