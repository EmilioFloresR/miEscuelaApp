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
    function registrar(){
        return view('alumnos.registrar');
    }

    function guardar(Request $datos){
        $alumno = Alumno::create($datos->post());

        return redirect('/alumnos');
    }

    function eliminar($id){
        $alumno= Alumno::find($id);
        $alumno->delete();

        return redirect('/alumnos');
    }

    function editar($id){
        $alumno = Alumno::find($id);
        
        return view('alumnos.editar', compact('alumno'));
    }

    function actualizar(Request $datos, $id){
        $alumno = Alumno::find($id);
        $alumno->n_control = $datos->input('n_control');
        $alumno->nombre = $datos->input('nombre');
        $alumno->edad = $datos->input('edad');
        $alumno->sexo = $datos->input('sexo');
        $alumno->fecha_nacimiento = $datos->input('fecha_nacimiento');
        $alumno->n_control = $datos->input('domicilio');
        $alumno->n_control = $datos->input('telefono');
        $alumno->save();

        return redirect('/alumnos');
    }

}
