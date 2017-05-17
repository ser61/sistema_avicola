<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class UserEmpleado extends Model
{
  protected $table ='users';

  protected $fillable = [
    'name', 'foto', 'email', 'password', 'estado', 'idEmpleado',
    'idEmpresa', 'tipoUser', 'visible'
  ];

  protected $hidden = [
    'password', 'remember_token',
  ];
}
