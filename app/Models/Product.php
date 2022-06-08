<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "products";
    
    public function product_categories()
    {
        return $this->belongsToMany(ProductCategory::class, 'category_id');
    }
}