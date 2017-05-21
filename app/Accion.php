<?php

namespace sisAvicola;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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
}
