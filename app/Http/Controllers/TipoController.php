<?php

namespace sisAvicola\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

//use sisAvicola\app\Http\Requests\TipoFormRequest;
use Illuminate\Support\Facades\Session;
use sisAvicola\Http\Requests\TipoFormRequest;
use sisAvicola\Tipo;
use Illuminate\Support\Facades\Redirect;

use DB;

class TipoController extends Controller
{
    public function __construct() {
        //$this->middleware('admin');
    }

    public function index(Request $request) {
        if ($request) {
            $query = trim($request->get('searchText'));
            $tipos=DB::table('tipo')
                ->where('nombre','LIKE','%'.$query.'%')
                ->orderBy('id','asc')
                ->paginate(7);
            return view('venta.tipo.index',["tipos"=>$tipos,"searchText"=>$query]);
        }
    }

    public function create() {
        return view('venta.tipo.create');
    }

    public function store(TipoFormRequest $request) {
	    $request['visible'] = '1';
	    /*Tipo::create([
		    'nombre'=>$request['nombre'],
	        'visible' => '1',
		    'created_at' => Carbon::now('America/La_Paz')
	    ]);*/
	    Tipo::create($request->all());
	    Session::flash('message','Tipo creado exitósamente');
        return redirect('/venta/tipo');

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
