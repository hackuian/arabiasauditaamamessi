<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\JugadoresController;
use Illuminate\Support\Facades\Route;
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


Route::get('/preregistro', function () {
    return view('preregistro');
});

Route::get('/administrador', function () {
    return view('admin/indexadmin');
});
Route::get('/jugadoreslista', [JugadoresController::class,'index']) ->name('jugadores.index');
Route::get('administrador/jugadorescrear', [JugadoresController::class,'create']) ->name('jugadores.create');
Route::post('administrador/jugadorescrear', [JugadoresController::class,'create']) ->name('jugadores.create');
Route::post('administrador/jugadoresstore', [JugadoresController::class,'store']) ->name('jugadores.store');

Route::get('administrador/jugadoreseliminar', [JugadoresController::class,'destroy']) ->name('jugadores.destroy');
Route::delete('administrador/jugadoreseliminar/{id}', [JugadoresController::class,'destroy2']) ->name('jugadores.destroy2');
Route::get('administrador/jugadoreshow', [JugadoresController::class,'show']) ->name('jugadores.show');


Route::get('administrador/jugadoresedit', [JugadoresController::class,'edit']) ->name('jugadores.edit');
Route::get('administrador/jugadoreseditar/{id}', [JugadoresController::class,'editar']) ->name('jugadores.editar');
Route::put('administrador/jugadoresupdate/{id}', [JugadoresController::class,'update']) ->name('jugadores.update');

Route::get('administrador/categoriascrear', [CategoriasController::class,'create']) ->name('categorias.create'); 
Route::post('administrador/categoriasstore', [CategoriasController::class,'store']) ->name('categorias.store');





Route::get('/ingresar', function () {
    return view('ingresar');
});

Route::get('/nico', function () {
    return view('ingresar');
});






Route::get('/crearEquipos', function () {
    return view('crearEquipos');
});


Route::get('/admin/torneo/creartorneo', function () {
    return view('admin/torneo/creartorneo');
});

Route::get('/admin/ambientes/cargarambiente', function () {
    return view('/admin/ambientes/cargarambiente');
});

Route::get('/admin/torneo/crearpartido', function () {
    return view('/admin/torneo/crearpartido');
});

Route::get('/', function () {
    return view('inicio');
});
Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/ResultadosLiga', function () {
    return view('/ResultadosLiga');
});

Route::get('/ResultadosCopa', function () {
    return view('/ResultadosCopa');
});