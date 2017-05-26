<?php

namespace sisAvicola\Models\seguridad;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use sisAvicola\Models\seguridad\Bitacora;

class Accion extends Model
{
  protected $table = 'accion';

  protected $fillable = ['fecha', 'hora', 'accion', 'tabla', 'idTupla', 'idBitacora', 'idEmpresa', 'visible'];

  public function scope_crearAccion($query, $accion, $idUser, $idEmpresa)
  {
    $bitacora = Bitacora::_findByIdUser($idUser, Auth::user()->idEmpresa)->get()->last();
    $this->create([
      'fecha' => Carbon::now()->toDateString(),
      'hora' => Carbon::now()->toTimeString(),
      'accion' => $accion,
      'idBitacora' => $bitacora->id,
      'idEmpresa' => $idEmpresa,
      'visible' => '1'
    ]);
  }

  public function scope_crearAccionOnTable($query, $accion, $tabla, $idTupla, $idUser, $idEmpresa)
  {
    $bitacora = Bitacora::_findByIdUser($idUser, Auth::user()->idEmpresa)->get()->last();
    $this->create([
      'fecha' => Carbon::now()->toDateString(),
      'hora' => Carbon::now()->toTimeString(),
      'accion' => $accion,
      'tabla' => $tabla,
      'idTupla' => $idTupla,
      'idBitacora' => $bitacora->id,
      'idEmpresa' => $idEmpresa,
      'visible' => '1'
    ]);
  }

  public function scope_getAcciones($query, $idBitacora, $idEmpresa)
  {
    $acciones = $query->where('idEmpresa', $idEmpresa)->where('visible', '1')
      ->where('idBitacora', $idBitacora);
    return $acciones;
  }
}
