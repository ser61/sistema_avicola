<?php

namespace sisAvicola\Http\Controllers\Seguridad;

use sisAvicola\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use League\Flysystem\Exception;
use sisAvicola\Http\Requests\EmpleadoFormRequest;
use sisAvicola\Models\seguridad\Cargo;
use sisAvicola\Models\seguridad\Telefono;
use sisAvicola\Persona;

class EmpleadoController extends Controller
{
  public function index()
  {
    $empleados = Persona::_allEmpleados()->get();
    $cargos = Cargo::_allCargos()->get();
    return view('seguridad.empleado.index', compact('empleados', 'cargos'));
  }

  public function create()
  {
    $cargos = Cargo::_allCargos()->get()->pluck('nombre','id');
    return view('seguridad.empleado.crear',compact('cargos'));
  }

  public function store(EmpleadoFormRequest $request)
  {
    try {
      DB::beginTransaction();
      Persona::_createEmpleado($request);
      $empleado = Persona::_lastAdded();
      Telefono::_createTelefonos($request['telefono'], $empleado);
      DB::commit();
      return redirect('empleado/')->with('msj','El empleado: '.$request['nombre'].' se registro exitosamente.');
    } catch (Exception $e) {
      DB::rollback();
      return redirect('empleado/')->with('error','Error: No se pudo registrar correctamente.');
    }
  }

  public function show($id)
  {
    //
  }

  public function edit($id)
  {
    $empleado = Persona::find($id);
    $telefonos = Telefono::_getTelefonos($id)->get();
    $cargos = Cargo::_allCargos()->get()->pluck('nombre','id');
    return view('seguridad.empleado.editar', compact('empleado','telefonos','cargos'));
  }

  public function update(EmpleadoFormRequest $request, $id)
  {
    try {
      DB::beginTransaction();
      $empleado = Persona::_updateEmpleado($request, $id);
      Telefono::_updateTelefonos($request['telefonoEditar'], $empleado, $id);
      Telefono::_createTelefonos($request['telefono'], $empleado);
      DB::commit();
      return redirect('empleado/')->with('msj','El empleado: '.$empleado->nombre.' se actualizo exitosamente.');
    } catch (Exception $e) {
      DB::rollback();
      return redirect('empleado/')->with('error','Error: No se pudo actualizar correctamente.');
    }
  }

  public function destroy($id)
  {
    Persona::_eliminarEmpleado($id);
    return back()->with('msj', 'El empleado fue eliminado exitosamente');
  }
}
