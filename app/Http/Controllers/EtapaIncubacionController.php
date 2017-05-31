<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use sisAvicola\Http\Requests\EtapaIncubacionFormRequest;
use DB;
use sisAvicola\EtapaIncubacion;
use Illuminate\Support\Facades\Auth;

class EtapaIncubacionController extends Controller
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
            $etapas=DB::table('etapa_incubacion')
            ->where('id','LIKE','%'.$query.'%')
            ->where('visible','=','1')
            ->paginate(7);
            $cantidad=DB::table('etapa_incubacion')
            ->where('visible','=','1')
            ->paginate(7);
            return view('proceso.etapaincubacion.index',["cantidad"=>$cantidad,"etapas"=>$etapas,"searchText"=>$query]);   
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $etapas=DB::table('etapa_incubacion')
        ->where('visible','=','1')
        ->get();
        if(count($etapas)==2){
         return redirect('proceso/etapaincubacion')->with('msj','Ya No Puede Crear Mas Etapas en Este Sector de  Etapas de Huevos');
        }
        return view('proceso.etapaincubacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EtapaIncubacionFormRequest $request)
    {
        $etapas=DB::table('etapa_incubacion')
        ->where('nombre','=',$request->get('nombre'))
        ->where('visible','=','1')
        ->get();
        if(count($etapas)>0){
         return redirect('proceso/etapaincubacion')->with('msj','Ya existe la Etapa: "'.$request['nombre'].'" Intente crear otra.');
        }
        $etapa=new EtapaIncubacion;
        $etapa->nombre=$request->get('nombre');
        $etapa->visible='1';
        $etapa->idEmpresa=Auth::user()->idEmpresa;
        $etapa->save();

        return redirect('proceso/etapaincubacion')->with('msj','La Etapa :"'.$request['nombre'].'" se creo exitósamente.');
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
        return view('proceso.etapaincubacion.edit',["etapa"=>EtapaIncubacion::findOrFail($id)]);
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
        $etapa = EtapaIncubacion::findOrFail($id);
        $etapa->nombre = $request->get('nombre');
        $etapa->update();
        return Redirect::to('proceso/etapaincubacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $etapa=EtapaIncubacion::findOrFail($id);
        $etapa->visible='0';
        $etapa->update();

        return Redirect::to('proceso/etapaincubacion');
    }
}
