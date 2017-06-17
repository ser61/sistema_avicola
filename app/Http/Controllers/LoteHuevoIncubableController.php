<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use sisAvicola\Http\Requests\LoteHuevoIncubableFormRequest;
use sisAvicola\Http\Requests\TraspasoLoteHuevoFormRequest;
use sisAvicola\TraspasoLoteHuevo;
use DB;
use sisAvicola\TraspasoParvada;
use sisAvicola\LoteHuevoIncubable;
use sisAvicola\Infraestructura;
use Carbon\Carbon;
use sisAvicola\Parvada;
use Illuminate\Support\Facades\Auth;
use sisAvicola\Models\seguridad\Accion;

class LoteHuevoIncubableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        Accion::_crearAccion('Ingreso a la pagina de Lote de Huevo incubables', Auth::user()->id, Auth::user()->idEmpresa);
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
        $lote->tipoLote=$request->get('tipolote');
        $lote->idPlantaIncubacion=$request->get('idplantaincubacion');
        $lote->visible='Activo';
        $lote->idEmpresa=Auth::user()->idEmpresa;
        $lote->save();

        $traspaso = new TraspasoLoteHuevo;
        $traspaso->idLoteHuevoIncubable=$lote->id;
        $traspaso->idEtapaIncubacion='1';
        $traspaso->cantidad=$lote->cantidad;
        $my_time = Carbon::now('America/La_Paz');
        $traspaso->fecha=$my_time -> toDateTimeString();
        $traspaso->idEquipo=$requestt->get('idequipo');
        $traspaso->visible='1';
        $traspaso->idEmpresa=Auth::user()->idEmpresa;
        $traspaso->save();

        Accion::_crearAccionOnTable('Creo un nuevo lote de huevo', 'lote huevo', $lote->id, Auth::user()->id, Auth::user()->idEmpresa);
        return redirect('proceso/lotehuevoincubable')->with('msj','El Lote :"'.$lote->id.'" se creo exitósamente.');
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
        if($lote->visible=='Inactivo'){
            return redirect('proceso/lotehuevoincubable')->with('msj','Error al Finalizar El Lote :"'.$id.'", Este Lote ya Fue Finalizada Anteriormente.');            
        }
        $cant=DB::table('traspaso_huevo')
        ->where('idLoteHuevoIncubable','=',$id)
        ->where('visible','=','1')
        ->get();
        if(count($cant)==1){
         return redirect('proceso/lotehuevoincubable')->with('msj','Error al Finalizar El Lote :"'.$id.'", Este Lote aun sigue en Etapa de Incubacion, Dirijase a Traspaso de Lote de Huevos');
        }

        $lote->visible='Inactivo';
        $lote->update();

        $parvada=new Parvada;
        $parvada->cantidadPollos=$lote->cantidad;
        $parvada->sexo='Machos';
        $parvada->edad=5;
        $parvada->pesoPromedio=5.5;
        $parvada->caracteristicas='Proviniente de Nacedoras';
        $parvada->productividad=0;
        $parvada->tipo=$lote->tipoLote;
        $parvada->mortalidad=0;
        $parvada->visible='Activo';
        $parvada->idEmpresa=Auth::user()->idEmpresa;
        $parvada->save();

        $traspaso=new TraspasoParvada;
        $my_time = Carbon::now('America/La_Paz');
        $traspaso->fecha = $my_time -> toDateTimeString();
        $traspaso->cantidad=$lote->cantidad;
        $traspaso->idParvada=$parvada->id;
        $etapa=DB::table('etapa')
        ->where('nombre','=','Etapa de Crianza')
        ->select('id')
        ->first();
        $traspaso->idEtapa=$etapa->id;
        $traspaso->visible='1';
        $traspaso->idEmpresa=Auth::user()->idEmpresa;
        $traspaso->save();

        return redirect('proceso/lotehuevoincubable')->with('msj','El Lote :"'.$id.'" Fue Finalizada exitósamente.');
    }
}
