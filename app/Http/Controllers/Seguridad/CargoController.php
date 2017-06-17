<?php

namespace sisAvicola\Http\Controllers\Seguridad;

use Illuminate\Http\Request;
use sisAvicola\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use sisAvicola\Http\Requests\CargoFormRequest;
use sisAvicola\Models\seguridad\Accion;
use sisAvicola\Models\seguridad\Cargo;
use sisAvicola\Models\seguridad\CasoPCargo;
use sisAvicola\Models\seguridad\Modulo;
use sisAvicola\Models\seguridad\PrivilegioCargo;

class CargoController extends Controller
{
  public function index()
  {
    Accion::_crearAccion('Ingreso a la pagina de Cargo', Auth::user()->id, Auth::user()->idEmpresa);
    $cargos = Cargo::_allCargos()->paginate(6);
    return view('seguridad.cargo.index', compact('cargos'));
  }

  public function create()
  {
    Accion::_crearAccion('Ingreso a la pagina de Crear Cargo', Auth::user()->id, Auth::user()->idEmpresa);
    return view('seguridad.cargo.crear');
  }

  public function store(CargoFormRequest $request)
  {
    Cargo::_insertCargo($request);
    $cargo = Cargo::_getLastAdded();
    Accion::_crearAccionOnTable('Creo un nuevo Cargo', 'cargo', $cargo->id, Auth::user()->id, Auth::user()->idEmpresa);

    $modulos = Modulo::all();
    PrivilegioCargo::_createPrivilegiosDefault($cargo->id, $modulos);
    $privilegios = PrivilegioCargo::_getPrivilegios($cargo->id, Auth::user()->idEmpresa)->get();
    CasoPCargo::_createCasoUsoDefault($privilegios, Auth::user()->idEmpresa);
    return redirect('cargo/')->with('msj','El cargo: '.$request['nombre'].' se creo exitosamente.');
  }

  public function show($id)
  {
    //
  }

  public function edit($id)
  {
    Accion::_crearAccionOnTable('Ingreso a la pagina de Editar Cargo', 'cargo', $id, Auth::user()->id, Auth::user()->idEmpresa);
    $cargo = Cargo::find($id);
    return view('seguridad.cargo.editar', compact('cargo'));
  }

  public function update(CargoFormRequest $request, $id)
  {
    $name = Cargo::_updateCargo($request, $id);
    Accion::_crearAccionOnTable('Actualizo datos de un Cargo', 'cargo', $id, Auth::user()->id, Auth::user()->idEmpresa);
    return redirect('cargo/')->with('msj','El cargo: '.$name.' se edito exitosamente.');
  }

  public function destroy($id)
  {
    $cargo = Cargo::_eliminarCargo($id);
    Accion::_crearAccionOnTable('Elimino un Cargo', 'cargo', $id, Auth::user()->id, Auth::user()->idEmpresa);
    return back()->with('msj', 'El Cargo: '.$cargo->nombre.' se elimino exitosamente.');
  }
  
  public function searchCargos(Request $request)
  {
    if ($request->ajax()) {
      $cargos = Cargo::_buscarCargos($request['search'])->paginate(6);
      $search = $request['search'];
      $view = view('seguridad.cargo.ajax.getListSearch', compact('cargos', 'search'));
      return Response($view);
    }
  }

  public function searchPaginateCargos(Request $request)
  {
    if ($request->ajax()) {
      $cargos = Cargo::_buscarCargos($request['search'])->paginate(6);
      $search = $request['search'];
      $view = view('seguridad.cargo.ajax.getListSearch', compact('cargos', 'search'));
      return Response($view);
    }
  }
}
