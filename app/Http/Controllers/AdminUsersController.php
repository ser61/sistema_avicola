<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Support\Facades\DB;
use League\Flysystem\Exception;
use sisAvicola\Http\Requests\UserRequest;
use sisAvicola\Http\Requests\UserUpdateRequest;
use sisAvicola\Persona;
use sisAvicola\User;
use sisAvicola\UserEmpleado;

class AdminUsersController extends Controller
{

  public function index()
  {
    $usuarios = User::_getUsuarios()->get();
    return view('seguridad.usuario.index', compact('usuarios'));
  }

  public function create()
  {
    $empleados = Persona::_allEmpleados()->pluck('nombre','id');
    return view('seguridad.usuario.create', compact('empleados'));
  }

  public function store(UserRequest $request)
  {
    try {
      DB::beginTransaction();
      UserEmpleado::_createUsuarioEmpleado($request);
      return redirect('admin/')->with('msj','El usuario '.$request['name'].' se registro exitosamente.');
      DB::commit();
    } catch (Exception $e) {
      DB::rollback();
      return back()->with('error', 'Hubo un problema al intentar registra el usuario.');
    }
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
