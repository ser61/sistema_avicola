<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class Infraestructura extends Model
{
    protected $table ='infraestructura';

    protected $primaryKey = 'id';

    public $timestamps=false;

    protected $fillable = [
        'capacidad',
        'estado',
        'tipo',
        'idGranja',
        'cantidadHuevosAlmacenados',
        'visible'
    ];

    protected $hidden = [

    ];
}
