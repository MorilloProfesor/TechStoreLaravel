<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ConversionController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\ProductosController;

Route::get('/', [InicioController::class, 'index'])->name('inicio');
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');
Route::get('/conversion', [ConversionController::class, 'index'])->name('conversion');
Route::get('/nosotros', [NosotrosController::class, 'index'])->name('nosotros');
Route::get('/productos', [ProductosController::class, 'index'])->name('productos');