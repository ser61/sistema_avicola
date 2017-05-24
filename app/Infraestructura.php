<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class Infraestructura extends Model
{
    protected $table ='infraestructura';

    protected $primaryKey = 'id';

    public $timestamps=false;

    protected $fillable = [
        'capacidad',
        'estado',
        'tipo',
        'idGranja',
        'cantidadHuevosAlmacenados',
        'visible'
    ];

    protected $hidden = [

    ];
	// $request tiene la tupla con la cantidad de huevos almacenados q fueron ingresados
	// $id tiene el id
	public function scope_updateCantPlantaIncubacion($query, $cantHuevosO,$idParvada)
	{
		$cantHuevos = $query->select('infraestructura.cantidadHuevosAlmacenados as cantidadHuevosAlmacenados')
			->where('infraestructura.id',$idParvada)
			->where('infraestructura.visible','1')
			->where('infraestructura.estado','Disponible')
			->where('infraestructura.cantidadHuevosAlmacenados',0)
			->where('infraestructura.idEmpresa',Auth::user()->idEmpresa)
			->get()->first();
		$cantHuevos = $cantHuevos + $cantHuevosO;
		$query->where('id',$idParvada)
			->update(['cantidadHuevosAlmacenados' => $cantHuevos]);
		return;
	}

	public function scope_getPlantasIncubacionDisponibles($query)
	{
		$plantaDisponible = $query
			->select('infraestructura.id as idPlantaIncubacion','infraestructura.estado as estado','infraestructura.tipo as tipo')
			->where('tipo','Planta de Incubación')
			->where('infraestructura.visible','1')
			->where('infraestructura.estado','Disponible')
			->where('infraestructura.cantidadHuevosAlmacenados',0)
			->get();
		return $plantaDisponible;
	}
}
