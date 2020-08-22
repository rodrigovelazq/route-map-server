<?php

use Illuminate\Database\Seeder;
use App\Rol;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::create([
            'nombre' => 'Administrador',
            'descripcion' => 'Administrador',
        ]);
        Rol::create([
            'nombre' => 'Cliente',
            'descripcion' => 'Cliente',
        ]);
    }
}
