<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class DetalleOrden extends Model
{
    protected $table = 'detalle_orden';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [

    	'idOrdenProduccion',
    	'idAlimento',
    	'peso',
    	'idEmpresa',
    	'visible',

    ];

    protected $guarded = [

    ];
}
