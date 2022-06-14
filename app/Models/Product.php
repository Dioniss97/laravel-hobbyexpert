<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "products";

    public function category()
    {

        /*
            * En la siguiente línea se establece la relación entre el producto y la categoría.
            * La función belongsToMany() es una función que pasa los parámetros siguientes:
            *   1. El modelo que se relaciona.
            *   2. La tabla intermedia.
            *   3. La clave primaria del modelo 1 que se relaciona.
            *   4. La clave primaria del modelo 2 que se relaciona.
            *
            * return $this->belongsToMany(ProductCategory::class, 'product_category_product', 'product_id', 'product_category_id');
        */

        return $this->belongsTo(ProductCategory::class);
    }

    public function taxes() 
    {
        return $this->hasMany(Product::class);
    }
}