<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Http\Request;
use sisAvicola\Cargo;
use sisAvicola\CasoPCargo;
use sisAvicola\CasoPUsers;
use sisAvicola\Modulo;
use sisAvicola\PrivilegioCargo;
use sisAvicola\PrivilegioUsers;
use sisAvicola\User;
use sisAvicola\UserEmpleado;

class PrevilegioController extends Controller
{
  public function index()
  {
    $cargos = Cargo::_allCargos()->get();
    $usuarios = User::_getUsuarios()->get();
    $modulos = Modulo::all()->pluck('nombre', 'id');
    return view('seguridad.privilegio.index', compact('cargos', 'modulos','usuarios'));
  }

  public function updatePrivilegiosCargo(Request $request)
  {
    CasoPCargo::_updatePermisos($request);
    return redirect('privilegio/')->with('msj', 'Los permisos fueron actualizados exitosamente');
  }

  public function deshabilitarPermisosCargo($id)
  {
    CasoPCargo::_deshabilitarPermisos($id);
    return redirect('privilegio/')->with('msj', 'Los permisos fueron deshabilitados exitosamente');
  }

  public function editCargo(Request $request, $id)
  {
    $modulo = Modulo::find($request['modulo']);
    $privilegio = PrivilegioCargo::_getPrivilegio($id, $request['modulo'])->get()->first();
    $casosUsoActual = CasoPCargo::_getCasosUsos($privilegio->id)->get();
    $permiso = ['n' => 'Oculto', 's' => 'Solo lectura', 'c' => 'Control total'];
    $cargo = Cargo::find($id);
    return view('seguridad.privilegio.editCargo', compact('modulo', 'permiso', 'casosUsoActual', 'privilegio', 'cargo'));
  }

  public function updatePrivilegiosUser(Request $request)
  {
    CasoPUsers::_updatePermisos($request);
    return redirect('privilegio/')->with('msj', 'Los permisos fueron actualizados exitosamente');
  }

  public function deshabilitarPermisosUser($id)
  {
    CasoPUsers::_deshabilitarPermisos($id);
    return redirect('privilegio/')->with('msj', 'Los permisos fueron deshabilitados exitosamente');
  }

  public function editUser(Request $request, $id)
  {
    $modulo = Modulo::find($request['modulo']);
    $privilegio = PrivilegioUsers::_getPrivilegioUser($id, $request['modulo'])->get()->first();
    $casosUsoActual = CasoPUsers::_getCasosUsos($privilegio->id)->get();
    $permiso = ['n' => 'Oculto', 's' => 'Solo lectura', 'c' => 'Control total'];
    $usuario = UserEmpleado::find($id);
    return view('seguridad.privilegio.editUser', compact('modulo', 'permiso', 'casosUsoActual', 'privilegio', 'usuario'));
  }
}
