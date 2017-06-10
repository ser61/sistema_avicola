<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipo';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre',
        'capacidad',
        'idPlantaIncubacion',
        'tipo',
        'idEmpresa',
        'visible'
    ];
}
