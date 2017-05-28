<?php

namespace sisAvicola\Models\seguridad;

use Illuminate\Database\Eloquent\Model;

class Backup extends Model
{
  protected $table = 'backup';

  protected $fillable = ['nombre', 'fecha', 'path', 'idEmpresa', 'visible'];

  public $timestamps = false;
}
