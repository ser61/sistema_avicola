<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class AdminUsers extends Model
{
  protected $table = 'super_admin';
  protected $fillable = ['nombre', 'email','password','cod_Empresa','visible'];

  protected $hidden = [
    'password', 'remember_token',
  ];
}
