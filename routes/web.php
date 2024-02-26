<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\directoriosController;
use App\Http\Controllers\contactosController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [directoriosController::class, 'principal'])->name('directorio.principal');

Route::get('/crearEntrada', [directoriosController::class, 'crear'])->name('directorio.crear');

Route::get('/buscar', [directoriosController::class, 'buscar'])->name('directorio.buscar');

Route::get('/busqueda', [directoriosController::class, 'busqueda'])->name('directorio.busqueda');

Route::post('/guardar', [directoriosController::class, 'guardar'])->name('directorio.guardar');

Route::get('/eliminar', [contactosController::class, 'eliminar'])->name('contacto.eliminar');

Route::get('/verContacto/{id?}', [contactosController::class, 'verContacto'])->name('contacto.ver');

Route::get('/eliminado', [directoriosController::class, 'eliminado'])->name('directorio.eliminado');

Route::get('/agregarContacto', [contactosController::class, 'agregarContacto'])->name('contacto.agregarcontacto');

Route::post('/guardarContacto', [contactosController::class, 'guardar'])->name('contacto.guardar');

Route::get('/eliminarContacto/{id}', [contactosController::class, 'eliminarContacto'])->name('contacto.eliminarcontacto');