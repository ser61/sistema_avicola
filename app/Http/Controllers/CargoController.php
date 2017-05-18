<?php

namespace sisAvicola\Http\Controllers;

use sisAvicola\Http\Requests\CargoFormRequest;
use sisAvicola\Cargo;

class CargoController extends Controller
{
  public function index()
  {
    $cargos = Cargo::_allCargos()->get();
    return view('seguridad.cargo.index', compact('cargos'));
  }

  public function create()
  {
    return view('seguridad.cargo.crear');
  }

  public function store(CargoFormRequest $request)
  {
    Cargo::_insertCargo($request);
    return redirect('cargo/')->with('msj','El cargo: '.$request['nombre'].' se creo exitosamente.');
  }

  public function show($id)
  {
    //
  }

  public function edit($id)
  {
    $cargo = Cargo::find($id);
    return view('seguridad.cargo.editar', compact('cargo'));
  }

  public function update(CargoFormRequest $request, $id)
  {
    $name = Cargo::_updateCargo($request, $id);
    return redirect('cargo/')->with('msj','El cargo: '.$name.' se edito exitosamente.');
  }

  public function destroy($id)
  {
    $cargo = Cargo::_eliminarCargo($id);
    return back()->with('msj', 'El Cargo: '.$cargo->nombre.' se elimino exitosamente.');
  }
}
