<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Permiso;
use App\Rol;

class RolPermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = Rol::where('nombre','Administrador')->first();
        foreach (Permiso::all() as $permiso){
            DB::table('rol_permiso')->insert(
                ['id_rol' => $rol->id,
                'id_permiso' => $permiso->id,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")]
            );
        }
    }
}
