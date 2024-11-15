<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

/* rutas para controlador */

Route::get('/', [ControladorVistas::class, 'home'])->name('rutainicio');

/*Rutas para controlador clienteController*/
Route::get('/cliente/create', [clienteController::class, 'create'])->name('rutaformulario');
Route::post('/cliente', [clienteController::class, 'store'])->name('rutaEnviar');
Route::get('/cliente', [clienteController::class, 'index'])->name('rutaclientes');