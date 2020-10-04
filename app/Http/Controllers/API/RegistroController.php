<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Registro;
use App\Models\Conductor;
use App\Models\Vehiculo;
use DB;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Registro::all();
    }

    /**
     * Store a newly created resource in storage.
     *Metodo que crea un registro con una hora y fecha
     *Recibe id vehiculo, id Conductor
     *acumulado (si se cambia de Conductor por motivo de bloqueo es saldo anterior llegaria aqui)
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registro = new Registro;

        $registro->id = $request->id;
        $registro->fecha = date_create('now', new \DateTimeZone("America/Bogota"))->format('Y-m-d');
        $registro->placa = $request->placa;
        $registro->numero_cedula = $request->numero_cedula;

        $registro->save();
    }

   
}
