<?php

namespace sisAvicola\Models\seguridad;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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

  public function scope_getBitacoras($query, $idUser, $idEmpresa)
  {
    $bitacoras = $query->where('bitacora.idEmpresa', $idEmpresa)
      ->where('bitacora.visible', '1')
      ->where('bitacora.idUser', $idUser);
    return $bitacoras;
  }

  public function scope_getAllBitacoras($query, $idEmpresa)
  {
    $bitacoras = $query->where('idEmpresa',$idEmpresa)->whereVisible('1');
    return $bitacoras;
  }

  public function scope_buscarBitacoras($query, $search)
  {
    $lista = $this->_getAllBitacoras(Auth::user()->idEmpresa)
      ->where('bitacora.created_at','LIKE','%'.$search.'%');
    return $lista;
  }
}
