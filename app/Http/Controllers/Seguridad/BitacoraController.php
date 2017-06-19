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
    $acciones = Accion::_getAcciones($id, Auth::user()->idEmpresa)->paginate(10);
    $user = User::find($idUser);
    return view('seguridad.bitacora.accionesUser', compact('acciones', 'user', 'id'));
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

  public function showBitacoras()
  {
    $bitacoras = Bitacora::_getAllBitacoras(Auth::user()->idEmpresa)->orderBy('created_at','desc')->paginate(8);
    return view('seguridad.bitacora.indexBitacora', compact('bitacoras'));
  }

  public function searchBitacoras(Request $request)
  {
    if ($request->ajax()) {
      $bitacoras = Bitacora::_buscarBitacoras($request['search'])->paginate(8);
      $search = $request['search'];
      $view = view('seguridad.bitacora.ajax.getListBitacoras', compact('bitacoras', 'search'));
      return Response($view);
    }
  }

  public function searchPaginateBitacoras(Request $request)
  {
    if ($request->ajax()) {
      $bitacoras = Bitacora::_buscarBitacoras($request['search'])->paginate(8);
      $search = $request['search'];
      $view = view('seguridad.bitacora.ajax.getListBitacoras', compact('bitacoras', 'search'));
      return Response($view);
    }
  }

  public function showAcciones($id)
  {
    $acciones = Accion::_getAcciones($id, Auth::user()->idEmpresa)->paginate(10);
    return view('seguridad.bitacora.accionesBitacora', compact('acciones', 'id'));
  }

  public function searchAcciones(Request $request)
  {
    if ($request->ajax()) {
      $acciones = Accion::_buscarAcciones($request['search'], $request['id'])->paginate(10);
      $search = $request['search'];
      $view = view('seguridad.bitacora.ajax.getListAcciones', compact('acciones', 'search'));
      return Response($view);
    }
  }

  public function searchPaginateAcciones(Request $request)
  {
    if ($request->ajax()) {
      $acciones = Accion::_buscarAcciones($request['search'], $request['id'])->paginate(10);
      $search = $request['search'];
      $view = view('seguridad.bitacora.ajax.getListAcciones', compact('acciones', 'search'));
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
