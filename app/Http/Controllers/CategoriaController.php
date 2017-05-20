<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use sisAvicola\Http\Requests\CategoriaFormRequest;
use sisAvicola\Categoria;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
  public function index(Request $request) {
    if ($request)
    {
      $query=trim($request->get('searchText'));
      $categoria=DB::table('categoria')->where('nombre','LIKE','%'.$query.'%')
        ->where ('visible','=','1')
        ->where ('idEmpresa','=','123456')
        ->orderBy('id','asc')
        ->paginate(7);
      return view('venta.categoria.index',["categoria"=>$categoria,"searchText"=>$query]);
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
    $categoria -> idEmpresa = '123456';
    $categoria -> visible = '1';
    $categoria -> save();
    return Redirect::to('venta/categoria');
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
