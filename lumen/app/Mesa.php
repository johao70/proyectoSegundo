<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $fillable = [
        'tipo_id', 'estado_id', 'nombre'
    ];
}