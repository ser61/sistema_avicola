<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Support\Facades\DB;
use sisAvicola\Http\Requests\PolloFormRequest;
use Illuminate\Http\Request;
use sisAvicola\Http\Requests;
use sisAvicola\ProductoVenta;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class PolloController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(PolloFormRequest $request)
  {
    if($request){
      $query = trim($request->get('searchText'));
      $productoVenta = DB::table('producto_venta')
        ->join('tipo', 'producto_venta.idTipo', '=', 'tipo.id')
        ->select('producto_venta.id','producto_venta.nombre','producto_venta.imagen','producto_venta.stock','producto_venta.precioUnitario','producto_venta.edad','producto_venta.sexo','producto_venta.productividad','producto_venta.pesoPromedio','producto_venta.caracteristicas','tipo.nombre as tipo')
        ->where('producto_venta.nombre','LIKE','%'.$query.'%')
        ->where('producto_venta.visible','=','1')
        ->where('producto_venta.tipo','=','pollo')
        ->orderby('producto_venta.id','asc')
        ->paginate(7);
      return view('venta.pollo.index',["productoVenta"=>$productoVenta,"searchText"=>$query]);
    }
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $tipo = DB::table('tipo')
      ->where('visible', '=', '1') -> get();
    return view("venta.pollo.create",["tipo" => $tipo]);
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
    $productoVenta->edad=$request->get('edad');
    $productoVenta->sexo=$request->get('sexo');
    $productoVenta->pesoPromedio=$request->get('pesoPromedio');
    $productoVenta->productividad=$request->get('productividad');
    $productoVenta->caracteristicas=$request->get('caracteristicas');
    $productoVenta->idTipo=$request->get('idTipo');
    $productoVenta->idEmpresa='123456';
    $productoVenta->tipo='pollo';
    $productoVenta->visible='1';
    $productoVenta->save();
    return  Redirect::to('venta/pollo');
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
    $tipo = DB::table('tipo')
      ->where('visible', '=', '1') -> get();
    return view('venta.pollo.edit',["productoVenta" => $productoVenta, "tipo" => $tipo]);
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
    $productoVenta->edad=$request->get('edad');
    $productoVenta->sexo=$request->get('sexo');
    $productoVenta->pesoPromedio=$request->get('pesoPromedio');
    $productoVenta->productividad=$request->get('productividad');
    $productoVenta->caracteristicas=$request->get('caracteristicas');
    $productoVenta->idTipo=$request->get('idTipo');
    $productoVenta->update();
    return  Redirect::to('venta/pollo');
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
    return Redirect::to('venta/pollo');
  }
}
