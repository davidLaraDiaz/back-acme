<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\PropietarioController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResources([
    'propietario' => PropietarioController::class,
    //'vehiculo' => VehiculoController::class,
    //'tipo_auto' => Tipo_autoController::class,
    //'parqueadero' => ParqueaderoController::class,
    //'registro' => RegistroController::class,
    //'informe' => Informe::class
]);
