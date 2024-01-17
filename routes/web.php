<?php

use App\Http\Controllers\RestauranteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return view('inicio');
});

/*Route::get('/saudacao', function(){
    return 'Hello world!';
});*/

Route::get('/restaurantes', [RestauranteController::class, 'index']);
Route::get('/restaurantes/adicionar', [RestauranteController::class, 'create']);
Route::get('/store_restaurante', [RestauranteController::class, 'store']);
Route::get('/restaurantes/editar/{id}', [RestauranteController::class, 'edit']);
Route::get('/restaurantes/update/{id}', [RestauranteController::class, 'update']);
Route::get('/restaurantes/excluir/{id}', [RestauranteController::class, 'destroy']);
