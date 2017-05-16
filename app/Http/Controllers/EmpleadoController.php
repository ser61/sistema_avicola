<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use League\Flysystem\Exception;
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
    try {
      DB::beginTransaction();
        if ($request['fechaIngreso'] == '') {$request['fechaIngreso'] = null;}
        if ($request['foto'] == '') {$request['foto'] = null;}
        Persona::create([
          'nombre' => $request['nombre'],
          'apellido' => $request['apellido'],
          'direccion' => $request['direccion'],
          'email' => $request['email'],
        ]);
        $request['tipo'] = 'e';
        $request['idEmpresa'] = Auth::user()->idEmpresa;
        $request['visible'] = '1';
        Persona::create($request->all());

        $empleado = Persona::where('tipo','e')->where('idEmpresa',Auth::user()->idEmpresa)->get()->last();

      return redirect('empleado/')->with('msj','El empleado: '.$request['nombre'].' se registro exitosamente.');


    } catch (Exception $e) {

    }


  }

  public function show($id)
  {
    //
  }

  public function edit($id)
  {
    return 'hola';
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
