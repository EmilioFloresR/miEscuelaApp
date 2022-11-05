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
            'clave' => '5AMP',
            'turno' => 0,
            'descripcion' => 'Programacion matutino'
        ]);
        Grupo::create([
            'clave' => '5AMCO',
            'turno' => 0,
            'descripcion' => 'Contabilidad matutino'
        ]);   
        Grupo::create([
            'clave' => '5AVP',
            'turno' => 1,
            'descripcion' => 'Programacion vespertino'
        ]);   
        Grupo::create([
            'clave' => '5AMC',
            'turno' => 0,
            'descripcion' => 'Construccion Matutino'
        ]);   
        Grupo::create([
            'clave' => '5AMO',
            'turno' => 0,
            'descripcion' => 'Ofimatica Matutino'
        ]);      
        Grupo::create([
            'clave' => '5AVCO',
            'turno' => 1,
            'descripcion' => 'Contabilidad Vespertino'
        ]);   
    }
}
