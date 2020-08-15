<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = [
        'nombre', 'apellido', 'cedula','telefono','direccion'
    ];
    protected $table = 'persona';
}
