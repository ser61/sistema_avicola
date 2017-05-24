<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class Bateria extends Model
{
	protected $table ='bateria';

	protected $primaryKey = 'id';

	protected $fillable = [
		'capacidad',
		'idGalpon',
		'visible',
		'idEmpresa'
	];
}
