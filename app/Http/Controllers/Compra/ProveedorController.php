<?php

namespace sisAvicola\Http\Controllers\Compra;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use sisAvicola\Http\Controllers\Controller;
use sisAvicola\Models\Compra\Proveedor;
use sisAvicola\Models\seguridad\Accion;


class ProveedorController extends Controller
{
    public function index()
    {
      $proveedores = Proveedor::_allProveedores()->paginate(6);
      Accion::_crearAccion("Acceso: Proveedores", Auth::user()->id, Auth::user()->idEmpresa);
      return view("compra.proveedor.index", compact("proveedores"));
    }

    public function create()
    {
      Accion::_crearAccion("Acceso: Registro de Proveedor", Auth::user()->id, Auth::user()->idEmpresa);
      return view("compra.proveedor.crear");
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