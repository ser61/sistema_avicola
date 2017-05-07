<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Http\Request;
use sisAvicola\Http\Requests\EmpleadoFormRequest;
use sisAvicola\Cargo;
use sisAvicola\Persona;

class EmpleadoController extends Controller
{
  public function index()
  {
    $empleados = Persona::_allEmpleados()->get();
    return view('seguridad.empleado.index', compact('empleados'));
  }

  public function create()
  {
    $cargos = Cargo::_allCargos()->get()->pluck('nombre','id');
    $cargos[''] = '';
    return view('seguridad.empleado.crear',compact('cargos'));
  }

  public function store(EmpleadoFormRequest $request)
  {
    if ($request['fechaIngreso'] == '') {$request['fechaIngreso'] = null;}
    if ($request['foto'] == '') {$request['foto'] = null;}
    $request['tipo'] = 'e';
    $request['visible'] = '1';
    Persona::create($request->all());
    return redirect('empleado/')->with('msj','El empleado: '.$request['nombre'].' se registro exitosamente.');
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
