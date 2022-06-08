<?php

namespace App\Http\Controllers\Admin; 

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Http\Requests\Admin\ProductRequest;
use Debugbar;

class ProductController extends Controller
{
    protected $product;
    protected $product_category;

    public function __construct(Product $product, ProductCategory $product_category)
    {
        $this->product = $product;
        $this->product_category = $product_category;
    }

    public function index()
    {

        $view = View::make('admin.pages.products.index')
            ->with('product', $this->product)
            ->with('products', $this->product->where('active', 1)->get())
            ->with('product_categories', $this->product_category->where('active', 1)->get());

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

       $view = View::make('admin.pages.products.index')
        ->with('product', $this->product)
        ->renderSections();

        return response()->json([
            'form' => $view['form']
        ]);
    }

    public function store(ProductRequest $request)
    {            

        $product = $this->product->updateOrCreate([
                'id' => request('id')],[
                'name' => request('name'),
                'title' => request('title'),
                'description' => request('description'),
                'specs' => request('specs'),
                'price' => request('price'),
                'product_category_id' => request('category_id'),
                'visible' => 1,
                'active' => 1,
            ]
        );

        $view = View::make('admin.pages.products.index')
        ->with('products', $this->product->where('active', 1)->get())
        ->with('product', $product)
        ->with('product_categories', $this->product_category->where('active', 1)->get());
        ->renderSections();

        return response()->json([
            'table' => $view['table'],
            'form' => $view['form'],
            'id' => $product->id,
        ]);
    }

    public function edit(Product $product)
    {
        $view = View::make('admin.pages.products.index')
        ->with('product', $product)
        ->with('products', $this->product->where('active', 1)->get());   
        
        if(request()->ajax()) {

            $sections = $view->renderSections(); 
    
            return response()->json([
                'form' => $sections['form'],
            ]); 
        }
                
        return $view;
    }

    public function show(Product $product){
        
    }

    public function destroy(Product $product)
    {
        $product->active = 0;
        $product->save();

        $view = View::make('admin.pages.products.index')
            ->with('product', $this->product)
            ->with('products', $this->product->where('active', 1)->get())
            ->renderSections();
        
        return response()->json([
            'table' => $view['table'],
            'form' => $view['form']
        ]);
    }
}