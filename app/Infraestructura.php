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
	public function scope_updateCantPlantaIncubacion($query,$idPlanta,$cantHuevosO)
	{
		/*$cantHuevos = $query->
			select('infraestructura.cantidadHuevosAlmacenados')
			//->where('infraestructura.idParvada',$idParvada)
			->where('infraestructura.id',$idPlanta)
			->where('infraestructura.visible','1')
			->where('infraestructura.tipo','Planta de Incubación')
			->where('infraestructura.estado','Disponible')
			->where('infraestructura.cantidadHuevosAlmacenados',0)
			->where('infraestructura.idEmpresa',Auth::user()->idEmpresa)
			->get()->first();*/

		$planta = $query->findOrFail($idPlanta);
			//$query->where('infraestuctura.id',$idPlanta)
		$c = $planta->cantidadHuevosAlmacenados;
		$c = $c + $cantHuevosO;
		$planta->cantidadHuevosAlmacenados = $c;
		//$planta->update(['cantidadHuevosAlmacenados' => $cantHuevos]);
		$planta->update();
		return;
	}

	public function scope_getPlantasIncubacionDisponibles($query)
	{
		$plantasDisponible = $query
			->select('infraestructura.id as idPlantaIncubacion','infraestructura.estado as estado','infraestructura.tipo as tipo')
			->where('infraestructura.tipo','Planta de Incubacion')
			->where('infraestructura.visible','1')
			->where('infraestructura.estado','Disponible')
			->where('infraestructura.cantidadHuevosAlmacenados',0)
			->get();
		return $plantasDisponible;
	}
}
