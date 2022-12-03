<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\JugadoresController;
use App\Http\Controllers\ArbitrosController;

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




Route::get('/arbitroslista', [ArbitrosController::class,'index']) ->name('arbitros.index');
Route::get('administrador/arbitroscrear', [ArbitrosController::class,'create']) ->name('arbitros.create');
Route::post('administrador/arbitroscrear', [ArbitrosController::class,'create']) ->name('arbitros.create');
Route::post('administrador/arbitrosstore', [ArbitrosController::class,'store']) ->name('arbitros.store');
Route::get('administrador/arbitroseliminar', [ArbitrosController::class,'destroy']) ->name('arbitros.destroy');
Route::delete('administrador/arbitroseliminar/{id}', [ArbitrosController::class,'destroy2']) ->name('arbitros.destroy2');
Route::get('administrador/arbitroshow', [ArbitrosController::class,'show']) ->name('arbitros.show');
Route::get('administrador/arbitrosedit', [ArbitrosController::class,'edit']) ->name('arbitros.edit');
Route::get('administrador/arbitroseditar/{id}', [ArbitrosController::class,'editar']) ->name('arbitros.editar');
Route::put('administrador/arbitrosupdate/{id}', [ArbitrosController::class,'update']) ->name('arbitros.update');


Route::get('/partidoslista', [partidosController::class,'index']) ->name('partidos.index');
Route::get('administrador/partidoscrear', [partidosController::class,'create']) ->name('partidos.create');
Route::post('administrador/partidoscrear', [partidosController::class,'create']) ->name('partidos.create');
Route::post('administrador/partidosstore', [partidosController::class,'store']) ->name('partidos.store');
Route::get('administrador/partidoseliminar', [partidosController::class,'destroy']) ->name('partidos.destroy');
Route::delete('administrador/partidoseliminar/{id}', [partidosController::class,'destroy2']) ->name('partidos.destroy2');
Route::get('administrador/partidoshow', [partidosController::class,'show']) ->name('partidos.show');
Route::get('administrador/partidosedit', [partidosController::class,'edit']) ->name('partidos.edit');
Route::get('administrador/partidoseditar/{id}', [partidosController::class,'editar']) ->name('partidos.editar');
Route::put('administrador/partidosupdate/{id}', [partidosController::class,'update']) ->name('partidos.update');

Route::get('/escenarioslista', [escenariosController::class,'index']) ->name('escenarios.index');
Route::get('administrador/escenarioscrear', [escenariosController::class,'create']) ->name('escenarios.create');
Route::post('administrador/escenarioscrear', [escenariosController::class,'create']) ->name('escenarios.create');
Route::post('administrador/escenariosstore', [escenariosController::class,'store']) ->name('escenarios.store');
Route::get('administrador/escenarioseliminar', [escenariosController::class,'destroy']) ->name('escenarios.destroy');
Route::delete('administrador/escenarioseliminar/{id}', [escenariosController::class,'destroy2']) ->name('escenarios.destroy2');
Route::get('administrador/escenarioshow', [escenariosController::class,'show']) ->name('escenarios.show');
Route::get('administrador/escenariosedit', [escenariosController::class,'edit']) ->name('escenarios.edit');
Route::get('administrador/escenarioseditar/{id}', [escenariosController::class,'editar']) ->name('escenarios.editar');
Route::put('administrador/escenariosupdate/{id}', [escenariosController::class,'update']) ->name('escenarios.update');

Route::get('/torneoslista', [torneosController::class,'index']) ->name('torneos.index');
Route::get('administrador/torneoscrear', [torneosController::class,'create']) ->name('torneos.create');
Route::post('administrador/torneoscrear', [torneosController::class,'create']) ->name('torneos.create');
Route::post('administrador/torneosstore', [torneosController::class,'store']) ->name('torneos.store');
Route::get('administrador/torneoseliminar', [torneosController::class,'destroy']) ->name('torneos.destroy');
Route::delete('administrador/torneoseliminar/{id}', [torneosController::class,'destroy2']) ->name('torneos.destroy2');
Route::get('administrador/torneoshow', [torneosController::class,'show']) ->name('torneos.show');
Route::get('administrador/torneosedit', [torneosController::class,'edit']) ->name('torneos.edit');
Route::get('administrador/torneoseditar/{id}', [torneosController::class,'editar']) ->name('torneos.editar');
Route::put('administrador/torneosupdate/{id}', [torneosController::class,'update']) ->name('torneos.update');

Route::get('/categoriaslista', [categoriasController::class,'index']) ->name('categorias.index');
Route::get('administrador/categoriascrear', [categoriasController::class,'create']) ->name('categorias.create');
Route::post('administrador/categoriascrear', [categoriasController::class,'create']) ->name('categorias.create');
Route::post('administrador/categoriasstore', [categoriasController::class,'store']) ->name('categorias.store');
Route::get('administrador/categoriaseliminar', [categoriasController::class,'destroy']) ->name('categorias.destroy');
Route::delete('administrador/categoriaseliminar/{id}', [categoriasController::class,'destroy2']) ->name('categorias.destroy2');
Route::get('administrador/categoriashow', [categoriasController::class,'show']) ->name('categorias.show');
Route::get('administrador/categoriasedit', [categoriasController::class,'edit']) ->name('categorias.edit');
Route::get('administrador/categoriaseditar/{id}', [categoriasController::class,'editar']) ->name('categorias.editar');
Route::put('administrador/categoriasupdate/{id}', [categoriasController::class,'update']) ->name('categorias.update');


Route::get('/ambienteslista', [ambientesController::class,'index']) ->name('ambientes.index');
Route::get('administrador/ambientescrear', [ambientesController::class,'create']) ->name('ambientes.create');
Route::post('administrador/ambientescrear', [ambientesController::class,'create']) ->name('ambientes.create');
Route::post('administrador/ambientesstore', [ambientesController::class,'store']) ->name('ambientes.store');
Route::get('administrador/ambienteseliminar', [ambientesController::class,'destroy']) ->name('ambientes.destroy');
Route::delete('administrador/ambienteseliminar/{id}', [ambientesController::class,'destroy2']) ->name('ambientes.destroy2');
Route::get('administrador/ambienteshow', [ambientesController::class,'show']) ->name('ambientes.show');
Route::get('administrador/ambientesedit', [ambientesController::class,'edit']) ->name('ambientes.edit');
Route::get('administrador/ambienteseditar/{id}', [ambientesController::class,'editar']) ->name('ambientes.editar');
Route::put('administrador/ambientesupdate/{id}', [ambientesController::class,'update']) ->name('ambientes.update');




Route::get('administrador/categoriascrear', [CategoriasController::class,'create']) ->name('categorias.create'); 
Route::post('administrador/categoriasstore', [CategoriasController::class,'store']) ->name('categorias.store');


Route::get('/admin', 'Admin\HomeController@index')->name('admin.home');
Route::resource('/admin/convocatoria', 'Admin\FileController')->names('admin.convocatoria');



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