<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use sisAvicola\Http\Requests\CargoFormRequest;
use sisAvicola\Cargo;
use DB;
use sisAvicola\Persona;

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
    $request['visible'] = '1';
    Cargo::create($request->all());
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
    $cargo = Cargo::find($id);
    $name = $cargo->nombre;
    $request['visible'] = '1';
    $cargo->update($request->all());
    $cargo->save();
    return redirect('cargo/')->with('msj','El cargo: '.$name.' se edito exitosamente.');
  }

  public function destroy($id)
  {
    $cargo = Cargo::_eliminarCargo($id);
    return back()->with('msj', 'El Cargo: '.$cargo->nombre.' se elimino exitosamente.');
  }
}
