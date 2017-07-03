<?php

namespace sisAvicola\Models\Compra;

use Illuminate\Database\Eloquent\Model;

class FacturaCompra extends Model
{
  protected $table = 'factura_compra';

  protected $fillable = [
    'fecha',
    'montoTotal',
    'idEmpleado',
    'idProveedor',
    'idEmpresa',
    'visible'
  ];

  public function scope_allFacturas($query, $idEmpresa)
  {
    $facturas = $query->whereVisible('1')->where('idEmpresa', $idEmpresa);
    return $facturas;
  }
}
