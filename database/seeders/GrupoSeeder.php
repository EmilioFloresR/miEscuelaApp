<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Grupo;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Grupo::create([
            'especialidad_id' => 1,
            'clave' => '5AMP',
            'turno' => 0,
            'semestre' => 5,
            'descripcion' => 'Programación matutino'
        ]);
        Grupo::create([
            'especialidad_id' => 2,
            'clave' => '5AMCO',
            'turno' => 0,
            'semestre' => 5,
            'descripcion' => 'Contabilidad matutino'
        ]);
        Grupo::create([
            'especialidad_id' => 4,
            'clave' => '5AVO',
            'turno' => 1,
            'semestre' => 5,
            'descripcion' => 'Ofimática matutino'
        ]);
        Grupo::create([
            'especialidad_id' => 1,
            'clave' => '5AVP',
            'turno' => 1,
            'semestre' => 5,
            'descripcion' => 'Programación vespertino'
        ]);
    }
}
