<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use League\Flysystem\Exception;
use sisAvicola\AdminUsers;
use sisAvicola\Http\Requests\UserRequest;
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
      $persona = Persona::find($request['idEmpleado']);
      $request['visible'] = '1';
      $request['password'] = bcrypt($request['password']);
      $request['estado'] = '0';
      $request['idEmpresa'] = Auth::user()->idEmpresa;
      $request['tipoUser'] = 'u';
      $request['foto'] = $persona['foto'];
      UserEmpleado::create($request->all());
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
    //
  }

  public function update(Request $request, $id)
  {
    //
  }

  public function destroy($id)
  {
    //
  }
}
