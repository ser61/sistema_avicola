<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use sisAvicola\Http\Requests\TraspasoParvadaFormRequest;
use DB;
use sisAvicola\TraspasoParvada;
use sisAvicola\Parvada;
use sisAvicola\Etapa;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use sisAvicola\Models\seguridad\Accion;

class TraspasoParvadaController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        Accion::_crearAccion('Ingreso a la pagina de Traspaso de Parvada', Auth::user()->id, Auth::user()->idEmpresa);
        if($request){
            $query = trim($request->get('searchText'));
            $traspasoparvadas=DB::table('traspaso_parvada as tp')
            ->join('etapa as e','e.id','=','tp.idEtapa')
            ->select('tp.id','tp.fecha','tp.cantidad','tp.idGalpon','tp.idParvada','tp.idEtapa','e.nombre')
            ->where('tp.id','LIKE','%'.$query.'%')
            ->orderby('idParvada','asc')
            ->paginate(10);
            $cantidad=DB::table('traspaso_parvada')
            ->paginate(7);
            return view('proceso.traspasoparvada.index',["cantidad"=>$cantidad,"traspasoparvadas"=>$traspasoparvadas,"searchText"=>$query]);   
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parvadas=DB::table('parvada')->get();
        $etapas=DB::table('etapa')
        ->where('nombre','!=','Etapa de Crianza')
        ->get();
        $galpones=DB::table('infraestructura as i')
        ->join('granja as g','i.idGranja','=','g.id')
        ->select('i.id','i.estado','i.tipo','g.tipo as tipog','g.ubicacion','i.capacidad')
        ->where('i.estado','=','Disponible')
        ->where('i.tipo','=','Galpon')
        ->get();
        return view('proceso.traspasoparvada.create',["parvadas"=>$parvadas,"etapas"=>$etapas,"galpones"=>$galpones]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TraspasoParvadaFormRequest $request)
    {

        $cant=DB::table('traspaso_parvada')
        ->where('idParvada','=',$request->get('idparvada'))
        ->where('visible','=','1')
        ->get();
        if(count($cant)==2){
         return redirect('proceso/traspasoparvada')->with('msj','Error al Hacer Traspaso de La Parvada: "'.$request['idparvada'].'" Ya no se Puede Hacer mas Traspaso');
        }
        
        $traspaso=new TraspasoParvada;
        $my_time = Carbon::now('America/La_Paz');
        $traspaso->fecha = $my_time -> toDateTimeString();

        $parvada=Parvada::findOrFail($request->get('idparvada'));
        $traspaso->cantidad=($parvada->cantidadPollos-$parvada->mortalidad);

        $traspaso->idGalpon=$request->get('idgalpon');
        $traspaso->idParvada=$request->get('idparvada');
        $traspaso->idEtapa=$request->get('idetapa');
        $traspaso->visible='1';
        $traspaso->idEmpresa=Auth::user()->idEmpresa;
        $traspaso->save();

        Accion::_crearAccionOnTable('Creo un nuevo Traspaso de Parvada', 'traspaso parvada', $traspaso->id, Auth::user()->id, Auth::user()->idEmpresa);

        return redirect('proceso/traspasoparvada')->with('msj','El Traspaso :"'.$traspaso->id.'" se creo exitósamente.');
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
