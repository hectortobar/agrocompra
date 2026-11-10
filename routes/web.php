<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Páginas públicas
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

// Rutas protegidas: requieren iniciar sesión
Route::middleware('auth')->group(function () {

    Route::get('/formulario', function () {
        return view('formulario');
    })->name('formulario');

    // Módulo de Clientes
    Route::get('/clientes', [ClienteController::class, 'index'])
        ->name('clientes.index');
    Route::get('/clientes/create', [ClienteController::class, 'create'])
        ->name('clientes.create');
    Route::post('/clientes', [ClienteController::class, 'store'])
        ->name('clientes.store');
    Route::get('/clientes/{cliente}/editar', [ClienteController::class, 'edit'])
        ->name('clientes.edit');
    Route::put('/clientes/{cliente}', [ClienteController::class, 'update'])
        ->name('clientes.update');

    // Módulo de Productos
    Route::get('/productos', [ProductoController::class, 'index'])
        ->name('productos.index');
    Route::get('/productos/crear', [ProductoController::class, 'create'])
        ->name('productos.create');
    Route::post('/productos', [ProductoController::class, 'store'])
        ->name('productos.store');

    // Perfil (Breeze)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Dashboard (Breeze)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

require __DIR__.'/auth.php';