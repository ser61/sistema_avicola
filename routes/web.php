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
    return view('welcome');
});

Auth::routes();

Route::resource('venta/tipo','TipoController');

Route::get('/home', 'HomeController@index');

//24 - SERGIO WEIMAR
Route::get('homeCondicional', 'Controller@home');
Route::resource('admin', 'AdminUsersController');
Route::resource('cargo', 'CargoController');
Route::resource('empleado', 'EmpleadoController');
Route::resource('telefono', 'TelefonoController');
Route::resource('privilegio', 'PrivilegioController');
Route::resource('bitacora', 'BitacoraController');
Route::get('facturar','FacturaController@create');



















//52 - FIN DE ROUTES DE SERGIO WEIMAR
//53 - SERGIO FRANCO
Route::resource('administracion/persona','PersonaController');
//Route::resource('administracion/cargo','CargoController');
Route::resource('administracion/empleado','EmpleadoController');
























//81 - FIN DE ROUTES DE SERGIO FRANCO
//82 - Rodrigo















































// 30 - FIN DE ROUTES DE RODRIGO