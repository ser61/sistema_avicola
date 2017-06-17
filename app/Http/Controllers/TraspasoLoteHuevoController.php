<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use sisAvicola\Http\Requests\TraspasoLoteHuevoFormRequest;
use DB;
use sisAvicola\TraspasoLoteHuevo;
use sisAvicola\LoteHuevoIncubable;
use sisAvicola\Etapa;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use sisAvicola\Models\seguridad\Accion; 

class TraspasoLoteHuevoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request){
            Accion::_crearAccion('Ingreso a la pagina de Traspaso de lote de Huevo', Auth::user()->id, Auth::user()->idEmpresa);
            $query = trim($request->get('searchText'));
            $traspasolotes=DB::table('traspaso_huevo as th')
            ->join('etapa_incubacion as e','e.id','=','th.idEtapaIncubacion')
            ->select('th.id','th.idLoteHuevoIncubable','th.idEtapaIncubacion','th.cantidad','th.fecha','th.idEquipo','e.nombre')
            ->where('th.id','LIKE','%'.$query.'%')
            //->where('tipo','=','Engorde')
            ->orderby('idLoteHuevoIncubable','asc')
            ->paginate(10);
           $cantidad=DB::table('traspaso_huevo')
            //->where('tipo','=','Engorde')
            //->orderby('idParvada','asc')
            ->paginate(7);
            return view('proceso.traspasolotehuevo.index',["cantidad"=>$cantidad,"traspasolotes"=>$traspasolotes,"searchText"=>$query]);   
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lotes=DB::table('lote_huevo_incubable')->get();
        $etapas=DB::table('etapa_incubacion')
        ->where('nombre','=','Etapa de Nacedora')
        ->get();
        $equipos=DB::table('equipo')
        ->where('tipo','=','Nacedora')
        ->get();
        return view('proceso.traspasolotehuevo.create',["lotes"=>$lotes,"etapas"=>$etapas,"equipos"=>$equipos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TraspasoLoteHuevoFormRequest $request)
    {
        
        $cant=DB::table('traspaso_huevo')
        ->where('idLoteHuevoIncubable','=',$request->get('idlotehuevoincubable'))
        ->where('visible','=','1')
        ->get();
        if(count($cant)==2){
         return redirect('proceso/traspasolotehuevo')->with('msj','Error al Hacer Traspaso del Lote de Huevo: "'.$request['idlotehuevoincubable'].'" Ya no se Puede Hacer mas Traspaso');
        }

        $traspaso=new TraspasoLoteHuevo;

        $lote=LoteHuevoIncubable::findOrFail($request->get('idlotehuevoincubable'));
        $traspaso->cantidad=$lote->cantidad;

        $traspaso->idLoteHuevoIncubable=$request->get('idlotehuevoincubable');
        $traspaso->idEtapaIncubacion=$request->get('idetapaincubacion');

        $my_time = Carbon::now('America/La_Paz');
        $traspaso->fecha=$my_time -> toDateTimeString();

        $traspaso->idEquipo=$request->get('idequipo');
        $traspaso->visible='1';
        $traspaso->idEmpresa=Auth::user()->idEmpresa;
        $traspaso->save();

        Accion::_crearAccionOnTable('Creo un nuevo Traspaso de lote de Huevo', 'traspaso lote', $traspaso->id, Auth::user()->id, Auth::user()->idEmpresa);

        return redirect('proceso/traspasolotehuevo')->with('msj','El Traspaso :"'.$traspaso->id.'" se creo exitósamente.');
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
