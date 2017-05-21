<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use sisAvicola\CasoPUsers;
use sisAvicola\Http\Requests\UserRequest;
use sisAvicola\Http\Requests\UserUpdateRequest;
use sisAvicola\Persona;
use sisAvicola\PrivilegioUsers;
use sisAvicola\User;
use sisAvicola\UserEmpleado;

class AdminUsersController extends Controller
{
  public function index()
  {
    $usuarios = User::_getUsuarios()->get();
    $empleados = Persona::_allEmpleados()->get();
    return view('seguridad.usuario.index', compact('usuarios','empleados'));
  }

  public function create()
  {
    $empleados = Persona::_allEmpleados()->pluck('nombre','id');
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
    return view('seguridad.usuario.edit', compact('usuario', 'empleados'));
  }

  public function update(UserUpdateRequest $request, $id)
  {
    UserEmpleado::_updateUsuarioEmpleado($request, $id);
    return redirect('admin/')->with('msj', 'El Usuario '.$request['name'].' fue actualizado exitosamente.');
  }

  public function destroy($id)
  {
    User::_eliminar($id);
    return back()->with('msj', 'El usuario fue eliminado exitosamente.');
  }
}
