<?php

namespace sisAvicola\Models\Compra;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Insumo extends Model
{
  protected $table = 'insumo';
  private $tipoMateria = '1';
  private $tipoMedicina = '2';
  private $tipoSanitario = '3';

  protected $fillable = [
    'nombre',
    'descripcion',
    'cantidadTotal',
    'precio',
    'marca',
    'tipo', //para producto sanitario y medicamento
    'tipoInsumo',
    'idUnidadMedida',
    'idFactura',
    'idEmpresa',
    'visible'
  ];

  public function scope_allInsumos($query)
  {
    $insumos = $query->whereVisible('1')->where('idEmpresa', Auth::user()->idEmpresa);
    return $insumos;
  }

  public function scope_crearInsumo($query, $request, $idEmpresa)
  {
    if (!isset($request['tipo'])) {
      $request['tipo'] = null;
    }
    $request['tipoInsumo'] = $this->tipoMateria;
    $request['idFactura'] = '0';
    $request['idEmpresa'] = $idEmpresa;
    $request['visible'] = '1';
    $this->create($request->all());
  }

  public function scope_getInsumosNuevos($query, $idEmpresa)
  {
    $insumos = $query->whereVisible('1')->where('idEmpresa', $idEmpresa)->where('idFactura', '0');
    return $insumos;
  }
}
