<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function price() 
    {
        return $this->belongsTo(Price::class);
    }

    public function fingerPrint() 
    {
        return $this->belongsTo(FingerPrint::class);
    }

    public function client() 
    { 
        return $this->belongsTo(Client::class);
    }

    public function sell()
    {
        return $this->belongsTo(Sell::class);
    }
}