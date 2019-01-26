<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
        'pers_ci', 'nombre', 'telefono', 'correo', 'clave'
    ];
}