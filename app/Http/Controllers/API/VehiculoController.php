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

        $vehiculo->placa = $request->placa;
        $vehiculo->color = $request->color;
        $vehiculo->marca = $request->marca;
        $vehiculo->tipo_vehiculo = $request->tipo_vehiculo;

        $vehiculo->numero_cedula = $request->numero_cedula;

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
     * @param  string  $placa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $placa)
    {
        $vehiculo = Vehiculo::where('placa', $placa);

        $vehiculo->placa = $request->placa;
        $vehiculo->color = $request->color;
        $vehiculo->marca = $request->marca;
        $vehiculo->tipo_vehiculo = $request->tipo_vehiculo;

        $vehiculo->numero_cedula = $request->numero_cedula;

        $vehiculo->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $placa
     * @return \Illuminate\Http\Response
     */
    public function destroy($placa)
    {
        $vehiculo = Vehiculo::where('placa', $placa);
        $vehiculo->delete();
    }
}
