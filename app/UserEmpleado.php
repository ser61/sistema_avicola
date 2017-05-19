<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class UserEmpleado extends Model
{
  protected $table ='users';

  protected $fillable = [
    'name', 'foto', 'email', 'password', 'estado', 'idEmpleado',
    'idEmpresa', 'tipoUser', 'privilegio', 'visible'
  ];

  protected $hidden = [
    'password', 'remember_token',
  ];

  public function scope_createUsuarioEmpleado($query, $request)
  {
    $persona = Persona::find($request['idEmpleado']);
    $request['visible'] = '1';
    $request['password'] = bcrypt($request['password']);
    $request['estado'] = '0';
    $request['idEmpresa'] = Auth::user()->idEmpresa;
    $request['tipoUser'] = 'u';
    $request['privilegio'] = '0';
    $request['foto'] = $persona['foto'];
    $this->create($request->all());
    return;
  }

  public function scope_updateUsuarioEmpleado($query, $request, $id)
  {
    $usuraio = $this->find($id);
    if ($request['password'] == '') {
      $request['password'] = $usuraio['password'];
    }else{
      $request['password'] = bcrypt($request['password']);
    }
    $usuraio->update($request->all());
    $usuraio->save();
    return;
  }
}
