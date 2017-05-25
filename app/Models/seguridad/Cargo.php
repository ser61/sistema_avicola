<?php

namespace sisAvicola\Models\seguridad;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Cargo extends Model
{
  protected $table = 'cargo';

  protected $fillable = ['id','nombre', 'descripcion', 'idEmpresa','visible'];

  public function scope_allCargos($query)
  {
    $cargos = $query->where('visible','1')->where('idEmpresa',Auth::user()->idEmpresa)
                    ->select('cargo.id as id',
                      'cargo.nombre as nombre',
                      'cargo.descripcion as descripcion',
                      DB::raw('(select nroEmpleados(id,'.Auth::user()->idEmpresa.')) as nro'));
    return $cargos;
  }

  public function scope_eliminarCargo($query, $id)
  {
    $query->where('id',$id)->update(['visible' => '0']);
    $cargo = $this->find($id);
    return $cargo;
  }

  public function scope_insertCargo($query, $request)
  {
    $request['visible'] = '1';
    $request['idEmpresa'] = Auth::user()->idEmpresa;
    $this->create($request->all());
    return;
  }

  public function scope_updateCargo($query, $request, $id)
  {
    $cargo = $this->find($id);
    $name = $cargo->nombre;
    $request['visible'] = '1';
    $cargo->update($request->all());
    $cargo->save();
    return $name;
  }

  public function scope_getLastAdded($query)
  {
    $cargo = $query->where('idEmpresa',Auth::user()->idEmpresa)
                  ->where('visible', '1')->get()->last();
    return $cargo;
  }
}
