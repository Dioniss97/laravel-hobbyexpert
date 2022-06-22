<?php

namespace App\Http\Controllers\Admin; 

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Price;
use App\Http\Requests\Admin\ProductRequest;
use Debugbar;

class ProductController extends Controller
{
    protected $product;

    public function __construct(Product $product, Price $price)
    {
        $this->product = $product;
        $this->price = $price;

        Debugbar::info($price);
    }

    public function index()
    {

        $view = View::make('admin.pages.products.index')
            ->with('product', $this->product)
            ->with('products', $this->product->where('active', 1)->get());

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
                'name' => request('title'),
                'title' => request('title'),
                'description' => request('description'),
                'specs' => request('specs'),
                'category_id' => request('category_id'),
                'visible' => 1,
                'active' => 1,
            ]
        );

        $this->price->where('product_id', $product->id)->update([
            'valid' => 0,
        ]);

        $this->price->create([
            'product_id' => $product->id,
            'base_price' => request('base_price'),
            'tax_id' => request('tax_id'),
            'valid' => 1,
            'active' => 1,
        ]);

        $view = View::make('admin.pages.products.index')
        ->with('products', $this->product->where('active', 1)->get())
        ->with('product', $product)
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