<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function product()
    {
        return $this->belongsTo(Product::class)->where('active', 1);
    }

    public function tax()
    {
        return $this->belongsTo(Tax::class)->where('valid', 1);
    }
}