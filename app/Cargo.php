<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cargo extends Model
{
  protected $table = 'cargo';

  protected $fillable = ['nombre', 'descripcion', 'visible'];

  public function scope_allCargos($query)
  {
    //$cargos = $query->where('visible',1);
    $cargos = $query->where('visible',1)
                    ->select('cargo.id as id',
                      'cargo.nombre as nombre',
                      'cargo.descripcion as descripcion',
                      DB::raw(count(Persona::_nroEmpleados('cargo.id')->get()).' as nro'));
    return $cargos;
  }

  public function scope_eliminarCargo($query, $id)
  {
    $query->where('id',$id)->update(['visible' => '0']);
    $cargo = $this->find($id);
    return $cargo;
  }

}
