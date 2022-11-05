<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grupo;

class AlumnoController extends Controller
{
    function consultar(){
        $grupos = Grupo::paginate(3);

        return view('Grupos.grupos', compact('grupos'));
    }
    function registrar(){
        return view('grupos.registrar');
    }

    function guardar(Request $datos){
        $grupo = Grupo::create($datos->post());

        return redirect('/grupos');
    }

    function eliminar($id){
        $alumno= Grupo::find($id);
        $alumno->delete();

        return redirect('/grupos');
    }

    function editar($id){
        $alumno = Grupo::find($id);
        
        return view('grupos.editar', compact('grupo'));
    }

    function actualizar(Request $datos, $id){
        $grupo = Grupo::find($id);
        $grupo->clave = $datos->input('clave');
        $grupo->clave = $datos->input('turno');
        $grupo->clave = $datos->input('descripcion');

        return redirect('/grupos');
    }

}
