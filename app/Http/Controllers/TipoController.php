<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use sisAvicola\Http\Requests\TipoFormRequest;
use sisAvicola\Tipo;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class TipoController extends Controller
{
    public function __construct() {
        //$this->middleware('admin');
    }

    public function index(Request $request) {
        if ($request) {
            $query = trim($request->get('searchText'));
            $tipo=DB::table('tipo')
                ->where('nombre','LIKE','%'.$query.'%')
                ->orderBy('id','asc')
                ->paginate(7);
            $cantidad=DB::table('tipo')
                ->where('visible','=','1')
                ->paginate(7);
            return view('venta.tipo.index',["cantidad"=>$cantidad,"tipo"=>$tipo,"searchText"=>$query]);
        }
    }

    public function create() {
        $tipos=DB::table('tipo')
        ->where('visible','=','1')
        ->get();
        if(count($tipos)==3){
         return redirect('venta/tipo')->with('msj','Ya No Puede Crear Mas Tipos de Pollos en Este Sector de  Tipos de Pollos');
        }
        return view('venta.tipo.create');
    }

    public function store(TipoFormRequest $request) {
	    $tipos=DB::table('tipo')
        ->where('nombre','=',$request->get('nombre'))
        ->where('visible','=','1')
        ->get();
        if(count($tipos)>0){
         return redirect('venta/tipo')->with('msj','Ya existe el Tipo de pollo: "'.$request['nombre'].'" Intente crear otra.');
        }

        $request['visible'] = '1';
        $request['idEmpresa'] = Auth::user()->idEmpresa;
	    /*Tipo::create([
		    'nombre'=>$request['nombre'],
	        'visible' => '1',
		    'created_at' => Carbon::now('America/La_Paz')
	    ]);*/
	    Tipo::create($request->all());
	    return redirect('venta/tipo')->with('msj','El Tipo de Pollo :"'.$request['nombre'].'" se creo exitósamente.');

    }

    /*public function show($id) {
        return view('venta.tipo.show',["estado_pedido"=>EstadoPedido::findOrFail($id)]);
    }*/

    public function edit($id) {
        return view('venta.tipo.edit',["tipo"=>Tipo::findOrFail($id)]);
    }

    public function update(TipoFormRequest $request,$id) {
        $tipos= Tipo::findOrFail($id);
	    $tipos->nombre = $request->get('nombre');
	    $tipos->update();
        return Redirect::to('venta/tipo');
    }

    public function destroy($id) {
        $tipo = Tipo::findOrFail($id);
	    $tipo->visible='0';
	    $tipo->update();
        return Redirect::to('venta/tipo');
    }
}
