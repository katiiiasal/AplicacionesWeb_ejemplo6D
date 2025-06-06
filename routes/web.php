<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('Producto', ProductoController::class)->except("show");
Route::get('/producto', [ProductoController::class, 'verproductos'])->name('producto');
Route::get('/producto/index', [ProductoController::class, 'index'])->name('producto.index');