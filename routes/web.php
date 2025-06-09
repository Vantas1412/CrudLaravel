<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\OrdenController;
use App\Http\Controllers\ProveedorController;



Route::get('/', function () {
    return view('welcome');
})-> name('home');
Route::resource('productos', ProductoController::class);
Route::resource('proveedors', ProveedorController::class);
Route::resource('ordens', OrdenController::class);
Route::get('/proveedores-por-producto/{codigo_producto}', [OrdenController::class, 'getProveedoresPorProducto']);