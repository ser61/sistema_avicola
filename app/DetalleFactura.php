<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleFactura extends Model
{
    protected $table ='Detalle_Factura';

    protected $fillable = [
        'idFactura',
        'idProducto',
        'cantidad',
        'visible'
    ];

    protected $hidden = [

    ];
}
