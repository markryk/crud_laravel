<?php

use App\Http\Controllers\RestauranteController;
use App\Http\Controllers\ProdutoController;
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

//$url = explode('?', $_SERVER['REQUEST_URI'][0]); //retorna o que há antes de '?'
//echo $url;

Route::get('/', function () {
    //return view('welcome');
    return view('inicio');
});

/*Route::get('/saudacao', function(){
    return 'Hello world!';
});*/

/*Route::get('/restaurantes', [RestauranteController::class, 'index']);
Route::get('/restaurantes/mostrar/{id}', [RestauranteController::class, 'show']);
Route::get('/restaurantes/adicionar', [RestauranteController::class, 'create']);
Route::get('/store_restaurante', [RestauranteController::class, 'store']);
Route::get('/restaurantes/editar/{id}', [RestauranteController::class, 'edit']);
Route::get('/restaurantes/update/{id}', [RestauranteController::class, 'update']);
Route::get('/restaurantes/excluir/{id}', [RestauranteController::class, 'destroy']);*/

Route::controller(RestauranteController::class)->group(function() {
    Route::get('/restaurantes', 'index');
    Route::get('/restaurantes/mostrar/{id}', 'show');
    Route::get('/restaurantes/adicionar', 'create');
    Route::get('/store_restaurante', 'store');
    Route::get('/restaurantes/editar/{id}', 'edit');
    Route::get('/restaurantes/update/{id}', 'update');
    Route::get('/restaurantes/excluir/{id}', 'destroy');
});

Route::controller(ProdutoController::class)->group(function() {
    Route::get('/produtos', 'index');
    Route::get('/produtos/mostrar/{id}', 'show');
    Route::get('/produtos/adicionar', 'create');
    Route::get('/store_produto', 'store');
    Route::get('/produtos/editar/{id}', 'edit');
    Route::get('/produtos/update/{id}', 'update');
    Route::get('/produtos/excluir/{id}', 'destroy');
});
