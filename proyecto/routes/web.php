<?php

use App\Http\Controllers\ClienteControll;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\LoginController;
use App\Models\Producto;
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


Route::get('/home', [ClienteControll::class,'index'])->name("login");

//Productos
Route::get('/productos', [ProductoController::class,'index'])->middleware("auth");
Route::get('/productos/{producto}/edit', [ProductoController::class,'edit'])->middleware("auth");
Route::put('/productos/{producto}', [ProductoController::class, 'update']);
Route::get('/productos/create', [ProductoController::class,'create']);
Route::post('/productos', [ProductoController::class,'store']);
Route::delete('/productos/{producto}', [ProductoController::class, 'destroy']);
Route::get('/productos_listado', [ProductoController::class,'index2'])->middleware("auth");




//Login
Route::get('/register', [LoginController::class, 'index']);
Route::post("/register",[LoginController::class, 'register']);
Route::post("/login",[LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/servicios', function(){
    return view("servicios");
});

Route::get('/nosotros', function(){
    return view("nosotros");
});
