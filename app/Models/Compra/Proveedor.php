<?php

namespace sisAvicola\Models\Compra;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Proveedor extends Model
{
  protected $table = "persona";

  protected $fillable = [
    'ci',
    'nombre',
    'apellido',
    'direccion',
    'email',
    'nombreEmpresa',
    'tipo',
    'idEmpresa',
    'visible'
  ];

  public function scope_allProveedores($query)
  {
    $proveedores = $query->select('persona.id as id', 'persona.ci as ci', 'persona.nombre as nombre', 'persona.apellido as apellido',
      'persona.direccion as direccion', 'persona.email as email', 'persona.nombreEmpresa as empresa', "persona.tipo as tipo")
      ->where('persona.visible','1')->where('persona.tipo','p')->where('persona.idEmpresa',Auth::user()->idEmpresa);
    return $proveedores;
  }

  public function scope_createProveedor($query, $request)
  {
    $request['tipo'] = 'p';
    $request['idEmpresa'] = Auth::user()->idEmpresa;
    $request['visible'] = '1';
    $this->create($request->all());
  }
  
  public function scope_lastAdded($query)
  {
    $empleado = $query->where('tipo','p')->where('idEmpresa',Auth::user()->idEmpresa)->get()->last();
    return $empleado;
  }

  public function scope_updateProveedor($query, $request, $id)
  {
    $request['tipo'] = 'p';
    $request['idEmpresa'] = Auth::user()->idEmpresa;
    $request['visible'] = '1';
    $empleado = $this->find($id);
    $empleado->update($request->all());
    $empleado->save();
    return $empleado;
  }

  public function scope_eliminarPreveedor($query, $id)
  {
    $query->where('id',$id)->update(['visible' => '0']);
    return;
  }

  public function scope_buscarProveedores($query, $search)
  {
    $lista = $this->_allProveedores()
      ->where(function($query) use ($search){
          return $query->where('nombre','LIKE','%'.$search.'%')
            ->orWhere('persona.apellido','LIKE','%'.$search.'%')
            ->orWhere('persona.ci','LIKE','%'.$search.'%');
      });
    return $lista;
  }
}
