<?php

namespace sisAvicola\Http\Controllers\Seguridad;

use sisAvicola\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use sisAvicola\Models\seguridad\Accion;
use sisAvicola\Models\seguridad\Bitacora;
use sisAvicola\Persona;
use sisAvicola\User;

class BitacoraController extends Controller
{
  public function index()
  {
    $usuarios = User::_getUsuariosBitacora()->paginate(6);
    $empleados = Persona::_allEmpleados()->get();
    return view('seguridad.bitacora.index', compact('usuarios', 'empleados'));
  }

  public function create()
  {
    //
  }

  public function store(Request $request)
  {
    //
  }

  public function showBitacoraUser($id)
  {
    $bitacoras = Bitacora::_getBitacoras($id, Auth::user()->idEmpresa)->get();
    $user = User::find($id);
    return view('seguridad.bitacora.indexUser', compact('bitacoras', 'user'));
  }

  public function showAccionesUser($id, $idUser)
  {
    $acciones = Accion::_getAcciones($id, Auth::user()->idEmpresa)->get();
    $user = User::find($idUser);
    return view('seguridad.bitacora.accionesUser', compact('acciones', 'user'));
  }

  public function searchUserBitacora(Request $request)
  {
    if ($request->ajax()) {
      $usuarios = User::_buscarUserBit($request['search'])->paginate(6);
      $search = $request['search'];
      $view = view('seguridad.bitacora.ajax.getListUserBitacora', compact('usuarios', 'search'));
      return Response($view);
    }

  }

  public function searchPaginateUserBitacora(Request $request)
  {
    if ($request->ajax()) {
      $usuarios = User::_buscarUserBit($request['search'])->paginate(6);
      $search = $request['search'];
      $view = view('seguridad.bitacora.ajax.getListUserBitacora', compact('usuarios', 'search'));
      return Response($view);
    }
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
