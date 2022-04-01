<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Personas::orderBy('paterno', 'desc')->paginate(3);
        return view('welcome', compact('datos'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agregar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $personas = new Personas();
        $personas->paterno = $request->post('paterno');
        $personas->materno = $request->post('materno');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');

        $personas->save();

        return redirect()->route('personas.index')->with('success', 'agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $persona = Personas::find($id);
        return view('eliminar', compact('persona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona = Personas::find($id);
        return view('actualizar', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $persona = Personas::find($id);

        $persona->paterno = $request->post('paterno');
        $persona->materno = $request->post('materno');
        $persona->nombre = $request->post('nombre');
        $persona->fecha_nacimiento = $request->post('fecha_nacimiento');

        $persona->save();

        return redirect()->route('personas.index')->with('success', 'actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona = Personas::find($id);
        $persona->delete();

        return redirect()->route('personas.index')->with('success', 'borrado con exito');
    }
}
