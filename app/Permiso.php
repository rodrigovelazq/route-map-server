<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $fillable = [
        'nombre', 'descripcion'
    ];

    protected $hidden = [
        'id'
    ];
    protected $table = 'permiso';
}
