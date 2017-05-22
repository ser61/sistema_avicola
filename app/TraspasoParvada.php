<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class TraspasoParvada extends Model
{
    protected $table = 'traspaso_parvada';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [

    	'fecha',
    	'cantidad',
    	'visible',
    	'idGalpon',
    	'idParvada',
    	'idEmpresa',
    	'visible',

    ];

    protected $guarded = [

    ];
}
