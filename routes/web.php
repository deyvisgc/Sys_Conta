<?php

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



Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('Trabajador','TrabajadorController');
Route::resource('Planilla','PlanillaController');
Route::get('Listar_Beneficios/{idPlanilla}','PlanillaController@listarBeneficios');
Route::get('Listar_Retenciones/{idPlanilla}','PlanillaController@ListarRetenciones');
Route::get('Listar_Otros/{idPlanilla}','PlanillaController@ListarOtros');
Route::get('Totales_ingresos','PlanillaController@TotalesIngresos');
Route::get('Totales_aportes','PlanillaController@TotalesAportes');
Route::get('Totales_0tros','PlanillaController@Totales_0tros');
Route::get('Asiento_Contable','PlanillaController@AsientoContable');
Route::get('PlanillaRegistro', 'PlanillaController@getPlanilla');

Route::get('DeleTrabajador/{idPersona}', 'TrabajadorController@DeleTrabajador');
Route::get('buscador', 'PlanillaController@search');

