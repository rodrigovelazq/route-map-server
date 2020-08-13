<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'password' => '$2y$10$ho8s41qzymnJ9XKyy4YX5.p9NPr/A61O3x0Je9Oc/owtBFrAJyRsu',//secreto
        ]);
    }
}
