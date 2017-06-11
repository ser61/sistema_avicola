<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class DetalleProducto extends Model
{
    protected $table = 'detalle_producto';

    protected $primaryKey = 'id';

    protected $fillable = [
        'idProductoSanitario',
        'idProcesoSanitario',
        'cantidad',
        'idEmpresa',
        'visible'
    ];
}
