<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use sisAvicola\Http\Requests\LoteHuevoIncubableFormRequest;
use sisAvicola\Http\Requests\TraspasoLoteHuevoFormRequest;
use sisAvicola\TraspasoLoteHuevo;
use DB;
use sisAvicola\LoteHuevoIncubable;
use sisAvicola\Infraestructura;
use Carbon\Carbon;

class LoteHuevoIncubableController extends Controller
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
            $lotes=DB::table('lote_huevo_incubable')
            ->where('id','LIKE','%'.$query.'%')
            ->paginate(7);
            $cantidad=DB::table('lote_huevo_incubable')
            ->paginate(7);
            return view('proceso.lotehuevoincubable.index',["cantidad"=>$cantidad,"lotes"=>$lotes,"searchText"=>$query]);   
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $plantaincubacion = DB::table('infraestructura')
        ->where('estado','=','Disponible')
        ->where('tipo','=','Planta de Incubacion')
        ->where('visible','=','1')
        ->get();
        $equipos = DB::table('equipo')
        ->where('tipo','=','Incubadora')
        ->where('visible','=','1')
        ->get();
        return view('proceso.lotehuevoincubable.create',['plantaincubacion'=>$plantaincubacion,'equipos'=>$equipos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoteHuevoIncubableFormRequest $request, TraspasoLoteHuevoFormRequest $requestt)
    {
        $lote=new LoteHuevoIncubable;
        $planta=Infraestructura::findOrFail($request->get('idplantaincubacion'));
        $lote->cantidad=$planta->cantidadHuevosAlmacenados;
        $lote->idPlantaIncubacion=$request->get('idplantaincubacion');
        $lote->visible='Activo';
        $lote->idEmpresa=123456;
        $lote->save();

        $traspaso = new TraspasoLoteHuevo;
        $traspaso->idLoteHuevoIncubable=$lote->id;
        $traspaso->idEtapaIncubacion='1';
        $traspaso->cantidad=$lote->cantidad;
        $my_time = Carbon::now('America/La_Paz');
        $traspaso->fecha=$my_time -> toDateTimeString();
        $traspaso->idEquipo=$requestt->get('idequipo');
        $traspaso->visible='1';
        $traspaso->idEmpresa=123456;
        $traspaso->save();


        return Redirect::to('proceso/lotehuevoincubable');
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
        $lote=LoteHuevoIncubable::findOrFail($id);
        $lote->visible='Inactivo';
        $lote->update();

        return Redirect::to('proceso/lotehuevoincubable');
    }
}
