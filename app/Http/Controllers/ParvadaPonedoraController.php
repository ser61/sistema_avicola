<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use sisAvicola\Http\Requests\ParvadaFormRequest;
use sisAvicola\Http\Requests\TraspasoParvadaFormRequest;
use sisAvicola\TraspasoParvada;
use DB;
use sisAvicola\Parvada;

class ParvadaPonedoraController extends Controller
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
            $parvadas=DB::table('parvada')
            ->where('id','LIKE','%'.$query.'%')
            ->where('tipo','=','Ponedora')
            ->paginate(7);
            $cantidad=DB::table('etapa')
            ->where('visible','=','1')
            ->paginate(7);
            return view('proceso.parvadaponedora.index',["cantidad"=>$cantidad,"parvadas"=>$parvadas,"searchText"=>$query]);   
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $galpones=DB::table('infraestructura')
        ->where('estado','=','Disponible')
        ->where('idGranja','=','2')
        ->get();
        return view('proceso.parvadaponedora.create',['galpones'=>$galpones]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ParvadaFormRequest $request,TraspasoParvadaFormRequest $requestt)
    {

        $parvada=new Parvada;
        $parvada->cantidadPollos=$request->get('cantidadpollos');
        $parvada->sexo=$request->get('sexo');
        $parvada->edad=$request->get('edad');
        $parvada->pesoPromedio=$request->get('pesopromedio');
        $parvada->caracteristicas=$request->get('caracteristica');
        $parvada->productividad=$request->get('productividad');
        $parvada->tipo='Ponedora';
        $parvada->mortalidad=0;
        $parvada->visible='Activo';
        $parvada->idEmpresa=123;
        $parvada->save();

        $traspaso=new TraspasoParvada;
        $traspaso->fecha=date("j/ n/ Y");
        $traspaso->cantidad=$requestt->get('cantidadpollos');
        $traspaso->idGalpon=$requestt->get('idgalpon');
        $traspaso->idParvada=$parvada->id;
        $traspaso->idEtapa='1';
        $traspaso->visible='1';
        $traspaso->idEmpresa=123;
        $traspaso->save();

        return Redirect::to('proceso/parvadaponedora');
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
        $parvada=Parvada::findOrFail($id);
        $parvada->visible='Inactivo';
        $parvada->update();

        return Redirect::to('proceso/parvadaponedora');
    }

}
