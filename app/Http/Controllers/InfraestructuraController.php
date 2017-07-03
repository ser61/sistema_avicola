<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use sisAvicola\Http\Requests\ArticuloFormRequest;
use sisAvicola\Infraestructura;
use DB;
class InfraestructuraController extends Controller
{
	public function __construct(){
		//$this->middleware('auth');
	}

	public function index(Request $request){
		if ($request) {

			$query=trim($request->get('searchText'));
			$infraestructuras=DB::table('infraestructura as i')
				->join('granja as g','i.idGranja','=','g.id')
				->select('i.id','i.capacidad','i.estado','i.cantidadHuevosAlmacenados','i.visible','i.tipo','g.id as idGranja','g.ubicacion','g.tipo as tipoGranja')
				->where('i.tipo','LIKE','%'.$query.'%')
				->orwhere('i.id','LIKE','%'.$query.'%')
				->orderBy('i.idGranja','desc')
				->paginate(10);
			//(qué vista va a retonar,=>: indica de que variable voy a enviar)
			return view('infraestructura.infraestructura.index',["infraestructuras"=>$infraestructuras,"searchText"=>$query]);

		}
	}

	public function create(){
		//$categorias=DB::table('categoria')->where('condicion','=','1')->get();
		$granjas=DB::table('granja as g')
			->select('g.id as idGranja','g.tipo')
			->where('visible','=','1')->get();
		$tipos = ['Galpon','Planta de Incubación'];
		return view("infraestructura.infraestructura.create",["granjas"=>$granjas,"tipos"=>$tipos]);
	}
	/*store: Para almacenar
		Esta funcion es llamada con el 'method'=>'POST'
	*/
	public function store(Request $request){
		$request['visible'] = '1';
		$request['idEmpresa'] = Auth::user()->idEmpresa;
		if($request->get('tipo')=="Galpon"){
			$request['cantidadHuevosAlmacenados'] = 0;
		}
		Infraestructura::create($request->all());
		/*['capacidad'=>$request['capacidad'],
		'estado' =>$request['estado'],
		'tipo' =>$request['tipo'],
		'idGranja' =>$request['idGranja'],
		'cantidadHuevosAlmacenados' => $request['cantidadHuevosAlmacenados'],
		'visible' => $request['visible'],
	]);*/
		return Redirect::to('infraestructura/infraestructura')->with('msj','La/el '.$request['tipo'].' se ha creado exitósamente');
	}

	public function show($id){
		//return view("almacen.articulo.show",["articulo"=>Articulo::findOrFail($id)]);
	}

	public function edit($id){
		$inf=Infraestructura::findOrFail($id);
		$granjas=DB::table('granja')->where('visible','=','1')->get();
		$tipos = ['Galpón','Planta de Incubación'];
		return view("infraestructura.infraestructura.edit",["inf"=>$inf,"granjas"=>$granjas,'tipos'=>$tipos]);
	}

	public function update(Request $request,$id){
		$inf = Infraestructura::findOrFail($id);
		$inf->update($request->all());
		$inf->save();
		Session::flash('msj','La/el '.$inf->tipo.' se editó exitósamente.');
		return Redirect::to('infraestructura/infraestructura');
	}

	public function destroy($id){
		$inf = Infraestructura::findOrFail($id);
		$inf->visible = '0';
		$inf->update();
		return Redirect::to('infraestructura/infraestuctura');
	}
}
