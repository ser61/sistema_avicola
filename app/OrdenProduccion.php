<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class OrdenProduccion extends Model
{
    protected $table = 'orden_produccion';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [

    	'fecha',
    	'hora',
    	'edad',
    	'observacion',
    	'idEmpleado',
    	'idEmpresa',
    	'visible'

    ];

    protected $guarded = [

    ];
}
