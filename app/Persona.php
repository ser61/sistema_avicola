<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
  protected $table = 'Persona';

  protected $fillable = ['ci', 'nombre', 'apellido',
    'direccion', 'email', 'nombreEmpresa', 'fechaNacimiento',
    'fechaIngreso', 'foto', 'idCargo', 'tipo', 'visible'
  ];

  public function scope_nroEmpleados($query, $idCargo)
  {
    $empleados = $query->where('idCargo',$idCargo)->where('visible','1');
    return $empleados;
  }
}
