<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\FleteController;
use Illuminate\Http\Request;

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
    return view('master');
});

Route::get('clientes', [ClienteController::class, 'index'])->name('cliente_index');
Route::get('clientes/nuevo', [ClienteController::class, 'create'])->name('cliente_nuevo');
Route::post('clientes/guardar', [ClienteController::class, 'store'])->name('cliente_guardar');
Route::get('clientes/mostrar/{id}', [ClienteController::class, 'show'])->name('cliente_mostrar');
Route::get('clientes/editar/{id}', [ClienteController::class, 'edit'])->name('cliente_editar');
Route::post('clientes/actualizar/{id}', [ClienteController::class, 'update'])->name('cliente_actualizar');
Route::get('clientes/eliminar/{id}', [ClienteController::class, 'destroy'])->name('cliente_eliminar');

// Rutas para el controlador Vehiculo
Route::get('vehiculos', [VehiculoController::class, 'index'])->name('vehiculo_index');
Route::get('vehiculo/nuevo', [VehiculoController::class, 'create'])->name('vehiculo_nuevo');
Route::post('vehiculo/guardar', [VehiculoController::class, 'store'])->name('vehiculo_guardar');
Route::get('vehiculo/editar/{id}',[VehiculoController::class,'edit'])->name('vehiculo_editar');
Route::post('vehiculo/actualizar/{id}',[VehiculoController::class,'update'])->name('vehiculo_actualizar');
Route::get('vehiculo/eliminar/{id}',[VehiculoController::class,'destroy'])->name('vehiculo_eliminar');

// Rutas para fletes
Route::get('flete/nuevo/{id}', [FleteController::class, 'create'])->name('flete_nuevo');
Route::post('flete/guardar/{id}', [FleteController::class, 'store'])->name('flete_guardar');
