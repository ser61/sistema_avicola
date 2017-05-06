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
    return view('index2');
});

Auth::routes();

Route::resource('venta/tipo','TipoController');

Route::get('/home', 'HomeController@index');

//24 - SERGIO WEIMAR
Route::get('facturar','FacturaController@create');
Route::get('fondo', function(){
  return view('layouts.fondo');
});























//52 - FIN DE ROUTES DE SERGIO WEIMAR
//53 - SERGIO FRANCO
Route::resource('administracion/persona','PersonaController');
Route::resource('administracion/cargo','CargoController');
Route::resource('administracion/empleado','EmpleadoController');
























//81 - FIN DE ROUTES DE SERGIO FRANCO