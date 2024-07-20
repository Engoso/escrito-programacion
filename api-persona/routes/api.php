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

Route::get('/persona/{id}', [PersonaController::class, 'show']);

Route::get('/persona', [PersonaController::class, 'index']);

Route::put('/persona/{id}', [PersonaController::class, 'update']);

Route::patch('/persona/{id}', [PersonaController::class, 'updatePartial']);

Route::post('/persona', [PersonaController::class, 'store']);

Route::delete('/persona/{id}', [PersonaController::class, 'destroy']);
