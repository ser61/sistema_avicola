<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class CasoPUsers extends Model
{
  protected $table = 'casop_usuario';

  /* |----------------------------------------------------------------------------------------------------|
   * | En el campo permiso los valores seran:                                                             |
   * | n = nulo, es decir no se vera en la interface.                                                     |
   * | s = solo lectura, es decir solo podra ver la pagina pero los botones o operadores no se podran ver.|
   * | t = control total, podra hacer lo que este posible en la interface.                                |
   * |----------------------------------------------------------------------------------------------------|*/
  protected $fillable = ['idPrivilegio', 'idCaso', 'permiso', 'idEmpresa', 'visible'];

  public function scope_createCasoUsoDefault($query, $privilegios, $idEmpresa)
  {
    foreach ($privilegios as $privilegio) {
      $casosUsos = CasoUso::_getCasos($privilegio->idModulo)->get();
      foreach ($casosUsos as $casosUso) {
        $this->create([
          'idPrivilegio' => $privilegio->id,
          'idCaso' => $casosUso->id,
          'permiso' => 'n',
          'idEmpresa' => $idEmpresa,
          'visible' => '1'
        ]);
      }
    }
    return;
  }

  public function scope_getCasosUsos($query, $idPrivilegio)
  {
    $casosUso = $query->select('casop_usuario.id as id', 'cu.nombre as nombre', 'casop_usuario.permiso as permiso')
      ->join('caso_uso as cu', 'cu.id', '=', 'casop_usuario.idCaso')
      ->where('casop_usuario.idPrivilegio', $idPrivilegio)
      ->where('casop_usuario.visible', '1')->where('casop_usuario.idEmpresa', Auth::user()->idEmpresa);
    return $casosUso;
  }

  public function scope_updatePermisos($query, $request)
  {
    $casosUsos = $this->_getCasosUsos($request['idPrivilegio'])->get();
    $casosUsosEditar = $request['casoUso'];
    foreach ($casosUsos as $casosUso) {
      $casosUso->update([
        'permiso' => $casosUsosEditar[$casosUso->id]
      ]);
      $casosUso->save();
    }
    return;
  }

  public function scope_deshabilitarPermisos($query, $idCaso)
  {
    $casosUsos = $this->_getCasosUsos($idCaso)->get();
    foreach ($casosUsos as $casosUso) {
      $casosUso->update([
        'permiso' => 'n'
      ]);
      $casosUso->save();
    }
    return;
  }
}
