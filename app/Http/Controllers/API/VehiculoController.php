<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Vehiculo;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Vehiculo::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehiculo = new Vehiculo;

        $vehiculo->id = $request->id;
        $vehiculo->placa = $request->placa;
        $vehiculo->color = $request->color;
        $vehiculo->marca = $request->marca;
        $vehiculo->modelo = $request->modelo;

        $vehiculo->id_propietario = $request->id_propietario;
        $vehiculo->id_tipo = $request->id_tipo;

        $vehiculo->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  String  $placa
     * @return \Illuminate\Http\Response
     */
    public function show($placa)
    {
        return Vehiculo::where('placa', $placa)->get();
        
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
        $vehiculo = Vehiculo::where('id', $id);

        $vehiculo->placa = $request->placa;
        $vehiculo->color = $request->color;
        $vehiculo->marca = $request->marca;
        $vehiculo->modelo = $request->modelo;

        $vehiculo->id_propietario = $request->id_propietario;
        $vehiculo->id_tipo = $request->id_tipo;

        $vehiculo->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehiculo = Vehiculo::where('id', $id);
        $vehiculo->delete();
    }
}
