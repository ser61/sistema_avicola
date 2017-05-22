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
Route::get('bitacora/showBitacoraUser/{id}', 'BitacoraController@showBitacoraUser')->name('bitacora.showUser');
Route::get('bitacora/showAccionesUser/{id}{idUser}', 'BitacoraController@showAccionesUser')->name('bitacora.showAccionesUser');
Route::get('facturar','FacturaController@create');
// Backup routes
Route::get('backup', 'BackupController@index');
Route::get('backup/create', 'BackupController@create');
Route::get('backup/download/{file_name?}', 'BackupController@download');
Route::get('backup/delete/{file_name}', 'BackupController@delete');






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
Route::resource('proceso/etapaincubacion','EtapaIncubacionController');
Route::resource('proceso/lotehuevoincubable','LoteHuevoIncubableController');
Route::resource('proceso/traspasolotehuevo','TraspasoLoteHuevoController');
Route::get('venta/factura/reporte',function(){
	$facturas=DB::table('factura')->get();
	$pdf = PDF::loadView('venta/factura/reporte',['facturas' => $facturas]);
	return $pdf->download('ReporteFacturas.pdf');
});









//81 - FIN DE ROUTES DE SERGIO FRANCO
//82 - Rodrigo
Route::resource('venta/tipo','TipoController');
Route::resource('venta/categoria','CategoriaController');
Route::resource('venta/huevo','HuevoController');
Route::resource('venta/pollo','PolloController');
Route::resource('venta/cliente','ClienteController');
Route::resource('venta/inventario','ProductoVentaController');
Route::resource('venta/factura','FacturaController');
Route::resource('venta/reporteventa','ReporteVentaController');

Route::resource('compra/materia','MateriaController');
Route::resource('compra/alimento','AlimentoController');



















// 113 - FIN DE ROUTES DE RODRIGO





















































































//200 Inicio de rutas de Eliot
Route::resource('reportes/reporte_diario','ReporteDiarioController');
Route::resource('infraestructura/granja','GranjaController');
Route::resource('infraestructura/infraestructura','InfraestructuraController');
Route::resource('infraestructura/equipo','EquipoController');
Route::resource('infraestructura/bateria','BateriaController');
