<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
  protected $table = 'bitacora';

  protected $fillable = ['idUser', 'idEmpresa', 'visible'];

  public function scope_crearBitacora($query, $idUser, $idEmpresa)
  {
    $this->create([
      'idUser' => $idUser,
      'idEmpresa' => $idEmpresa,
      'visible' => '1'
    ]);
    return;
  }

  public function scope_findByIdUser($query, $idUser, $idEmpresa)
  {
    $bitacora = $query->where('idEmpresa', $idEmpresa)->where('idUser', $idUser)
                      ->where('visible', '1');
    return $bitacora;
  }
}
