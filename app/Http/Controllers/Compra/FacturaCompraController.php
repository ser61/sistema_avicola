<?php

namespace sisAvicola\Http\Controllers\Compra;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use sisAvicola\Http\Controllers\Controller;
use sisAvicola\Models\Compra\FacturaCompra;
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
      $insumos = [];
      return view('compra.facturas.registro_index', compact("insumos", "proveedores"));
    }

    public function store(Request $request)
    {
        //
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
