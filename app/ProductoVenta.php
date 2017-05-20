<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class ProductoVenta extends Model
{
  protected $table ='producto_venta';

  protected $primaryKey = 'id';

  protected $fillable = [
    'nombre',
    'imagen',
    'stock',
    'precioUnitario',
    'idCategoria',
    'edad',
    'sexo',
    'pesoPromedio',
    'productividad',
    'caracteristicas',
    'idTipo',
    'tipo',
    'idEmpresa',
    'visible'
  ];
}
