<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class LoteHuevoIncubable extends Model
{
    protected $table = 'lote_huevo_incubable';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [

    	'cantidad',
        'tipoLote',
    	'idPlantaIncubacion',
    	'idEmpresa',
    	'visible'

    ];

    protected $guarded = [

    ];
}
