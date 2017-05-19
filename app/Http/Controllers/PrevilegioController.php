<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use sisAvicola\Cargo;
use sisAvicola\CasoPCargo;
use sisAvicola\Modulo;
use sisAvicola\PrivilegioCargo;

class PrevilegioController extends Controller
{
  public function index()
  {
    $cargos = Cargo::_allCargos()->get();
    $modulos = Modulo::all()->pluck('nombre', 'id');
    return view('seguridad.privilegio.index', compact('cargos', 'modulos'));
  }

  public function updatePrivilegios(Request $request)
  {
    CasoPCargo::_updatePermisos($request);
    return redirect('privilegio/')->with('msj', 'Los permisos fueron actualizados exitosamente');
  }

  public function deshabilitarPermisos($id)
  {
    CasoPCargo::_deshabilitarPermisos($id);
    return redirect('privilegio/')->with('msj', 'Los permisos fueron deshabilitados exitosamente');
  }

  public function edit(Request $request, $id)
  {
    $modulo = Modulo::find($request['modulo']);
    $privilegio = PrivilegioCargo::_getPrivilegio($id, $request['modulo'])->get()->first();
    $casosUsoActual = CasoPCargo::_getCasosUsos($privilegio->id)->get();
    $permiso = ['n' => 'Oculto', 's' => 'Solo lectura', 'c' => 'Control total'];
    $cargo = Cargo::find($id);
    return view('seguridad.privilegio.edit', compact('modulo', 'permiso', 'casosUsoActual', 'privilegio', 'cargo'));
  }
}
