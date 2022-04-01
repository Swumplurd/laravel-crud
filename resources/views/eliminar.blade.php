@extends('layouts.plantilla')

@section('title', 'Eliminar')

@section('content')
<div class="row">
    <div class="col">
        <div class="p-5 my-4 bg-light rounded-3 shadow">
            <div class="container-fluid">
                <h1 class="display-5 fw-bold">CRUD con Laravel y MySQL</h1>
                <a class="btn btn-primary" href="{{ route("personas.index") }}" type="button">Atras</a>
            </div>
          </div>
    </div>
</div>
<div class="alert alert-danger show" role="alert">
    <strong>Seguro que deseas borrar?</strong>
</div>
<div class="row">
    <div class="col">
        <table class="table table-light text-center table-hover table-bordered table-sm table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Fecha de Nacimiento</th>
                </tr>
            </thead>
            <tbody>  
                <tr>
                    <td scope="row">{{$persona->paterno}}</td>
                    <td>{{$persona->materno}}</td>
                    <td>{{$persona->nombre}}</td>
                    <td>{{$persona->fecha_nacimiento}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col">
        <a href="{{route('personas.destroy', $persona->id)}}" class="btn btn-danger">Borrar</a>
    </div>
</div>
@endsection