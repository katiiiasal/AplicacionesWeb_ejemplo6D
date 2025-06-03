<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('Producto', 'ProductoController');
Route::get('/producto', [ProductoController::class, "verproductos"])->name("producto");