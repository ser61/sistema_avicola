<?php

namespace sisAvicola\Http\Controllers\Compra;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use sisAvicola\Http\Controllers\Controller;
use sisAvicola\Models\Compra\Insumo;
use sisAvicola\Models\seguridad\Accion;

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
        return $request->all();
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
        return 'hola';
    }
}
