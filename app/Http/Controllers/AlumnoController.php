<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    function consultar(){
        $alumnos = Alumno::paginate(3);

        return view('Alumnos.alumnos', compact('alumnos'));
    }
}
