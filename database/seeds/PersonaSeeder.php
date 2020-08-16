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
        Persona::create([
            'nombre' => 'Luis Ángel',
            'apellido' => 'González Macchi',
            'cedula' => '666666',
            'telefono' => '0971666666',
            'direccion' => 'Avda. Facundo Machain',
        ]);
        Persona::create([
            'nombre' => 'Raúl',
            'apellido' => 'Cubas Grau',
            'cedula' => '777777',
            'telefono' => '0971777777',
            'direccion' => 'Avda. Facundo Machain',
        ]);
        Persona::create([
            'nombre' => 'Juan Carlos',
            'apellido' => 'Wasmosy',
            'cedula' => '888888',
            'telefono' => '0971888888',
            'direccion' => 'Avda. Facundo Machain',
        ]);
        Persona::create([
            'nombre' => 'Andrés',
            'apellido' => 'Rodríguez',
            'cedula' => '999999',
            'telefono' => '0971999999',
            'direccion' => 'Avda. Facundo Machain',
        ]);
        Persona::create([
            'nombre' => 'Alfredo',
            'apellido' => ' Stroessner',
            'cedula' => '1000000',
            'telefono' => '0972000000',
            'direccion' => 'Avda. Facundo Machain',
        ]);
        Persona::create([
            'nombre' => 'Tomás',
            'apellido' => 'Romero Pereira',
            'cedula' => '1111111',
            'telefono' => '0972111111',
            'direccion' => 'Avda. Facundo Machain',
        ]);
        Persona::create([
            'nombre' => 'Federico',
            'apellido' => 'Chaves',
            'cedula' => '1222222',
            'telefono' => '0972222222',
            'direccion' => 'Avda. Facundo Machain',
        ]);
        Persona::create([
            'nombre' => 'Felipe',
            'apellido' => 'Molas López',
            'cedula' => '1333333',
            'telefono' => '0972333333',
            'direccion' => 'Avda. Facundo Machain',
        ]);
        Persona::create([
            'nombre' => 'Raimundo',
            'apellido' => 'Rolón',
            'cedula' => '1444444',
            'telefono' => '0972444444',
            'direccion' => 'Avda. Facundo Machain',
        ]);
        Persona::create([
            'nombre' => 'Juan Natalicio',
            'apellido' => 'González',
            'cedula' => '1555555',
            'telefono' => '0972555555',
            'direccion' => 'Avda. Facundo Machain',
        ]);
        Persona::create([
            'nombre' => 'Juan Manuel',
            'apellido' => 'Frutos',
            'cedula' => '1666666',
            'telefono' => '0972666666',
            'direccion' => 'Avda. Facundo Machain',
        ]);
        Persona::create([
            'nombre' => 'Higinio',
            'apellido' => 'Morínigo',
            'cedula' => '1777777',
            'telefono' => '0972777777',
            'direccion' => 'Avda. Facundo Machain',
        ]);

        Persona::create([
            'nombre' => 'José Félix',
            'apellido' => 'Estigarribia',
            'cedula' => '1888888',
            'telefono' => '0972888888',
            'direccion' => 'Avda. Facundo Machain',
        ]);
        Persona::create([
            'nombre' => 'Félix',
            'apellido' => 'Paiva',
            'cedula' => '1999999',
            'telefono' => '0972999999',
            'direccion' => 'Avda. Facundo Machain',
        ]);
        Persona::create([
            'nombre' => 'Rafael',
            'apellido' => 'Franco',
            'cedula' => '2000000',
            'telefono' => '0973000000',
            'direccion' => 'Avda. Facundo Machain',
        ]);
    }
}
