<?php

namespace sisAvicola\Http\Controllers\Compra;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use sisAvicola\Http\Controllers\Controller;
use sisAvicola\Models\Compra\Insumo;
use sisAvicola\Models\seguridad\Accion;
use Symfony\Component\HttpFoundation\Response;

class InsumoController extends Controller
{
    public function index()
    {
      $insumos = Insumo::_allInsumos()->paginate(6);
      //Accion::_crearAccion("Acceso: Insumo", Auth::user()->id, Auth::user()->idEmpresa);
      return view('compra.insumo.index', compact("insumos"));
    }

    public function create()
    {
        return 'hola';
    }

    public function store(Request $request)
    {
      if ($request->ajax()) {
        Insumo::_crearInsumo($request, Auth::user()->idEmpresa);
        $insumos = Insumo::_getInsumosNuevos(Auth::user()->idEmpresa)->get();
        $total = $this->calcTotal($insumos);
        $view = view('compra.facturas.ajax.insumos_list', compact("insumos", "total"));
        return Response($view);
      }
    }

  public function calcTotal($insumos)
  {
    if (count($insumos) == 0) {
      return 0;
    }
    $total = 0;
    foreach($insumos as $insumo){
      $monto = $insumo->cantidadTotal * $insumo->precio;
      $total += $monto;
    }
    return $total;
  }

    public function show($id)
    {
        return 'hola';
    }

    public function edit($id)
    {
        return 'hola';
    }

    public function update(Request $request, $id)
    {
        return 'hola';
    }

    public function destroy($id)
    {
      Insumo::destroy($id);
      return back()->with("msj", "El insumo se elimino correctamente.");
    }

  public function detallar($id)
  {
    return 'hola';
  }
}
