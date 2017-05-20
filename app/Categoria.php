<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
  protected $table ='categoria';

  protected $primaryKey = 'id';

  protected $fillable = [
    'nombre',
    'descripcion',
    'pesoIntervaloSuperior',
    'pesoIntervaloInferior',
    'idEmpresa',
    'visible'
  ];

  protected $hidden = [

  ];
}
