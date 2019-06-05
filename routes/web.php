<?php



Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('Trabajador','TrabajadorController');
Route::resource('Planilla','PlanillaController');
Route::resource('Usuarios','UsuarioController');
Route::resource('Empresa','EmpresaController');
Route::get('Listar_Beneficios/{idPlanilla}','PlanillaController@listarBeneficios');
Route::get('Listar_Retenciones/{idPlanilla}','PlanillaController@ListarRetenciones');
Route::get('Listar_Otros/{idPlanilla}','PlanillaController@ListarOtros');
Route::get('Totales_ingresos','PlanillaController@TotalesIngresos');
Route::get('Totales_aportes','PlanillaController@TotalesAportes');
Route::get('Totales_0tros','PlanillaController@Totales_0tros');
Route::get('Asiento_Contable','PlanillaController@AsientoContable');
Route::get('PlanillaRegistro', 'PlanillaController@getPlanilla');
Route::get('Boleta', 'PlanillaController@Boleta');
Route::get('DeleTrabajador/{idPersona}', 'TrabajadorController@DeleTrabajador');
Route::get('DeleUsuario/{idUsuarios}', 'UsuarioController@DeleTUsuario');
Route::get('DeleEmpresa/{idEmpresa}', 'EmpresaController@DeleEmpresa');
Route::get('buscador', 'PlanillaController@search');
Route::get('BoletaPagos/{idEmpresa}','PlanillaController@Boleta');



