<?php

namespace sisAvicola\Http\Controllers\Seguridad;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use sisAvicola\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use League\Flysystem\Exception;
use sisAvicola\Http\Requests\EmpleadoFormRequest;
use sisAvicola\Models\seguridad\Cargo;
use sisAvicola\Models\seguridad\Telefono;
use sisAvicola\Persona;
use sisAvicola\Models\seguridad\Accion;

class EmpleadoController extends Controller
{
  public function index()
  {
    $empleados = Persona::_allEmpleados()->paginate(6);
    $cargos = Cargo::_allCargos()->get();
    Accion::_crearAccion('Ingreso: Indice de Empleados.', Auth::user()->id, Auth::user()->idEmpresa);
    return view('seguridad.empleado.index', compact('empleados', 'cargos'));
  }

  public function create()
  {
    $cargos = Cargo::_allCargos()->get()->pluck('nombre','id');
    Accion::_crearAccion('Ingreso a la pagina de Registro de Empleados.', Auth::user()->id, Auth::user()->idEmpresa);
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
      Accion::_crearAccionOnTable('Registro: Empleado', 'persona', $empleado->id, Auth::user()->id, Auth::user()->idEmpresa);
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
    Accion::_crearAccion('Ingreso: Edicion de empleado.', Auth::user()->id, Auth::user()->idEmpresa);
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
      Accion::_crearAccionOnTable('Edicion: Empleado', 'persona', $id, Auth::user()->id, Auth::user()->idEmpresa);
      return redirect('empleado/')->with('msj','El empleado: '.$empleado->nombre.' se actualizo exitosamente.');
    } catch (Exception $e) {
      DB::rollback();
      return redirect('empleado/')->with('error','Error: No se pudo actualizar correctamente.');
    }
  }

  public function destroy($id)
  {
    Persona::_eliminarEmpleado($id);
    Accion::_crearAccionOnTable('Eliminar: Empleado', 'persona', $id, Auth::user()->id, Auth::user()->idEmpresa);
    return back()->with('msj', 'El empleado fue eliminado exitosamente');
  }

  public function searchEmpleados(Request $request)
  {

  }

  public function searchPaginateEmpleados(Request $request)
  {

  }
}
