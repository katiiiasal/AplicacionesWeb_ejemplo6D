<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('producto', ProductoController::class)->except("show");
Route::resource('Producto', ProductoController::class)->except("show");
Route::get('/producto', [ProductoController::class, 'verproductos'])->name('producto');
Route::get('/producto/index', [ProductoController::class, 'index'])->name('producto.index'); 
Route::get('/producto/create', [ProductoController::class, 'create'])->name('producto.create');
Route::post('/producto/edit', [ProductoController::class, 'edit'])->name('producto.edit');


