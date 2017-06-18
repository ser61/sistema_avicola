<?php

namespace sisAvicola;

use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\Exception;

class User extends Authenticatable
{
  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name', 'foto', 'email', 'password', 'estado', 'idEmpleado',
    'idEmpresa', 'tipoUser', 'privilegio', 'visible'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password', 'remember_token',
  ];

  public function scope_getUsuarios($query)
  {
    $idEmpresa = Auth::user()->idEmpresa;
    $usuarios = $query->select('users.id as id', 'users.name as name', 'p.foto as foto',
                                'users.email as email', 'users.estado as estado','c.nombre as cargo')
                      ->join('persona as p', 'p.id','=','users.idEmpleado')
                      ->join('cargo as c', 'c.id', '=', 'p.idCargo')
                      ->where('users.visible','1')->where('p.visible','1')->where('c.visible','1')
                      ->where('users.idEmpresa',$idEmpresa)->where('p.idEmpresa',$idEmpresa)->where('c.idEmpresa',$idEmpresa)
                      ->where('p.tipo','e')->where('users.tipoUser','u');
    return $usuarios;
  }

  public function setFotoAttribute($foto)
  {
      if (!empty($foto) && !Storage::disk('local')->exists($foto)) {
        $this->attributes['foto'] = Carbon::now()->second.$foto->getClientOriginalName();
        $name = Carbon::now()->second.$foto->getClientOriginalName();
        Storage::disk('local')->put($name, \File::get($foto));
      }else{
        $this->attributes['foto'] = $foto;
      }

  }

  public function scope_eliminar($query, $id)
  {
    $query->where('id', $id)->update(['visible' => '0']);
    return;
  }

  public function scope_getUsuariosBitacora($query)
  {
    $idEmpresa = Auth::user()->idEmpresa;
    $usuarios = $query->select('users.id as id', 'users.name as name', 'p.nombre as nombre', 'p.apellido as apellido', 'c.nombre as cargo')
                      ->join('persona as p', 'p.id', '=', 'users.idEmpleado')
                      ->join('cargo as c', 'c.id', '=', 'p.idCargo')
                      ->where('users.idEmpresa', $idEmpresa)->where('users.visible','1')
                      ->where('p.idEmpresa', $idEmpresa)->where('p.visible','1')->where('p.tipo','e')
                      ->where('c.idEmpresa', $idEmpresa)->where('c.visible','1');
    return $usuarios;
  }

  public function scope_buscarUsuarios($query, $search)
  {
    $lista = $this->_getUsuarios()->where('users.name','LIKE','%'.$search.'%')
      ->orWhere('c.nombre','LIKE','%'.$search.'%')
      ->orWhere('users.email','LIKE','%'.$search.'%');
    return $lista;
  }
}
