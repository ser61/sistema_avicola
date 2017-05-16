<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Telefono extends Model
{
    protected $table ='Telefono';

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
}
