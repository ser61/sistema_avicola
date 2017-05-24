<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class IngresoHuevoIncubable extends Model
{
	protected $table = 'ingreso_huevo_incubable';

	protected $primaryKey = 'id';

	protected $fillable = [
		'idReporteDiario',
		'idPlantaIncubacion',
		'idEmpresa',
		'visible'
	];

	public function scope_addIngresoHuevoIncubable($query,$request) {
		$request['visible'] = '1';
		$request['idEmpresa'] = Auth::users()->idEmpresa;
		$this->create($request->all());
		return;
	}
}
