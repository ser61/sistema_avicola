<?php

namespace sisAvicola\Models\seguridad;

use Illuminate\Database\Eloquent\Model;

class CasoUso extends Model
{
  protected $table = 'caso_uso';

  protected $fillable = ['idModulo', 'nombre', 'idEmpresa', 'visible'];

  public function scope_getCasos($query, $idModulo)
  {
    $casos = $query->where('idModulo', $idModulo);
    return $casos;
  }
}
