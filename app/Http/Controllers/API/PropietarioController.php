<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Propietario;

class PropietarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Propietario::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $propietario = new Propietario;
   
        $propietario->numero_cedula= $request->numero_cedula;
        $propietario->primer_nombre = $request->primer_nombre;
        $propietario->segundo_nombre = $request->segundo_nombre;
        $propietario->apellidos = $request->apellidos;
        $propietario->direccion = $request->direccion;
        $propietario->telefono = $request->telefono;
        $propietario->ciudad = $request->ciudad;

        $propietario->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Propietario::where('numero_cedula', $id)->get();
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
        $propietario = Propietario::where('numero_cedula', $id);

        $propietario->primer_nombre = $request->primer_nombre;
        $propietario->segundo_nombre = $request->segundo_nombre;
        $propietario->apellidos = $request->apellidos;
        $propietario->direcion = $request->direccion;
        $propietario->telefono = $request->telefono;
        $propietario->ciudad = $request->ciudad;

        $propietario->update($request->all());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $propietario = Propietario::where('numero_cedula', $id);
        $propietario->delete();
    }
}
