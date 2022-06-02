<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "product_categories"; // "$table" es una variable de laravel que indica el nombre de la tabla.
    // protected $fillable = ['name', 'active']; // "$fillable" es para los campos que se pueden llenar
    // protected $with = ['products']; // "$with" es la variable que permite que la vista pueda acceder a los datos.

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}