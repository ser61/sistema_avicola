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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//SERGIO WEIMAR
Route::get('facturar','FacturaController@create');


























//FIN DE ROUTES DE SERGIO WEIMAR
//SERGIO FRANCO
Route::resource('administracion/persona','PersonaController');
Route::resource('administracion/cargo','CargoController');
Route::resource('administracion/empleado','EmpleadoController');
























//FIN DE ROUTES DE SERGIO FRANCO