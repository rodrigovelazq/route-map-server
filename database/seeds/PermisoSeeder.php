<?php

use Illuminate\Database\Seeder;
use App\Permiso;

class PermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permiso::create([
            'nombre' => 'index_persona',
            'descripcion' => 'Permite indexar Personas',
        ]);
        Permiso::create([
            'nombre' => 'create_persona',
            'descripcion' => 'Permite crear Personas',
        ]);
        Permiso::create([
            'nombre' => 'update_persona',
            'descripcion' => 'Permite actualizar Personas',
        ]);
        Permiso::create([
            'nombre' => 'delete_persona',
            'descripcion' => 'Permite eliminar Personas',
        ]);
    }
}
