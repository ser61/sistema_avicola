<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Http\Request;
use sisAvicola\Bateria;
use DB;
use Illuminate\Support\Facades\Redirect;
class BateriaController extends Controller
{
	public function __construct(){
		//$this->middleware('auth');
	}
	public function index(Request $request){
		if ($request) {
			$query=trim($request->get('searchText'));
			$baterias=DB::table('bateria as b')
				->join('infraestructura as i','i.id','=','b.id')
				->select('b.id','b.capacidad','b.idGalpon','b.visible')
				//->where('i.tipo','=','Galpón')
				->where('b.id','LIKE','%'.$query.'%')
				->orderBy('b.id','desc')
				->paginate(5);
			return view('infraestructura.bateria.index',["baterias"=>$baterias,"searchText"=>$query]);
		}
	}

	public function create(){
		$galpones = DB::table('infraestructura as i')
			->select('i.id as idGalpon','i.capacidad','i.estado','i.tipo')
			->where('i.tipo','=','Galpón')->get();
		return view("infraestructura.bateria.create",["galpones"=>$galpones]);
	}

	public function store(Request $request){
		$request['visible'] = '1';
		$request['idEmpresa'] = 'cod-412';
		Bateria::create($request->all());
		return Redirect::to('infraestructura/bateria');
	}

	public function edit($id){
		$bateria=Bateria::findOrFail($id);
		$galpones = DB::table('infraestructura as i')
			->select('i.id as idGalpon','i.capacidad','i.estado','i.tipo')
			->where('i.tipo','=','Galpón')->get();
		return view("infraestructura.bateria.edit",["bateria"=>$bateria,"galpones"=>$galpones]);
	}

	public function update(Request $request,$id){
		$bateria = Bateria::findOrFail($id);
		$bateria->update($request->all());
		$bateria->save();
		return Redirect::to('infraestructura/bateria');
	}

	public function destroy($id){
		$bateria = Bateria::findOrFail($id);
		$bateria->visible = '0';
		$bateria->update();
		return Redirect::to('infraestructura/bateria');
	}
}
