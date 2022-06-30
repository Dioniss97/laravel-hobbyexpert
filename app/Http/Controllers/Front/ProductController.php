<?php

namespace App\Http\Controllers\Front; 

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Debugbar;

class ProductController extends Controller
{

    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {

        $view = View::make('front.pages.products.index')->with('products', $this->product->where('active', 1)->get());

        if(request()->ajax()) {
            
            $sections = $view->renderSections(); 

            return response()->json([
                'content' => $sections['content'],
            ]);
        }

        return $view;
    }

    public function indexByPrice($order) 
    {
        $products = $this->product
            ->where('products.active', 1)
            ->where('products.visible', 1)
            ->join('prices', 'prices.product_id', '=', 'products.id')
            ->orderBy('prices.base_price', $order)
            ->select('products.*', 'prices.base_price')
            ->get();

        $view = View::make('front.pages.products.index')->with('products', $products);

        if(request()->ajax()) {
            
            $sections = $view->renderSections();

            return response()->json([
                'content' => $sections['content'],
            ]);
        }

        return $view;
    }

    public function show(Product $product){

        $view = View::make('front.pages.product.index')->with('product', $product);

        if(request()->ajax()) {

            $sections = $view->renderSections(); 

            return response()->json([
                'content' => $sections['content'],
            ]);
        }

        return $view;
    }
}