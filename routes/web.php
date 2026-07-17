<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoriaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| FrontOffice
| Rutas públicas del sitio web.
|
*/

// Página de inicio
Route::get('/', function () {
    return view('welcome');
})->name('inicio');

// Productos
Route::get('/productos', function () {
    return view('productos');
})->name('productos');

// Nosotros
Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

// Contacto
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

// Conversión de monedas
Route::get('/conversion', function () {
    return view('conversion');
})->name('conversion');


/*
|--------------------------------------------------------------------------
| BackOffice
| Área administrativa protegida mediante Laravel Breeze.
|--------------------------------------------------------------------------
*/

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Módulos protegidos
Route::middleware(['auth'])->group(function () {

    /*
    |--------------------------------------------------------------
    | Perfil de usuario
    |--------------------------------------------------------------
    */

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');


    /*
    |--------------------------------------------------------------
    | Módulo de Categorías
    | CRUD completo
    |--------------------------------------------------------------
    */

    Route::resource('categorias', CategoriaController::class);

});


/*
|--------------------------------------------------------------------------
| Rutas de autenticación (Laravel Breeze)
|--------------------------------------------------------------------------
*/

require __DIR__ . '/auth.php';
