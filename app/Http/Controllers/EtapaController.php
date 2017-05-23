<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use sisAvicola\Http\Requests\EtapaFormRequest;
use DB;
use sisAvicola\Etapa;



class EtapaController extends Controller
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
            $etapas=DB::table('etapa')
            ->where('id','LIKE','%'.$query.'%')
            ->where('visible','=','1')
            ->paginate(7);
            $cantidad=DB::table('etapa')
            ->where('visible','=','1')
            ->paginate(7);
            return view('proceso.etapa.index',["cantidad"=>$cantidad,"etapas"=>$etapas,"searchText"=>$query]);   
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proceso.etapa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EtapaFormRequest $request)
    {

        $etapa=new Etapa;
        $etapa->nombre=$request->get('nombre');
        $etapa->visible='1';
        $etapa->idEmpresa=123456;
        $etapa->save();

        return Redirect::to('proceso/etapa');
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
        return view('proceso.etapa.edit',["etapa"=>Etapa::findOrFail($id)]);
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
        $etapa = Etapa::findOrFail($id);
        $etapa->nombre = $request->get('nombre');
        $etapa->update();
        return Redirect::to('proceso/etapa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $etapa=Etapa::findOrFail($id);
        $etapa->visible='0';
        $etapa->update();

        return Redirect::to('proceso/etapa');
    }

}
