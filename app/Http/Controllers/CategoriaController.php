<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use sisAvicola\Http\Requests\CategoriaFormRequest;
use sisAvicola\Categoria;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CategoriaController extends Controller
{
  public function index(Request $request) {
    if ($request)
    {
      $query=trim($request->get('searchText'));
      $categoria=DB::table('categoria')->where('nombre','LIKE','%'.$query.'%')
        ->where ('visible','=','1')
        ->orderBy('id','asc')
        ->paginate(7);
      $cantidad=DB::table('categoria')
        ->where ('visible','=','1')
        ->paginate(7);
      return view('venta.categoria.index',["cantidad"=>$cantidad,"categoria"=>$categoria,"searchText"=>$query]);
    }
  }

  public function create() {
    return view('venta.categoria.create');
  }

  public function store(CategoriaFormRequest $request) {
    $categoria = new Categoria;
    $categoria -> nombre = $request->get('nombre');
    $categoria -> descripcion = $request->get('descripcion');
    $categoria -> pesoIntervaloSuperior = $request->get('pesoIntervaloSuperior');
    $categoria -> pesoIntervaloInferior = $request->get('pesoIntervaloInferior');
    $categoria -> idEmpresa = Auth::user()->idEmpresa;
    $categoria -> visible = '1';
    $categoria -> save();
    return redirect('venta/categoria')->with('msj','La Categoria :"'.$request['nombre'].'" se creo exitósamente.');
  }

  public function edit($id) {
    return view('venta.categoria.edit',["categoria"=>Categoria::findOrFail($id)]);
  }

  public function update(CategoriaFormRequest $request,$id) {
    $categoria = Categoria::findOrFail($id);
    $categoria -> nombre = $request->get('nombre');
    $categoria -> descripcion = $request->get('descripcion');
    $categoria -> pesoIntervaloSuperior = $request->get('pesoIntervaloSuperior');
    $categoria -> pesoIntervaloInferior = $request->get('pesoIntervaloInferior');
    $categoria->update();
    return Redirect::to('venta/categoria');
  }

  public function destroy($id) {
    $categoria = Categoria::findOrFail($id);
    $categoria->visible='0';
    $categoria->update();
    return Redirect::to('venta/categoria');
  }
}
