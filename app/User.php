<?php

namespace sisAvicola;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name', 'email', 'password', 'estado', 'idEmpleado',
    'idEmpresa', 'tipoUser', 'visible'
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
  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password', 'remember_token',
  ];
}
