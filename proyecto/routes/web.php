<?php

use App\Http\Controllers\ClienteControll;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

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


Route::get('/home', [ClienteControll::class,'index']);
Route::get('/productos', [ProductoController::class,'index']);
Route::get('/productos/{producto}/edit', [ProductoController::class,'edit']);

Route::get('/productos_create', [ProductoController::class,'create']);
Route::post('/productos', [ProductoController::class,'store']);

Route::get('/registro', function(){
    return view("registro");
});

Route::get('/nosotros', function(){
    return view("nosotros");
});

