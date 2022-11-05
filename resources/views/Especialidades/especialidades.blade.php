@extends('master')

@section('contenido')
    <h1>Listado de especialidades</h1><hr>
    <a href="{{ url('/especialidad/registrar') }}" class="btn btn-secondary">Registrar Especialidad</a><br><br>
    <table class="table table-hover">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
        </thead>
        <body>
            @foreach ($especialidades as $a)
            <tr>
                <td>{{$a->id}}</td>
                <td>{{$a->nombre}}</td>
                <td>
                <a href="{{url('/especialidad/editar')}}/{{$a->id}}" class="btn btn-primary btn-sm">editar</a>   
                <a href="{{url('/especialidad/eliminar')}}/{{$a->id}}" class="btn btn-danger btn-sm">eliminar</a>
                </td>
            </tr>               
            @endforeach
    </table>
    <div class="text-center">
        {{$especialidades->links()}}
    </div>
@stop