@extends('master')

@section('contenido')
    <h1>Editar Especialidades</h1><hr>
    <form action="{{ url('/especialidad/actualizar') }}/{{$especialidad->id}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">ID:</label>
            <input value="{{$especialidad->id}}" type="text" class="form-control" name="id" disabled>
        </div>
        <div class="form-group">
            <label for="">Nombre:</label>
            <input value="{{$especialidad->nombre}}" type="text" class="form-control" name="nombre" required>
        </div>
        <div>
            <input type="submit" value="Actualizar" class="btn btn-primary">
            <a href="{{ url('/especialidades') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@stop