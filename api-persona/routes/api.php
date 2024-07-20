<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
use app\Http\Controllers\Api\PersonaController;

Route::get('/persona',[PersonaController::class,'listado']);

Route::get('/persona/{id}', [PersonaController::class,'buqueda']); 

Route::delete('/persona/{id}', [PersonaController::class,'baja']);

Route::put('/persona/{id}', [PersonaController::class,'modificacion']);

Route::post('/persona', [PersonaController::class, 'alta']);

Route::patch('/persona/{id}', [PersonaController::class, 'mediamodificacion']);