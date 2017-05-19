<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use sisAvicola\Cargo;
use sisAvicola\PrivilegioCargo;

class PrevilegioController extends Controller
{
    public function index()
    {
      $cargos = Cargo::_allCargos()->get();
      $privilegios = null;
      foreach ($cargos as $cargo) {
        $privilegios[$cargo->id] = PrivilegioCargo::_getPrivilegiosWithName($cargo->id, Auth::user()->idEmpresa)->get()->pluck('modulo', 'id');
      }
      return view('seguridad.privilegio.index',compact('cargos', 'privilegios'));
    }

    public function create(){}

    public function store(Request $request){}

    public function show($id){}

    public function edit(Request $request, $id)
    {
      return 'hola: '.$request['privilegio'];
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
