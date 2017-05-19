<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
  protected $table = 'modulo';

  protected $fillable = ['nombre', 'idEmpresa', 'visible'];

}
