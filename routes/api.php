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

Route::get('/persona',[PersonaController::class,'index']);

Route::get('/persona/{id}', function () {
    return 'consiguiendo persona';
});
Route::put('/persona/{id}', function () {
    return 'guardando persona';
});
Route::delete('/persona/{id}', function () {
    return 'borrando persona';
});
Route::post('/persona', function () {
    return 'creando persona';
});