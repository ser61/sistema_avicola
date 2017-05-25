<?php

namespace sisAvicola\Models\seguridad;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
  protected $table = 'modulo';

  protected $fillable = ['nombre', 'idEmpresa', 'visible'];

}
