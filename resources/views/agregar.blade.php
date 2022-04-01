@extends('layouts.plantilla')

@section('title', 'Crear')

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
<div class="row gx-0 mb-4">
    <div class="col p-5 bg-light mx-0">
        <form action="{{route('personas.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="paterno" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" id="paterno" name="paterno" aria-describedby="paternoHelp" required>
                <div id="paternoHelp" class="form-text">Ingresa tu apellido paterno</div>
            </div>
            <div class="mb-3">
                <label for="materno" class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" id="materno" name="materno" aria-describedby="maternoHelp" required>
                <div id="maternoHelp" class="form-text">Ingresa tu apellido materno</div>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Apellido Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombreHelp" required>
                <div id="nombreHelp" class="form-text">Ingresa tu nombre</div>
            </div>
            <div class="mb-3">
                <label for="fecha_nacimiento" class="form-label">Apellido Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" aria-describedby="fecha_nacimientoHelp" required>
                <div id="fecha_nacimientoHelp" class="form-text">Ingresa tu fecha_nacimiento</div>
            </div>
            <button type="submit" class="btn btn-success align-self-end">Agregar</button>
        </form>
    </div>
</div>
@endsection