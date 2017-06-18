<?php

namespace sisAvicola\Http\Controllers\Seguridad;

use Illuminate\Http\Request;
use sisAvicola\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use sisAvicola\Http\Requests\UserRequest;
use sisAvicola\Http\Requests\UserUpdateRequest;
use sisAvicola\Models\seguridad\Accion;
use sisAvicola\Models\seguridad\CasoPUsers;
use sisAvicola\Models\seguridad\Modulo;
use sisAvicola\Models\seguridad\PrivilegioUsers;
use sisAvicola\Models\seguridad\UserEmpleado;
use sisAvicola\Persona;
use sisAvicola\User;

class AdminUsersController extends Controller
{
  public function index()
  {
    $usuarios = User::_getUsuarios()->paginate(6);
    $empleados = Persona::_allEmpleados()->get();
    Accion::_crearAccion('Ingreso: Indice de Usuarios.', Auth::user()->id, Auth::user()->idEmpresa);
    return view('seguridad.usuario.index', compact('usuarios','empleados'));
  }

  public function create()
  {
    $empleados = Persona::_allEmpleados()->pluck('nombre','id');
    Accion::_crearAccion('Ingreso: Registro de Usuarios.', Auth::user()->id, Auth::user()->idEmpresa);
    return view('seguridad.usuario.create', compact('empleados'));
  }

  public function store(UserRequest $request)
  {
    UserEmpleado::_createUsuarioEmpleado($request);
    $empleado = UserEmpleado::_getLastAdded();
    $modulos = Modulo::all();
    PrivilegioUsers::_createPrivilegiosDefault($empleado->id, $modulos);
    $privilegios = PrivilegioUsers::_getPrivilegios($empleado->id, Auth::user()->idEmpresa)->get();
    CasoPUsers::_createCasoUsoDefault($privilegios, Auth::user()->idEmpresa);
    Accion::_crearAccionOnTable('Registro: Usuario', 'persona', $empleado->id, Auth::user()->id, Auth::user()->idEmpresa);
    return redirect('admin/')->with('msj','El usuario '.$request['name'].' se registro exitosamente.');
  }

  public function show($id)
  {
    //
  }

  public function edit($id)
  {
    $empleados = Persona::_allEmpleados()->pluck('nombre','id');
    $usuario = User::find($id);
    Accion::_crearAccion('Ingreso: Edicion de Usuario.', Auth::user()->id, Auth::user()->idEmpresa);
    return view('seguridad.usuario.edit', compact('usuario', 'empleados'));
  }

  public function update(UserUpdateRequest $request, $id)
  {
    UserEmpleado::_updateUsuarioEmpleado($request, $id);
    Accion::_crearAccionOnTable('Edicion: Usuario', 'users', $id, Auth::user()->id, Auth::user()->idEmpresa);
    return redirect('admin/')->with('msj', 'El Usuario '.$request['name'].' fue actualizado exitosamente.');
  }

  public function destroy($id)
  {
    User::_eliminar($id);
    Accion::_crearAccionOnTable('Eliminar: Usuario.', 'users', $id, Auth::user()->id, Auth::user()->idEmpresa);
    return back()->with('msj', 'El usuario fue eliminado exitosamente.');
  }

  public function searchUsuarios(Request $request)
  {
    if ($request->ajax()) {
      $usuarios = User::_buscarUsuarios($request['search'])->paginate(6);
      $search = $request['search'];
      $view = view('seguridad.usuario.ajax.getList', compact('usuarios', 'search'));
      return Response($view);
    }
  }

  public function searchPaginateUsuarios(Request $request)
  {
    if ($request->ajax()) {
      $usuarios = User::_buscarUsuarios($request['search'])->paginate(6);
      $search = $request['search'];
      $view = view('seguridad.usuario.ajax.getList', compact('usuarios', 'search'));
      return Response($view);
    }

  }
}
