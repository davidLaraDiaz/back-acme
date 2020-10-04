<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Conductor;

class ConductorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Conductor::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $conductor = new Conductor;
   
        $conductor->numero_cedula= $request->numero_cedula;
        $conductor->primer_nombre = $request->primer_nombre;
        $conductor->segundo_nombre = $request->segundo_nombre;
        $conductor->apellidos = $request->apellidos;
        $conductor->direccion = $request->direccion;
        $conductor->telefono = $request->telefono;
        $conductor->ciudad = $request->ciudad;

        $conductor->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Conductor::where('numero_cedula', $id)->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $conductor = Conductor::where('numero_cedula', $id);

        $conductor->primer_nombre = $request->primer_nombre;
        $conductor->segundo_nombre = $request->segundo_nombre;
        $conductor->apellidos = $request->apellidos;
        $conductor->direccion = $request->direccion;
        $conductor->telefono = $request->telefono;
        $conductor->ciudad = $request->ciudad;

        $conductor->update($request->all());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $conductor = Conductor::where('numero_cedula', $id);
        $conductor->delete();
    }
}
