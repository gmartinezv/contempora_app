<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PublicacioneController;
use App\Http\Controllers\ComentarioController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::apiResource('/usuarios', UsuarioController::class );

Route::apiResource('/publicaciones', PublicacioneController::class );

Route::apiResource('/comentarios', ComentarioController::class );

Route::get('/token', function () {
    return csrf_token(); 
});
