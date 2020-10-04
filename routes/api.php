<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\PropietarioController;
use App\Http\Controllers\API\VehiculoController;
use App\Http\Controllers\API\ConductorController;
use App\Http\Controllers\API\RegistroController;



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
    'vehiculo' => VehiculoController::class,
    'conductor' => ConductorController::class,
    'registro' => RegistroController::class
]);
