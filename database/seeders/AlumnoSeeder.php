<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Alumno::create([
            'n_control' => '123456789012',
            'nombre' => 'Pepe',
            'edad' => 17,
            'sexo' => 1,
            'fecha_nacimiento' => '2004/10/22',
            'domicilio' => 'Calle Tierra',
            'telefono' => '6672345685'
        ],[
            'n_control' => '123456789012',
            'nombre' => 'Pepe',
            'edad' => 17,
            'sexo' => 1,
            'fecha_nacimiento' => '2004/10/22',
            'domicilio' => 'Calle Tierra',
            'telefono' => '6672345685'
        ],[
            'n_control' => '123456789012',
            'nombre' => 'Pepe',
            'edad' => 17,
            'sexo' => 1,
            'fecha_nacimiento' => '2004/10/22',
            'domicilio' => 'Calle Tierra',
            'telefono' => '6672345685'
        ],[
            'n_control' => '123456789012',
            'nombre' => 'Pepe',
            'edad' => 17,
            'sexo' => 1,
            'fecha_nacimiento' => '2004/10/22',
            'domicilio' => 'Calle Tierra',
            'telefono' => '6672345685'
        ],['n_control' => '123456789012',
        'nombre' => 'Juan',
        'edad' => 17,
        'sexo' => 1,
        'fecha_nacimiento' => '2004/10/22',
        'domicilio' => 'Calle Tierra',
        'telefono' => '6672345685']);
    }
}
