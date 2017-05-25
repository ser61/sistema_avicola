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

class TraspasoParvadaController extends Controller
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
            $traspasoparvadas=DB::table('traspaso_parvada')
            ->where('id','LIKE','%'.$query.'%')
            //->where('tipo','=','Engorde')
            ->orderby('idParvada','asc')
            ->paginate(7);
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
        $etapas=DB::table('etapa')->get();
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
        $traspaso=new TraspasoParvada;
        $traspaso->fecha=date("j/ n/ Y");


        $parvada=Parvada::findOrFail($request->get('idparvada'));
        $traspaso->cantidad=$parvada->cantidadPollos;

        $traspaso->idGalpon=$request->get('idgalpon');
        $traspaso->idParvada=$request->get('idparvada');
        $traspaso->idEtapa=$request->get('idetapa');
        $traspaso->visible='1';
        $traspaso->idEmpresa=Auth::user()->idEmpresa;
        $traspaso->save();

        return Redirect::to('proceso/traspasoparvada');
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
