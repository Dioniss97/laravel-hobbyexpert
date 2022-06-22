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

            DebugBar::info($sells);

        $sell = $this->sell
            ->where('sells.active', 1)
            ->join('clients', 'sells.client_id', '=', 'clients.id')
            ->select(DB::raw('id', 'name', 'surnames', 'email', 'telephone', 'address', 'postal_code', 'province'));

            DebugBar::info($sell);

        $view = View::make('admin.pages.sells.index')
            ->with('sell', $this->sell)
            ->with('sells', $this->sell
            ->where('active', 1)
            ->get());

        if(request()->ajax()) {

            $sections = $view->renderSections(); 

            return response()->json([
                'table' => $sections['table'],
                'form' => $sections['form'],
            ]);
        }

        return $view;
    }

    public function edit($sell_id)
    {
        $view = View::make('admin.pages.sells.index')
            ->with('sell', $sell)
            ->with('sells', $this->sell->where('active', 1)->get());

        if(request()->ajax()) {

            $sections = $view->renderSections(); 
    
            return response()->json([
                'form' => $sections['form'],
            ]); 
        }

        return $view;
    }
}