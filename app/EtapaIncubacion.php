<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class EtapaIncubacion extends Model
{
    protected $table = 'etapa_incubacion';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [

    	'nombre',
    	'idEmpresa',
    	'visible',

    ];

    protected $guarded = [

    ];
}
