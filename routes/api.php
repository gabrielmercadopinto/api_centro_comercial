<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PuestoController;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/categorias', [CategoriaController::class,'getCategorias']);
Route::get('/puestos', [PuestoController::class,'getPuestos']);
Route::get('/puesto_productos', [PuestoController::class,'getPuestosYProductos']);
Route::get('/productos', [ProductoController::class,'getProductos']);
Route::get('/productos_puesto', [ProductoController::class,'getProductosYPuestos']);
