<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $fillable = [
        'nombre', 'descripcion'
    ];
    protected $table = 'rol';


    public function permisos()
    {
        return $this->belongsToMany('App\Permiso', 'rol_permiso', 'id_rol', 'id_permiso');
    }
}
