<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function paymentMethods() 
    {
        return $this->belongsTo(PaymentMethod::class);
    }

    public function fingerPrints()
    {
        return $this->hasMany(FingerPrint::class);
    }
}