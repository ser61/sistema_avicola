<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use League\Flysystem\Exception;
use sisAvicola\Http\Requests\EmpleadoFormRequest;
use sisAvicola\Cargo;
use sisAvicola\Persona;
use sisAvicola\Telefono;

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
    return view('seguridad.empleado.crear',compact('cargos'));
  }

  public function store(EmpleadoFormRequest $request)
  {
    try {
      DB::beginTransaction();
        if ($request['fechaIngreso'] == '') {$request['fechaIngreso'] = null;}
        if ($request['foto'] == '') {$request['foto'] = 'user.png';}
        $request['tipo'] = 'e';
        $request['idEmpresa'] = Auth::user()->idEmpresa;
        $request['visible'] = '1';
        Persona::create($request->all());

      if ($request['telefono'] != null) {
        $empleado = Persona::where('tipo','e')->where('idEmpresa',Auth::user()->idEmpresa)->get()->last();
        $telefonos = $request['telefono'];
        $cont = 0;
        while ($cont < count($telefonos)) {
          Telefono::create([
            'numero' => $telefonos[$cont],
            'idPersona' => $empleado->id,
            'idEmpresa' => Auth::user()->idEmpresa,
            'visible' => $request['visible']
          ]);
          $cont = $cont + 1;
        }
      }
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
      if ($request['fechaIngreso'] == '') {$request['fechaIngreso'] = null;}
      if ($request['foto'] == '') {$request['foto'] = null;}
      $request['tipo'] = 'e';
      $request['idEmpresa'] = Auth::user()->idEmpresa;
      $request['visible'] = '1';
      $empleado = Persona::find($id);
      $empleado->update($request->all());
      $empleado->save();

      if ($request['telefonoEditar'] != null) {
        $telefonoEditar = $request['telefonoEditar'];
        $telefonosEmpleado = Telefono::_getTelefonos($id)->get();
        $cont = 0;
        foreach ($telefonosEmpleado as $telefonoEmpleado) {
          $request['numero'] = $telefonoEditar[$cont];
          $request['idPersona'] = $empleado->id;
          $telefonoEmpleado->update($request->all());
          $telefonoEmpleado->save();
          $cont = $cont + 1;
        }
      }

      if ($request['telefono'] != null) {
        $telefonos = $request['telefono'];
        $cont = 0;
        while ($cont < count($telefonos)) {
          Telefono::create([
            'numero' => $telefonos[$cont],
            'idPersona' => $empleado->id,
            'idEmpresa' => $request['idEmpresa'],
            'visible' => $request['visible']
          ]);
          $cont = $cont + 1;
        }
      }
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
