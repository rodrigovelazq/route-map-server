<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(PersonaSeeder::class);
        $this->call(PermisoSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(RolPermisoSeeder::class);
        $this->call(RolUsersSeeder::class);

    }
}
