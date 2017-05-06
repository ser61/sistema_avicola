<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use sisAvicola\Http\Requests\CargoFormRequest;
use sisAvicola\Cargo;
use DB;

class CargoController extends Controller
{
  public function index()
  {
    $cargos = Cargo::_allCargos()->get();
    return view('seguridad.cargo.index', compact('cargos'));
  }

  public function create()
  {
    return view("administracion.cargo.create");
  }

  public function store(CargoFormRequest $request)
  {
    $cargo = new Cargo;
    $cargo->nombre = $request->get('nombre');
    $cargo->visible = 'v';
    $cargo->save();
    return Redirect::to('administracion/cargo');
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
