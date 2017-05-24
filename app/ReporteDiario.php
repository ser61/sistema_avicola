<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class ReporteDiario extends Model
{
	protected $table = 'reporte_diario';

	protected $primaryKey = 'id';

	protected $fillable = [
		'fecha',
		'mortalidad',
		'cantidadHuevos',
		'pesoPromedio',
		'observaciones',
		'idDietaAlimenticia',
		'idEmpleado',
		'idEtapa',
		'idParvada',
		'idEmpresa',
		'visible'
	];


	public function scope_getReporteDiario($query, $searchText){
		$reportes =$query
			->join('dieta_alimenticia as d','d.id','=','reporte_diario.idDietaAlimenticia')
			->join('persona as pe','pe.id','=','reporte_diario.idEmpleado')
			->join('etapa as et','et.id','=','reporte_diario.idEtapa')
			->join('parvada as p','p.id','=','reporte_diario.idParvada')

			->select('reporte_diario.id as idReporte','reporte_diario.fecha as fecha',
				'reporte_diario.mortalidad as mortalidad','reporte_diario.cantidadHuevos as cantidadHuevos',
				'reporte_diario.pesoPromedio as pesoPromedio','reporte_diario.observaciones as observaciones','d.cantidadAgua as cantidadAgua',
				'et.nombre as etapa','reporte_diario.idParvada as idParvada','p.cantidadPollos as cantidadPollos',
				'reporte_diario.idEmpleado as idEmpleado','pe.nombre','pe.apellido','reporte_diario.visible')
			->where('reporte_diario.id','LIKE','%'.$searchText.'%')
			->where('reporte_diario.visible','LIKE','1')
			->orderBy('reporte_diario.id','desc');
		return $reportes;
	}

	public function scope_addReporteDiario($query, $request,$etapas,$parvadas)
	{
		$request['visible'] = '1';
		$request['idEmpresa'] = Auth::user()->idEmpresa;
		//$request['idEmpresa'] = '456789';
		$request['idDietaAlimenticia'] = '1';
		if($request['idParvada'] == $this->id && $request['tipoParvada'] == 'Reproductoras') {
			Infraestructura::_updateCantPlantaIncubacion($request['cantidadHuevos'],$request['idPlanta']);
		}
		$this->create($request->all());
		return;
	}

}
