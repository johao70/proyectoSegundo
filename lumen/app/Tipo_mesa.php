<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_mesa extends Model
{
    protected $fillable = [
        'descripcion', 'capacidad'
    ];
}