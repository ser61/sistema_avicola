<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
  protected $table = 'cargo';

  protected $fillable = ['nombre', 'descripcion', 'visible'];

  public function scope_allCargos($query)
  {
    $cargos = $query->where('visible',1);
    return $cargos;
  }

  public function scope_eliminarCargo($query, $id)
  {
    $query->where('id',$id)->update(['visible' => '0']);
    $cargo = $this->find($id);
    return $cargo;
  }
}
