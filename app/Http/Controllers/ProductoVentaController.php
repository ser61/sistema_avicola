<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoVentaController extends Controller
{
  public function index(Request $request) {
    if ($request)
    {
      $query=trim($request->get('searchText'));
      $productoVenta=DB::table('producto_venta')->where('nombre','LIKE','%'.$query.'%')
        ->where ('visible','=','1')
        //->where ('idEmpresa','=','123456')
        ->orderBy('tipo','asc')
        ->paginate(7);
      $cantidad=DB::table('producto_venta')
        ->where ('visible','=','1')
        ->paginate(7);
      return view('venta.inventario.index',["cantidad"=>$cantidad,"productoVenta"=>$productoVenta,"searchText"=>$query]);
    }
  }
}
