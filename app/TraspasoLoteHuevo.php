<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class TraspasoLoteHuevo extends Model
{
    protected $table = 'traspaso_huevo';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [

    	'idLoteHuevoIncubable',
    	'idEtapaIncubacion',
    	'cantidad',
    	'fecha',
    	'idEquipo',
    	'idEmpresa',
    	'visible',

    ];

    protected $guarded = [

    ];
}
