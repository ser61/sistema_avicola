<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Support\Facades\DB;
use sisAvicola\Http\Requests\HuevoFormRequest;
use Illuminate\Http\Request;
use sisAvicola\Http\Requests;
use sisAvicola\ProductoVenta;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class HuevoController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(HuevoFormRequest $request)
  {
    if($request){
      $query = trim($request->get('searchText'));
      $productoVenta = DB::table('producto_venta')
        ->join('categoria', 'producto_venta.idCategoria', '=', 'categoria.id')
        ->select('producto_venta.id','producto_venta.nombre','producto_venta.imagen','producto_venta.stock','producto_venta.precioUnitario','categoria.nombre as categoria')
        ->where('producto_venta.nombre','LIKE','%'.$query.'%')
        ->where('producto_venta.visible','=','1')
        ->where('producto_venta.tipo','=','huevo')
        ->orderby('producto_venta.id','asc')
        ->paginate(7);
      return view('venta.huevo.index',["productoVenta"=>$productoVenta,"searchText"=>$query]);
    }
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $categoria = DB::table('categoria')
      ->where('visible', '=', '1') -> get();
    return view("venta.huevo.create",["categoria" => $categoria]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $productoVenta = new ProductoVenta;
    $productoVenta->nombre=$request->get('nombre');
    if (Input::hasFile('imagen')) {
      $file = Input::file('imagen');
      $file -> move(public_path().'/imagenes/productos/', $file->getClientOriginalName());
      $productoVenta -> imagen = $file->getClientOriginalName();
    }
    $productoVenta->stock=$request->get('stock');
    $productoVenta->precioUnitario=$request->get('precioUnitario');
    $productoVenta->idCategoria=$request->get('idCategoria');
    $productoVenta->idEmpresa='123456';
    $productoVenta->tipo='huevo';
    $productoVenta->visible='1';
    $productoVenta->save();
    return  Redirect::to('venta/huevo');
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
    $productoVenta = ProductoVenta::findOrFail($id);
    $categoria = DB::table('categoria')
      ->where('visible', '=', '1') -> get();
    return view('venta.huevo.edit',["productoVenta" => $productoVenta, "categoria" => $categoria]);
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
    $productoVenta = ProductoVenta::findOrFail($id);
    $productoVenta->nombre=$request->get('nombre');
    if (Input::hasFile('imagen')) {
      $file = Input::file('imagen');
      $file -> move(public_path().'/imagenes/productos/', $file->getClientOriginalName());
      $productoVenta -> imagen = $file->getClientOriginalName();
    }
    $productoVenta->stock=$request->get('stock');
    $productoVenta->precioUnitario=$request->get('precioUnitario');
    $productoVenta->idCategoria=$request->get('idCategoria');
    $productoVenta->update();
    return  Redirect::to('venta/huevo');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $productoVenta = ProductoVenta::findOrFail($id);
    $productoVenta->visible='0';
    $productoVenta->update();
    return Redirect::to('venta/huevo');
  }
}
