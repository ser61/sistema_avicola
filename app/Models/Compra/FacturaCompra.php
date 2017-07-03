<?php

namespace sisAvicola\Models\Compra;

use Carbon\Carbon;
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

  public function scope_crearFactura($query, $request, $idEmpleado, $total, $idEmpresa)
  {
    $my_time = Carbon::now('America/La_Paz');
    $request['fecha'] = $my_time -> toDateTimeString();
    $request['montoTotal'] = $total;
    $request['idEmpleado'] = $idEmpleado;
    $request['idEmpresa'] = $idEmpresa;
    $request['visible'] = '1';
    $this->create($request->all());
  }

  public function scope_getLastAdded($query, $idEmpresa)
  {
    $factura = $query->where('idEmpresa',$idEmpresa)->whereVisible('1')->get()->last();
    return $factura;
  }
}
