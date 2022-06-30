<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fingerprint extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function client() 
    {
        return $this->belongsTo(Client::class);
    }

    public function carts() 
    {
        return $this->hasMany(Cart::class);
    }
}