<?php

use Illuminate\Database\Seeder;
use App\Persona;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Persona::create([
            'nombre' => 'Mario',
            'apellido' => 'Abdo Benítez',
            'cedula' => '111111',
            'telefono' => '0971111111',
            'direccion' => 'Avda. Mcal Lopez',
        ]);
        Persona::create([
            'nombre' => 'Horacio',
            'apellido' => 'Cartes',
            'cedula' => '222222',
            'telefono' => '0971222222',
            'direccion' => 'Avda. España',
        ]);
        Persona::create([
            'nombre' => 'Federico',
            'apellido' => 'Franco',
            'cedula' => '333333',
            'telefono' => '0971333333',
            'direccion' => 'Avda. Republica Argentina',
        ]);
        Persona::create([
            'nombre' => 'Fernando',
            'apellido' => 'Lugo',
            'cedula' => '444444',
            'telefono' => '0971444444',
            'direccion' => 'Avda. Juan Domingo Peron',
        ]);
        Persona::create([
            'nombre' => 'Nicanor',
            'apellido' => 'Duarte',
            'cedula' => '555555',
            'telefono' => '0971555555',
            'direccion' => 'Avda. Facundo Machain',
        ]);
    }
}
