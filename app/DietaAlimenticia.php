<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class DietaAlimenticia extends Model
{
	protected $table = 'dieta_alimenticia';

	protected $primaryKey = 'id';

	protected $fillable = [
		'cantidadAgua',
		'idEmpresa',
		'visible'
	];
}
