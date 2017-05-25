<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use sisAvicola\DietaAlimenticia;
use sisAvicola\Etapa;
use sisAvicola\Infraestructura;
use sisAvicola\IngresoHuevoIncubable;
use sisAvicola\Parvada;
use sisAvicola\Persona;
use sisAvicola\ReporteDiario;
use DB;

class ReporteDiarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
		$searchText = trim($request['searchText']);
	    $reportes = ReporteDiario::_getReporteDiario($searchText)->paginate(4);
	    return view ('reportes.reporte_diario.index',compact('reportes','searchText'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	    /*$empleados = Persona::_allEmpleados()->pluck('nombre','apellido','id');
	    $etapas = Etapa::_allEtapas()->pluck('nombre','id');
	    $parvadas = Parvada::_allParvadas()->pluck('id');*/

	    $empleados = DB::table('Persona as p')
		    ->select('p.id as idEmpleado','p.nombre','p.apellido')->where('p.tipo','=','e')->get();
	    $etapas = DB::table('Etapa as e')
		    ->select('e.id as idEtapa','e.nombre')->get();
	    $parvadas = DB::table('Parvada as pa')
		    ->select('pa.id as idParvada','pa.tipo as tipoParvada','pa.created_at')->get();
	    //return view('reportes.reporte_diario.create',compact('empleados','etapas','parvadas'));
	    $plantas = Infraestructura::_getPlantasIncubacionDisponibles();
	    return view('reportes.reporte_diario.create',["empleados"=>$empleados,"etapas"=>$etapas,"parvadas"=>$parvadas,"plantas"=>$plantas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	    //$etapa = Etapa::findOrFail($request['idEtapa']);
	    //$parvada = Parvada::findOrFail($request['idParvada']);
	    //ReporteDiario::_addReporteDiario($request);
		//try{
		//	DB::beginTransaction();
			$reporte = new ReporteDiario();
			//$reporte->id = $request->get('idReporteDiario');
			$reporte->fecha = $request->get('fecha');
			$reporte->mortalidad = $request->get('mortalidad');
			$reporte->cantidadHuevos = $request->get('cantidadHuevos');
			$reporte->pesoPromedio = $request->get('pesoPromedio');
			$reporte->observaciones = $request->get('observaciones');
			$reporte->idDietaAlimenticia = '1';
			$reporte->idEmpleado = $request->get('idEmpleado');
			$reporte->idEtapa = $request->get('idEtapa');
			$reporte->idParvada = $request->get('idParvada');
			$reporte->idEmpresa = Auth::user()->idEmpresa;
			$reporte->visible = '1';
			$reporte->save();

			$parvada = Parvada::findOrFail($request->get('idParvada'));

			if($parvada->tipo == "Reproductoras" && $request->get('idEtapa') == '3') {

				$planta = Infraestructura::findOrFail($request->get('idPlantaIncubacion'));
				$cantH = $planta->cantidadHuevosAlmacenados;
				$cantH = $cantH + $request->get('cantidadHuevos');
				$planta->cantidadHuevosAlmacenados = $cantH;
				$planta->update();

				$ingreso = new IngresoHuevoIncubable();
				//$ingreso->idReporteDiario = $request->get('idReporteDiario');
				$ingreso->idReporteDiario = $reporte->id;
				$ingreso->idPlantaIncubacion = $request->get('idPlantaIncubacion');
				$ingreso->visible = '1';
				$ingreso->idEmpresa = Auth::user()->idEmpresa;
				$ingreso->save();
			}

		/*}catch (Exception $e) {
			DB::rollback();
		}*/
	    return redirect('reportes/reporte_diario')->with('msj','El reporte diario: # '.$request['id'].' se creo exitósamente.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
	    $reporte = ReporteDiario::findOrFail($id);
	    $parvada = Parvada::findOrFail($reporte->idParvada);
	    $empleado = Persona::findOrFail($reporte->idEmpleado);
	    $etapa = Etapa::findOrFail($reporte->idEtapa);
	    $planta = DB::table('ingreso_huevo_incubable as ing')
	        ->join('infraestructura as i','i.id','ing.idPlantaIncubacion')
			->select('i.id as idPlantaIncubacion')
			->where('ing.idReporteDiario',$id)
		    ->get()->first();
        return view('reportes.reporte_diario.show',["reporte"=>$reporte,"parvada"=>$parvada,"empleado"=>$empleado,"etapa"=>$etapa,"planta"=>$planta]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
