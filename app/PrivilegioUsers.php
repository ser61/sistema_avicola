<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class PrivilegioUsers extends Model
{
  protected $table = 'privilegio_usuario';

  protected $fillable = ['idUsuario', 'idModulo', 'permiso', 'idEmpresa', 'visible'];


  public function scope_createPrivilegiosDefault($query, $idUsuario, $modulos)
  {
    foreach ($modulos as $modulo) {
      $this->create([
        'idUsuario' => $idUsuario,
        'idModulo' => $modulo->id,
        'permiso' => '0',
        'idEmpresa' => Auth::user()->idEmpresa,
        'visible' => '1'
      ]);
    }
    return;
  }

  public function scope_getPrivilegios($query, $idUsuario, $idEmpresa)
  {
    $privilegios = $query->where('idEmpresa', $idEmpresa)
                        ->where('idUsuario', $idUsuario)
                        ->where('visible', '1');
    return $privilegios;
  }

  public function scope_getPrivilegio($query, $idUsuario, $modulo)
  {
    $privilegio = $query->where('visible', '1')->where('idEmpresa', Auth::user()->idEmpresa)
                        ->where('idUsuario', $idUsuario)->where('idModulo', $modulo->id);
    return $privilegio;
  }
}
