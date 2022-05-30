<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    // Guardamos en esa variable el nombre de los campos que no se pueden modificar. Es para evitar ataques de inyección de código.
    protected $guarded = []; // protected $guarded = ["password"]; Ejemplo de como evitar guardar las contraseñas en la base de datos.
}