<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table ='factura';

    protected $fillable = [
        'nit',
        'nombre',
        'fecha',
        'monto',
        'idCliente',
        'visible'
    ];

    protected $hidden = [

    ];
}
