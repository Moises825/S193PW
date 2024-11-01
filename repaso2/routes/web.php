<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* rutas para controlador */

Route::get('/', [ControladorVistas::class, 'home'])->name('rutainicio');

Route::get('/principallibro', [ControladorVistas::class, 'principallibros'])->name('rutaprincipallibros');

Route::get('/Registrolibro', [ControladorVistas::class, 'Registrolibro'])->name('rutaRegistrolibro');

Route::post('/procesarliebro', [ControladorVistas::class, 'procesarlibro'])->name('');
