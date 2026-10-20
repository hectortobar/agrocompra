<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/menu', function () {
    return view('menu');
})->name('menu');
Route::get('/Nosotros', function () {
    return view('Nosotros');
})->name('Nosotros');
Route::get('/Contacto', function () {
    return view('Contacto');
})->name('Contacto');
Route::get('/formulario', function () {
    return view('formulario');
})->name('formulario');



// Rutas para el módulo de Clientes
Route::get('/clientes', [ClienteController::class, 'index'])
    ->name('clientes.index');
Route::get('/clientes/create', [ClienteController::class, 'create'])
    ->name('clientes.create');
Route::post('/clientes', [ClienteController::class, 'store'])
    ->name('clientes.store');

Route::get('/productos', [ProductoController::class, 'index'])
    ->name('productos.index');
Route::get('/productos/crear', [ProductoController::class, 'create'])
    ->name('productos.create');
Route::post('/productos', [ProductoController::class, 'store'])
    ->name('productos.store');