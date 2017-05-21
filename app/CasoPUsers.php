<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

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
}
