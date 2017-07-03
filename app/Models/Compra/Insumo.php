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
    'marca',
    'tipo', //para producto sanitario y medicamento
    'tipoInsumo',
    'idUnidadMedida',
    'idEmpresa',
    'visible'
  ];

  public function scope_allInsumos($query)
  {
    $insumos = $query->whereVisible('1')->where('idEmpresa', Auth::user()->idEmpresa);
    return $insumos;
  }
}
