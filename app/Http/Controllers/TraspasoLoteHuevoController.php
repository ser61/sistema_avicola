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
            $query = trim($request->get('searchText'));
            $traspasolotes=DB::table('traspaso_huevo')
            ->where('id','LIKE','%'.$query.'%')
            //->where('tipo','=','Engorde')
            ->orderby('idLoteHuevoIncubable','asc')
            ->paginate(7);
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



        return Redirect::to('proceso/traspasolotehuevo');
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
