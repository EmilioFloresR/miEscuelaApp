<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especialidad;

class EspecialidadController extends Controller
{
    function consultar(){
        $especialidades = Especialidad::paginate(3);

        return view('Especialidades.especialidades', compact('especialidades'));
    }
    function registrar(){
        return view('especialidades.registrar');
    }

    function guardar(Request $datos){
        $especialidad = Especialidad::create($datos->post());

        return redirect('/especialidades');
    }

    function eliminar($id){
        $especialidad= Especialidad::find($id);
        $especialidad->delete();

        return redirect('/especialidades');
    }

    function editar($id){
        $especialidad = Especialidad::find($id);
        
        return view('especialidades.editar', compact('especialidad'));
    }

    function actualizar(Request $datos, $id){
        $especialidad = Especialidad::find($id);
        $especialidad->nombre = $datos->input('nombre');
        $especialidad->save();

        return redirect('/especialidades');
    }

}
