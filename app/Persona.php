<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Symfony\Component\Debug\Exception\FatalErrorException;

class Persona extends Model
{
  protected $table = 'persona';

  protected $fillable = ['ci', 'nombre', 'apellido',
    'direccion', 'email', 'nombreEmpresa', 'fechaNacimiento',
    'fechaIngreso', 'foto', 'idCargo', 'tipo', 'idEmpresa', 'visible'
  ];

  public function scope_nroEmpleados($query, $idCargo)
  {
    $empleados = $query->where('idCargo',$idCargo)
                        ->where('visible','1')
                        ->where('tipo','e')
                        ->where('idEmpresa',Auth::user()->idEmpresa)
                        ->select(DB::raw('count(*) as nro'))->get()->first();
    return $empleados;
  }

  public function scope_allEmpleados($query)
  {
    $empleados = $query->select('persona.id as id', 'persona.ci as ci', 'persona.nombre as nombre', 'persona.apellido as apellido',
                                'persona.foto as foto', 'persona.direccion as direccion', 'persona.fechaNacimiento as fechaNacimiento',
                                'persona.fechaIngreso as fechaIngreso', 'c.nombre as cargo')
                        ->join('cargo as c','c.id', '=', 'persona.idCargo')
                        ->where('persona.visible','1')->where('persona.tipo','e')->where('persona.idEmpresa',Auth::user()->idEmpresa)
                        ->where('c.visible', '1')->where('c.idEmpresa', Auth::user()->idEmpresa);
    return $empleados;
  }

  public function scope_eliminarEmpleado($query, $id)
  {
    $query->where('id',$id)->update(['visible' => '0']);
    return;
  }

  public function setFotoAttribute($foto)
  {
      if (!empty($foto) && $foto != 'user.png') {
        $this->attributes['foto'] = Carbon::now()->second.$foto->getClientOriginalName();
        $name = Carbon::now()->second.$foto->getClientOriginalName();
        Storage::disk('local')->put($name, \File::get($foto));
      }else{
        $this->attributes['foto'] = 'user.png';
      }
  }

  public function scope_createEmpleado($query, $request)
  {
    if ($request['fechaIngreso'] == '') {$request['fechaIngreso'] = null;}
    if ($request['foto'] == '') {$request['foto'] = 'user.png';}
    $request['tipo'] = 'e';
    $request['idEmpresa'] = Auth::user()->idEmpresa;
    $request['visible'] = '1';
    $this->create($request->all());
    return;
  }

  public function scope_lastAdded($query)
  {
    $empleado = $query->where('tipo','e')->where('idEmpresa',Auth::user()->idEmpresa)->get()->last();
    return $empleado;
  }

  public function scope_updateEmpleado($query, $request, $id)
  {
    if ($request['fechaIngreso'] == '') {$request['fechaIngreso'] = null;}
    $request['tipo'] = 'e';
    $request['idEmpresa'] = Auth::user()->idEmpresa;
    $request['visible'] = '1';
    $empleado = $this->find($id);
    $empleado->update($request->all());
    $empleado->save();
    return $empleado;
  }

  public function scope_buscarEmpleados($query, $search)
  {
    $lista = $this->_allEmpleados()->where('persona.nombre','LIKE','%'.$search.'%')
      ->orWhere('c.nombre','LIKE','%'.$search.'%')
      ->orWhere('persona.apellido','LIKE','%'.$search.'%')
      ->orWhere('persona.ci','LIKE','%'.$search.'%');
    return $lista;
  }
}
