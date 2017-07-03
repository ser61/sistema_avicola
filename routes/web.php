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

Route::resource('admin', 'Seguridad\AdminUsersController');
Route::get('searchUsuarios', 'Seguridad\AdminUsersController@searchUsuarios');
Route::get('searchPaginateUsuarios', 'Seguridad\AdminUsersController@searchPaginateUsuarios');

Route::resource('cargo', 'Seguridad\CargoController');
Route::get('searchCargos/', 'Seguridad\CargoController@searchCargos');
Route::get('searchPaginateCargos/', 'Seguridad\CargoController@searchPaginateCargos');

Route::resource('empleado', 'Seguridad\EmpleadoController');
Route::get('searchEmpleados/', 'Seguridad\EmpleadoController@searchEmpleados');
Route::get('searchPaginateEmpleados/', 'Seguridad\EmpleadoController@searchPaginateEmpleados');

Route::resource('telefono', 'Seguridad\TelefonoController');

Route::resource('privilegio', 'Seguridad\PrevilegioController');
Route::get('privilegio/editCargo/{id}', 'Seguridad\PrevilegioController@editCargo')->name('privilegio.editCargo');
Route::get('privilegio/deshabilitar/{id}', 'Seguridad\PrevilegioController@deshabilitarPermisosCargo')->name('privilegio.deshabilitarCargo');
Route::post('privilegio/updatePrivilegios', 'Seguridad\PrevilegioController@updatePrivilegiosCargo')->name('privilegio.updatePrivilegiosCargo');
Route::post('privilegio/updatePrivilegiosUser', 'Seguridad\PrevilegioController@updatePrivilegiosUser')->name('privilegio.updatePrivilegiosUser');
Route::get('privilegio/deshabilitarUser/{id}', 'Seguridad\PrevilegioController@deshabilitarPermisosUser')->name('privilegio.deshabilitarUser');
Route::get('privilegio/editUser/{id}', 'Seguridad\PrevilegioController@editUser')->name('privilegio.editUser');

Route::resource('bitacora', 'Seguridad\BitacoraController');
Route::get('bitacora/showBitacoraUser/{id}', 'Seguridad\BitacoraController@showBitacoraUser')->name('bitacora.showUser');
Route::get('bitacora/showAccionesUser/{id}{idUser}', 'Seguridad\BitacoraController@showAccionesUser')->name('bitacora.showAccionesUser');
Route::get('facturar','FacturaController@create');
Route::get('searchUserBitacora/', 'Seguridad\BitacoraController@searchUserBitacora');
Route::get('searchPaginateUserBitacora/', 'Seguridad\BitacoraController@searchPaginateUserBitacora');
Route::get('/bitacoras', 'Seguridad\BitacoraController@showBitacoras');
Route::get('searchBitacoras/', 'Seguridad\BitacoraController@searchBitacoras');
Route::get('searchPaginateBitacoras/', 'Seguridad\BitacoraController@searchPaginateBitacoras');
Route::get('show/bitacoras/{id}', 'Seguridad\BitacoraController@showAcciones')->name('bitacora.showAcciones');
Route::get('searchAcciones/', 'Seguridad\BitacoraController@searchAcciones');
Route::get('searchPaginateAcciones/', 'Seguridad\BitacoraController@searchPaginateAcciones');
// Backup routes
Route::get('backup', 'Seguridad\BackupController@index');
Route::post('backup/create', 'Seguridad\BackupController@create')->name('backup.create');
Route::get('backup/download/{backup}', 'Seguridad\BackupController@download')->name('backup.download');
Route::get('backup/restore/{backup}', 'Seguridad\BackupController@restore')->name('backup.restore');
Route::delete('backup/delete/{backup}', 'Seguridad\BackupController@delete')->name('backup.delete');

Route::resource('proveedor', 'Compra\ProveedorController');
Route::get('searchProveedores/', 'Compra\ProveedorController@searchProveedores');
Route::get('searchPaginateProveedores/', 'Compra\ProveedorController@searchPaginateProveedores');

Route::get('insumo/clear', 'Compra\InsumoController@limpiar');
Route::resource('insumo','Compra\InsumoController');
Route::get('insumo/detallar/{id}', 'Compra\InsumoController@detallar')->name('insumo.detallar');

Route::get('factura_compra/showList/', 'Compra\FacturaCompraController@showList');
Route::get('factura_compra/detallar/{id}', 'Compra\FacturaCompraController@detallar')->name('factura.detallar');
Route::resource('factura_compra','Compra\FacturaCompraController');











//90 - FIN DE ROUTES DE SERGIO WEIMAR
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
	$fa_c=[];
	$facturas=DB::table('factura')
            ->select('factura.*', 'p.nombre as nombreC')
            ->join('persona as p', 'p.id', '=', 'factura.idEmpleado')->get();
	$pdf = PDF::loadView('venta/factura/reporte',['facturas' => $facturas,'fa_c' => $fa_c]);
	return $pdf->download('ReporteFacturas.pdf');
});
Route::resource('emplea','Seguridad\EmpleadoController@index');






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
Route::resource('reportes/reporte_medicacion','ReporteMedicacionController');
Route::resource('infraestructura/granja','GranjaController');
Route::get('infraestructura.pdf',function() {
	$granjas = \sisAvicola\Granja::all();
	$pdfGranjas = PDF::loadView('infraestructura.granja.reporteGranja',['granjas'=>$granjas]);
	return $pdfGranjas->stream('reporteGranja.pdf');
	//return $pdfGranjas->stream();
});
Route::resource('infraestructura/infraestructura','InfraestructuraController');
Route::resource('infraestructura/equipo','EquipoController');
Route::resource('infraestructura/bateria','BateriaController');
Route::resource('infraestructura/proceso_sanitario','ProcesoSanitarioController');
Route::resource('infraestructura/registro_sanitizacion','RegistroSanitizacionController');
