<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class PrivilegioCargo extends Model
{
  protected $table = 'privilegio_cargo';

  /* |--------------------------------------------------|
   * | En el campo permiso los posibles valores seran:  |
   * | 0 = no podra ver el modulo en home               |
   * | 1 = podra ver el modulo en home                  |
   * |--------------------------------------------------|*/
  protected $fillable = ['idCargo', 'idModulo', 'permiso', 'idEmpresa', 'visible'];

  public function scope_createPrivilegiosDefault($query, $idCargo, $modulos)
  {
    foreach ($modulos as $modulo) {
      $this->create([
        'idCargo' => $idCargo,
        'idModulo' => $modulo->id,
        'permiso' => '0',
        'idEmpresa' => Auth::user()->idEmpresa,
        'visible' => '1'
      ]);
    }
  }

  public function scope_getPrivilegios($query, $idCargo, $idEmpresa)
  {
    $privilegios = $query->where('idCargo',$idCargo)->where('idEmpresa', $idEmpresa)->where('visible', '1');
    return $privilegios;
  }

  public function scope_getPrivilegiosWithName($query, $idCargo, $idEmpresa)
  {
    $privilegios = $query->select('privilegio_cargo.*', 'm.nombre as modulo')
      ->join('modulo as m', 'm.id', '=', 'privilegio_cargo.idModulo')
      ->where('privilegio_cargo.idCargo', $idCargo)->where('privilegio_cargo.idEmpresa', $idEmpresa)
      ->where('privilegio_cargo.visible', '1');
    return $privilegios;
  }

  public function scope_getPrivilegio($query, $idCargo, $idModulo)
  {
    $privilegio = $query->where('idEmpresa', Auth::user()->idEmpresa)->where('visible', '1')
                        ->where('idCargo', $idCargo)->where('idModulo', $idModulo);
    return $privilegio;
  }
}
