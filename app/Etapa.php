<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class Etapa extends Model
{
    protected $table = 'etapa';
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
