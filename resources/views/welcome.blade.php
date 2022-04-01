@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
    <div class="row">
        <div class="col">
            <div class="p-5 my-4 bg-light rounded-3 shadow">
                <div class="container-fluid">
                    <h1 class="display-5 fw-bold">CRUD con Laravel y MySQL</h1>
                    <a class="btn btn-primary" href="{{ route("personas.create") }}" type="button">Agregar Persona</a>
                </div>
              </div>
        </div>
    </div>
    @if ($mensaje = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{$mensaje}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">
        <div class="col">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-hover table-light table-bordered table-sm table-responsive-sm shadow text-center">
                <thead>
                    <tr>
                        <th scope="col">Apellido Paterno</th>
                        <th scope="col">Apellido Materno</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Fecha de Nacimiento</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datos as $dato)
                        <tr>
                            <td scope="row">{{$dato->paterno}}</th>
                            <td>{{$dato->materno}}</td>
                            <td>{{$dato->nombre}}</td>
                            <td>{{$dato->fecha_nacimiento}}</td>
                            <td><a href="{{ route('personas.edit', $dato->id)}}" class="btn btn-outline-warning">Editar</a></td>
                            <td><a href="{{ route('personas.show', $dato->id)}}" class="btn btn-outline-danger">Eliminar</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col">
            {{$datos->links()}}
        </div>
    </div>
@endsection