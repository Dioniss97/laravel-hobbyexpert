<?php

namespace App\Http\Controllers\Front; 

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use App\Http\Requests\Front\ProductCategoryRequest;
use Debugbar;

class ProductCategoryController extends Controller
{

    protected $product_category;

    public function __construct(ProductCategory $product_category)
    {
        $this->product_category = $product_category;
    }

    public function index()
    {
        $view = View::make('front.pages.products.index')
        ->with('product_categories', $this->product_category
        ->where('active', 1)->get())
        ->with('product_category', $product_category);

        if(request()->ajax()) {
            
            $sections = $view->renderSections(); 

            return response()->json([
                'table' => $sections['table'],
                'form' => $sections['form'],
            ]);
        }

        return $view;
    }

    public function create()
    {
        $view = View::make('front.pages.products.index')
        ->with('product_category', $this->product_category)
        ->renderSections();

        return response()->json([
            'form' => $view['form']
        ]);
    }

    public function store(ProductRequest $request)
    {            

        $product_category = $this->product_category->updateOrCreate([
                'id' => request('id')],[
                'name' => request('name'),
                'title' => request('title'),
                'visible' => 1,
                'active' => 1,
        ]);

        $view = View::make('front.pages.products.index')
        ->with('product_categories', $this->product_category->where('active', 1)->get())
        ->with('product_category', $product_category)
        ->renderSections();

        return response()->json([
            'table' => $view['table'],
            'form' => $view['form'],
            'id' => $product_category->id,
        ]);
    }

    public function edit(ProductCategory $product_category)
    {
        $view = View::make('front.pages.products.index')
        ->with('product_category', $product_category)
        ->with('product_categories', $this->product_category->where('active', 1)->get());   
        
        if(request()->ajax()) {

            $sections = $view->renderSections(); 
    
            return response()->json([
                'form' => $sections['form'],
            ]); 
        }

        return $view;
    }

    public function show(ProductCategory $product_category){
        
    }

    public function showByCategory(ProductCategory $product_category)
    {

        $view = View::make('front.pages.products.index')->with('products', $product_category->products->where('active', 1));

        Debugbar::info($view);

        if(request()->ajax()) {

            $sections = $view->renderSections(); 

            return response()->json([
                'content' => $sections['content'],
            ]);
        }
    }
}