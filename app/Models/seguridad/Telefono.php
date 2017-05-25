<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Telefono extends Model
{
    protected $table ='telefono';

    protected $fillable = [
        'numero',
        'idPersona',
        'idEmpresa',
        'visible'
    ];

  public function scope_getTelefonos($query, $id)
  {
    $telefonos = $query->where('idPersona', $id)
                        ->where('idEmpresa',Auth::user()->idEmpresa)
                        ->where('visible', '1');
    return $telefonos;
  }

  public function scope_eliminar($query, $id)
  {
    $query->where('id',$id)->update(['visible' => '0']);
    return;
  }

  public function scope_createTelefonos($query, $telefonos, $empleado)
  {
    if ($telefonos != null) {
      $cont = 0;
      while ($cont < count($telefonos)) {
        $this->create([
          'numero' => $telefonos[$cont],
          'idPersona' => $empleado->id,
          'idEmpresa' => Auth::user()->idEmpresa,
          'visible' => '1'
        ]);
        $cont = $cont + 1;
      }
    }
    return;
  }

  public function scope_updateTelefonos($query, $telefonoEditar, $empleado, $id)
  {
    if ($telefonoEditar != null) {
      $telefonosEmpleado = $this->_getTelefonos($id)->get();
      $cont = 0;
      foreach ($telefonosEmpleado as $telefonoEmpleado) {
        $telefonoEmpleado->update([
          'numero' => $telefonoEditar[$cont],
          'idPersona' => $empleado->id,
          'idEmpresa' => Auth::user()->idEmpresa,
          'visible' => '1'
        ]);
        $telefonoEmpleado->save();
        $cont = $cont + 1;
      }
    }
  }
}
