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
Route::resource('privilegio', 'PrevilegioController');
Route::post('privilegio/updatePrivilegios', 'PrevilegioController@updatePrivilegiosCargo')->name('privilegio.updatePrivilegiosCargo');
Route::get('privilegio/deshabilitar/{id}', 'PrevilegioController@deshabilitarPermisosCargo')->name('privilegio.deshabilitarCargo');
Route::get('privilegio/editCargo/{id}', 'PrevilegioController@editCargo')->name('privilegio.editCargo');
Route::post('privilegio/updatePrivilegiosUser', 'PrevilegioController@updatePrivilegiosUser')->name('privilegio.updatePrivilegiosUser');
Route::get('privilegio/deshabilitarUser/{id}', 'PrevilegioController@deshabilitarPermisosUser')->name('privilegio.deshabilitarUser');
Route::get('privilegio/editUser/{id}', 'PrevilegioController@editUser')->name('privilegio.editUser');
Route::resource('bitacora', 'BitacoraController');
Route::get('facturar','FacturaController@create');













//52 - FIN DE ROUTES DE SERGIO WEIMAR
//53 - SERGIO FRANCO
//Route::resource('administracion/persona','PersonaController');
//Route::resource('administracion/cargo','CargoController');
//Route::resource('administracion/empleado','EmpleadoController');
Route::resource('proceso/parvadaengorde','ParvadaEngordeController');
Route::resource('proceso/parvadaponedora','ParvadaPonedoraController');
Route::resource('proceso/parvadareproductora','ParvadaReproductoraController');
Route::resource('proceso/etapa','EtapaController');
Route::resource('proceso/traspasoparvada','TraspasoParvadaController');
Route::resource('proceso/ordenproduccion','OrdenProduccionController');
Route::resource('proceso/produccionalimento','ProduccionAlimentoController');

















//81 - FIN DE ROUTES DE SERGIO FRANCO
//82 - Rodrigo
Route::resource('venta/tipo','TipoController');
Route::resource('venta/categoria','CategoriaController');
Route::resource('venta/huevo','HuevoController');
Route::resource('venta/pollo','PolloController');
Route::resource('venta/cliente','ClienteController');
Route::resource('venta/inventario','ProductoVentaController');
Route::resource('venta/factura','FacturaController');


Route::resource('compra/materia','MateriaController');
Route::resource('compra/alimento','AlimentoController');



















// 113 - FIN DE ROUTES DE RODRIGO