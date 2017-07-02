<?php

namespace sisAvicola\Models\Compra;

use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    protected $table = 'insumo';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre',
        'descripcion',
        'cantidadTotal',
        'tipo',
        'tipoInsumo',
        'idUnidadMedida',
        'idEmpresa',
        'visible'
    ];
}
