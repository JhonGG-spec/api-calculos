<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcCuadraticaController;
use App\Http\Controllers\TbValoresController;
use App\Http\Controllers\DerivadaOrden4Controller;

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

Route::apiResource("eccuadratica", EcCuadraticaController::class);
Route::apiResource("tbvalores", TbValoresController::class);
Route::apiResource("derivada", DerivadaOrden4Controller::class);

