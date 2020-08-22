<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Rol;

class RolUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = Rol::where('nombre','Administrador')->first();
        $user = User::where('name','admin')->first();
        DB::table('rol_users')->insert(
            ['id_rol' => $rol->id,
            'id_users' => $user->id,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")]
        );
    }
}
