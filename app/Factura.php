<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
  protected $table ='factura';

  protected $primaryKey = 'id';

  protected $fillable = [
    'nit',
    'nombre',
    'fecha',
    'montoTotal',
    'idCliente',
    'idEmpleado',
    'idEmpresa',
    'estado'
  ];

  public function scope_getAllFactura($query, $searchText){
    $text = trim($searchText);
    $factura = $query->join('persona as cliente', 'cliente.id', '=', 'factura.idCliente')
      ->join('persona as empleado', 'empleado.id', '=', 'factura.idEmpleado')
      ->select('factura.id','factura.nombre','factura.nit','factura.fecha','factura.montoTotal','factura.estado','empleado.nombre as nombEmp', 'cliente.nombre as nombCli')
      ->where('factura.id','LIKE','%'.$text.'%')
      ->where('factura.idEmpresa','=','123456')
      ->orderBy('factura.id');
    return $factura;
  }
}
