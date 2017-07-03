<?php

namespace sisAvicola\Http\Controllers\Compra;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use sisAvicola\Http\Controllers\Controller;
use sisAvicola\Models\Compra\FacturaCompra;
use sisAvicola\Models\Compra\Insumo;
use sisAvicola\Models\Compra\Proveedor;

class FacturaCompraController extends Controller
{
    public function index()
    {
      $facturas = FacturaCompra::_allFacturas(Auth::user()->idEmpresa)->paginate(6);
      return view('compra.facturas.index', compact("facturas"));
    }

    public function create()
    {
      $proveedores = Proveedor::_allProveedores()->get()->pluck('nombre','id');
      $insumos = Insumo::_getInsumosNuevos(Auth::user()->idEmpresa)->get();
      $total = $this->calcTotal($insumos);
      return view('compra.facturas.registro_index', compact("insumos", "proveedores", "total"));
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

    public function store(Request $request)
    {
      $insumos = Insumo::_getInsumosNuevos(Auth::user()->idEmpresa)->get();
      $total = $this->calcTotal($insumos);
      FacturaCompra::_crearFactura($request, Auth::user()->id, $total, Auth::user()->idEmpresa);
      $factura = FacturaCompra::_getLastAdded(Auth::user()->idEmpresa);
      Insumo::_confirmarInsumos($factura->id, Auth::user()->idEmpresa);
      return redirect('factura_compra')->with("msj", "Se registro orden compra exitosamente...");
    }

  public function show($id)
  {
    //
  }

    public function showList(Request $request)
    {
      if ($request->ajax()) {
        $insumos = Insumo::_getInsumosNuevos(Auth::user()->idEmpresa)->get();
        $total = $this->calcTotal($insumos);
        $view = view('compra.facturas.ajax.insumos_list', compact("insumos", "total"));
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

  public function detallar($id)
  {
    return 'holaa';
  }
}
