<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use sisAvicola\DietaAlimenticia;
use sisAvicola\Etapa;
use sisAvicola\Infraestructura;
use sisAvicola\Parvada;
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
	    $etapa = Etapa::findOrFail($request['idEtapa']);
	    $parvada = Parvada::findOrFail($request['idParvada']);
	    ReporteDiario::_addReporteDiario($request,$etapa,$parvada);
	    return redirect('reportes/reporte_diario')->with('msj','El reporte diario: # '.$request['idReporte'].' se creo exitósamente.');
	    //return Redirect::to("reportes/reporte_diario");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
