<?php

namespace sisAvicola\Models\Compra;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Proveedor extends Model
{
  protected $table = "persona";

  protected $fillable = [
    'ci',
    'nombre',
    'apellido',
    'direccion',
    'email',
    'nombreEmpresa',
    'tipo',
    'idEmpresa',
    'visible'
  ];

  public function scope_allProveedores($query)
  {
    $proveedores = $query->select('persona.id as id', 'persona.ci as ci', 'persona.nombre as nombre', 'persona.apellido as apellido',
      'persona.direccion as direccion', 'persona.email as email', 'persona.nombreEmpresa as empresa')
      ->where('persona.visible','1')->where('persona.tipo','p')->where('persona.idEmpresa',Auth::user()->idEmpresa);
    return $proveedores;
  }
}
