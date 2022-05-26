<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $guarded = []; // protected $guarded = ["password"]; Ejemplo de como evitar guardar las contraseñas en la base de datos.
}