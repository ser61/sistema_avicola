<?php

namespace sisAvicola\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use sisAvicola\DetalleMedicacion;
use sisAvicola\Models\Compra\Insumo;
use sisAvicola\ReporteMedicacion;
use DB;
use Illuminate\Support\Facades\Redirect;

class ReporteMedicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $searchText = trim($request['searchText']);
        $reportes = ReporteMedicacion::_getReporteMedicacion($searchText)->paginate(4);
        return view ('reportes.reporte_medicacion.index',compact('reportes','searchText'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleados = DB::table('Persona as p')
            ->select('p.id','p.nombre','p.apellido')->where('p.tipo','=','e')->get();
        $parvadas = DB::table('Parvada as pa')->get();
        $lote_huevo_incubables = DB::table('lote_huevo_incubable')->get();
        $articulos = DB::table('insumo as i')
            ->select('i.id','i.nombre','i.descripcion','i.cantidadTotal','i.tipo as tipoMedicamento')
            ->where('i.tipoInsumo','=','Medicamento')->get();
        return view('reportes.reporte_medicacion.create',["empleados"=>$empleados,"parvadas"=>$parvadas,"lote_huevo_incubables"=>$lote_huevo_incubables,"articulos"=>$articulos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //try{
        //	DB::beginTransaction();
        $reporte = new ReporteMedicacion();
        $mytime = Carbon::now('America/La_paz');
        $reporte->fecha =$mytime->toDateTimeString();
        $reporte->cantidadHuevos = $request->get('idParvada');
        $reporte->pesoPromedio = $request->get('idLote');
        $reporte->idEmpleado = $request->get('idEmpleado');
        $reporte->idEmpresa = Auth::user()->idEmpresa;
        $reporte->visible = '1';
        $reporte->save();
        $idPar = $request->get('idParvada');
        $mortalidad = $request->get('mortalidad');
        //DB::statement('call upd_mortalidad_parvada('.$idPar.','.$mortalidad.')');

        //Arrays:
        $idarticulo=$request->get('idarticulo');
        $cantidad = $request->get('cantidad');
        $dosis = $request->get('dosis');
        $aplicacion = $request->get('aplicacion');
        $cont = 0;

        while ($cont < count($idarticulo)) {
            $detalle = new DetalleMedicacion();
            $detalle->idReporteMedicacion = $reporte->id;
            $detalle->idMedicamento=$idarticulo[$cont];
            $detalle->dosis=$dosis[$cont];
            $detalle->viaDeAplicacion=$aplicacion[$cont];
            $detalle->idEmpresa = Auth::user()->idEmpresa;
            $detalle->visible='1';
            $detalle->save();
            $cont = $cont + 1;
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
        $reporte = ReporteMedicacion::findOrFail($id);
        $parvada = Parvada::findOrFail($reporte->idParvada);
        $empleado = Persona::findOrFail($reporte->idEmpleado);
        $etapa = Etapa::findOrFail($reporte->idLoteHuevoIncubable);
        $detalles = DB::table('detalle_medicacion as d')
            ->join('insumo as i','i.id','=','d.idMedicamento')
            ->where('i.tipoInsumo','=','Medicamento')
            ->where('d.idReporteMedicacion','=',$id)
            ->get();
        return view('reportes.reporte_diario.show',["reporte"=>$reporte,"parvada"=>$parvada,"empleado"=>$empleado,"etapa"=>$etapa,"planta"=>$planta]);
    }
}
