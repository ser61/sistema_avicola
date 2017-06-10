<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use sisAvicola\Granja;
use Illuminate\Support\Facades\Redirect;
use DB;


class GranjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
	    if ($request) {
		    $query = trim($request->get('searchText'));
		    $granjas=DB::table('Granja as g')
			    ->where('g.id','LIKE','%'.$query.'%')
			    ->where('g.visible','LIKE','1')
			    ->orwhere('g.tipo','LIKE','%'.$query.'%')
			    ->orderBy('g.id','desc')
			    ->paginate(3);
		    return view('infraestructura.granja.index',["granjas"=>$granjas,"searchText"=>$query]);
	    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	    return view('infraestructura.granja.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	    $request['visible'] = '1';
	    $request['idEmpresa'] = Auth::user()->idEmpresa;
	    Granja::create($request->all());
	    //Session::flash('msj','Granja creada exitósamente.');
	    return redirect('/infraestructura/granja')->with('msj','La granja se creó exitósamente.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
	    $listaTipo = ['Crianza','Engorda','Reproducción'];
	    $granja = Granja::where('id','=',$id)->get()->first();

	    return view("infraestructura.granja.edit",['granja'=>$granja,'listaTipo'=>$listaTipo]);
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
	    $granja = Granja::where('id','=',$id)->get()->first();
	    $granja->update($request->all());
	    Session::flash('msj','La Granja fué editada exitósamente.');
	    return Redirect::to('infraestructura/granja');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	    $granja = Granja::findOrFail($id);
	    $granja->visible = '0';
	    $granja->update();
	    Session::flash('msj','La Granja '.$id.' se eliminó correctamente.');
	    return Redirect::to('infraestructura/granja');
    }
}
