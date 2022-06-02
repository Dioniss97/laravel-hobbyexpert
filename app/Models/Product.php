<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category()
    {
        /*
            * The category() method is a relationship method that returns the category
            * that belongs to the product.
            *
            * No es necesario ingresar el parametro con el nombre del campo en la tabla
            * que contiene las claves foraneas porque ya sabe que "ejemplo_id" es la id de la tabla "ejemplos".
        */
        return $this->belongsTo(ProductCategory::class);
    }
}