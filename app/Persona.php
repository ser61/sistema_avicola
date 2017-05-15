<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class Persona extends Model
{
  protected $table = 'Persona';

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
    $empleados = $query->where('visible','1')
                        ->where('tipo','e')
                        ->where('idEmpresa',Auth::user()->idEmpresa);
    return $empleados;
  }

  public function setFotoAttribute($foto)
  {
    if (!empty($foto)) {
      $this->attributes['foto'] = Carbon::now()->second.$foto->getClientOriginalName();
      $name = Carbon::now()->second.$foto->getClientOriginalName();
      Storage::disk('local')->put($name, \File::get($foto));
    }
  }
}
