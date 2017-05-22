<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class Parvada extends Model
{
    protected $table = 'parvada';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [

    	'cantidadPollos',
    	'sexo',
    	'edad',
    	'pesoPromedio',
    	'caracteristicas',
    	'productividad',
    	'tipo',
    	'mortalidad',
    	'idEmpresa',
    	'visible'

    ];

    protected $guarded = [

    ];
}
