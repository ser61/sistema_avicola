<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleFactura extends Model
{
    protected $table ='Detalle_Factura';

    protected $primaryKey = 'id';

    public $timestamps=false;

    protected $fillable = [
        'idFactura',
        'idProducto',
        'cantidad',
        'visible'
    ];

    protected $hidden = [

    ];
}
