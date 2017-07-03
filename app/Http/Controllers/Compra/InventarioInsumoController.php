<?php

namespace sisAvicola\Http\Controllers\Compra;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use sisAvicola\Http\Controllers\Controller;
use sisAvicola\Models\Compra\Insumo;

class InventarioInsumoController extends Controller
{
    public function index()
    {
      $insumosMP = Insumo::_getAllInsumoMP(Auth::user()->idEmpresa)->get();
      $insumosM = Insumo::_getAllInsumoM(Auth::user()->idEmpresa)->get();
      $insumosS = Insumo::_getAllInsumoS(Auth::user()->idEmpresa)->get();
      return view('compra.inventario.index', compact("insumosMP","insumosM","insumosS"));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

  public function editar(Request $request)
  {
    $insumo = Insumo::find($request['id']);
    return response()->json(
      $insumo->toArray()
    );
  }

    public function edit(Request $request, $id)
    {
      $insumo = Insumo::find($request['id']);
      return response()->json(
        $insumo->toArray()
      );
    }

  public function refresh(Request $request)
  {
    if ($request->ajax()) {
      $insumosMP = Insumo::_getAllInsumoMP(Auth::user()->idEmpresa)->get();
      $insumosM = Insumo::_getAllInsumoM(Auth::user()->idEmpresa)->get();
      $insumosS = Insumo::_getAllInsumoS(Auth::user()->idEmpresa)->get();
      $view = view('compra.inventario.ajax.list', compact("insumosMP","insumosM","insumosS"));
      return Response($view);
    }
  }

    public function update(Request $request, $id)
    {
      Insumo::_updateInsumo($request['id'], $request['cantidad']);
    }

    public function destroy($id)
    {
        //
    }
}
