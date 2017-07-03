<?php

namespace sisAvicola\Http\Controllers\Compra;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use sisAvicola\Http\Controllers\Controller;
use sisAvicola\Http\Requests\ProveedorFormRequest;
use sisAvicola\Models\Compra\Proveedor;
use sisAvicola\Models\seguridad\Accion;
use sisAvicola\Models\seguridad\Telefono;


class ProveedorController extends Controller
{
  public function index()
  {
    $proveedores = Proveedor::_allProveedores()->paginate(6);
    $telefonos = Telefono::_allTelefonos()->get();
    Accion::_crearAccion("Acceso: Proveedores", Auth::user()->id, Auth::user()->idEmpresa);
    return view("compra.proveedor.index", compact("proveedores", "telefonos"));
  }

  public function create()
  {
    Accion::_crearAccion("Acceso: Registro de Proveedor", Auth::user()->id, Auth::user()->idEmpresa);
    return view("compra.proveedor.crear");
  }

  public function store(Request $request)
  {
    try {
      DB::beginTransaction();
      Proveedor::_createProveedor($request);
      $proveedor = Proveedor::_lastAdded();
      Telefono::_createTelefonos($request['telefono'], $proveedor);
      DB::commit();
      Accion::_crearAccionOnTable('Registro: Proveedor', 'persona', $proveedor->id, Auth::user()->id, Auth::user()->idEmpresa);
      return redirect('proveedor/')->with('msj', 'El proveedor: ' . $request['nombre'] . ' se registro exitosamente.');
    } catch (Exception $e) {
      DB::rollback();
      return redirect('proveedor/')->with('error', 'Error: No se pudo registrar correctamente.');
    }
  }

  public function searchProveedores(Request $request)
  {
    if ($request->ajax()) {
      $proveedores = Proveedor::_buscarProveedores($request['search'])->paginate(6);
      $search = $request['search'];
      $telefonos = Telefono::_allTelefonos()->get();
      $view = view('compra.proveedor.ajax.list', compact('proveedores', 'search', 'telefonos'));
      return Response($view);
    }
  }

  public function searchPaginateProveedores(Request $request)
  {
    if ($request->ajax()) {
      $proveedores = Proveedor::_buscarProveedores($request['search'])->paginate(6);
      $search = $request['search'];
      $telefonos = Telefono::_allTelefonos()->get();
      $view = view('compra.proveedor.ajax.list', compact('proveedores', 'search', 'telefonos'));
      return Response($view);
    }
  }

  public function show($id)
  {
    //
  }

  public function edit($id)
  {
    $proveedor = Proveedor::find($id);
    $telefonos = Telefono::_getTelefonos($id)->get();
    Accion::_crearAccion('Acceso: Edicion de proveedor.', Auth::user()->id, Auth::user()->idEmpresa);
    return view('compra.proveedor.editar', compact('proveedor','telefonos'));
  }

  public function update(ProveedorFormRequest $request, $id)
  {
    try {
      DB::beginTransaction();
      $proveedor = Proveedor::_updateProveedor($request, $id);
      Telefono::_updateTelefonos($request['telefonoEditar'], $proveedor, $id);
      Telefono::_createTelefonos($request['telefono'], $proveedor);
      DB::commit();
      Accion::_crearAccionOnTable('Edicion: Proveedor', 'persona', $id, Auth::user()->id, Auth::user()->idEmpresa);
      return redirect('proveedor/')->with('msj','El proveedor: '.$proveedor->nombre.' se actualizo exitosamente.');
    } catch (Exception $e) {
      DB::rollback();
      return redirect('proveedor/')->with('error','Error: No se pudo actualizar correctamente.');
    }

  }

  public function destroy($id)
  {
    Proveedor::_eliminarPreveedor($id);
    Accion::_crearAccionOnTable('Eliminar: Proveedor', 'persona', $id, Auth::user()->id, Auth::user()->idEmpresa);
    return back()->with('msj', 'El proveedor fue eliminado exitosamente');
  }
}