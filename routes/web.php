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
Route::get('PlanillaRegistro', 'PlanillaController@getPlanilla');

Route::get('DeleTrabajador/{idPersona}', 'TrabajadorController@DeleTrabajador');
Route::get('buscador', 'PlanillaController@search');

