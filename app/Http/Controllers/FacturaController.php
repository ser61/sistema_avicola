<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;
use sisAvicola\DetalleFactura;
use sisAvicola\Factura;
use sisAvicola\Http\Requests;
use sisAvicola\Http\Requests\FacturaFormRequest;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use sisAvicola\Models\seguridad\Accion;
use Illuminate\Support\Facades\Auth;
use sisAvicola\ProductoVenta;

class FacturaController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
    Accion::_crearAccion('Ingreso a la pagina de Factura', Auth::user()->id, Auth::user()->idEmpresa);
    if($request){
      $factura = Factura::_getAllFactura($request['searchText'])->paginate(7);
      $searchText = $request['searchText'];
      $cantidad=DB::table('factura')
            ->paginate(7);
      $cant_c = DB::table('persona')
        ->where('persona.tipo', '=', 'c')
        ->where('persona.visible','=','1')
        ->paginate(7);
      $cant_e = DB::table('persona')
        ->where('persona.tipo', '=', 'e')
        ->where('persona.visible','=','1')
        ->paginate(7);
      $cant_p = DB::table('producto_venta')
        ->where('visible','=','1')
        ->paginate(7);
      return view('venta.factura.index',["cant_p"=>$cant_p,"cant_c"=>$cant_c,"cant_e"=>$cant_e,"cantidad"=>$cantidad,"factura"=>$factura,"searchText"=>$searchText]);
    }
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    Accion::_crearAccion('Ingreso a la pagina de Crear Factura', Auth::user()->id, Auth::user()->idEmpresa);
    $cliente = DB::table('persona')
      ->where('visible','=','1')
      ->where('tipo','=','c') -> get();
    $empleado = DB::table('persona')
      ->where('visible','=','1')
      ->where('tipo','=','e') -> get();
    $producto = DB::table('producto_venta')
      ->where('visible','=','1')
      ->orderBy('tipo','asc') -> get();

    return view("venta.factura.create",["cliente" => $cliente, "empleado" => $empleado, "producto" => $producto]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(FacturaFormRequest $request)
  {
    try{
      DB::beginTransaction();
      $factura = new Factura;
      $factura -> nit = $request -> get('nit');
      $factura -> nombre = $request -> get('nombre');

      $my_time = Carbon::now('America/La_Paz');
      $factura -> fecha = $my_time -> toDateTimeString();

      $factura -> montoTotal = $request -> get('montoTotal');
      $factura -> idCliente = $request -> get('idCliente');
      $factura -> idEmpleado = $request -> get('idEmpleado');
      $factura -> estado = 'activa';
      $factura -> idEmpresa = Auth::user()->idEmpresa;
      $factura -> save();

      $idProducto = $request ->get('pidProd1');
      $cant = $request -> get('cant');
      $cont = 0;

      while ($cont < count($idProducto)) {
        $detalle = new DetalleFactura();
        $detalle -> idFactura = $factura -> id;
        $detalle -> idProducto = $idProducto[$cont];
        $detalle -> cantidad = $cant[$cont];
        $detalle -> visible = '1';
        $detalle -> idEmpresa = Auth::user()->idEmpresa;
        $detalle -> save();

        $producto_stock = ProductoVenta::findOrFail($idProducto[$cont]);
        $producto_stock->stock = $producto_stock->stock - $cant[$cont];
        $producto_stock->update();

        $cont = $cont + 1;
      }


      DB::commit();
      Accion::_crearAccionOnTable('Creo una nueva Factura', 'factura', $factura->id, Auth::user()->id, Auth::user()->idEmpresa);

    } catch (Exception $e){
      DB::rollabck();
    }
    return redirect('venta/factura')->with('msj','La Factura :"'.$factura->id.'" se creo exitósamente.');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $factura = DB::table('factura')
      ->join('persona as cliente', 'cliente.id', '=', 'factura.idCliente')
      ->join('persona as empleado', 'empleado.id', '=', 'factura.idEmpleado')
      ->select('factura.id','factura.nit','factura.nombre','factura.fecha','factura.montoTotal','cliente.nombre as cliente','cliente.apellido as cap','empleado.nombre as empleado','empleado.apellido as eap')
      ->where('factura.id','=', $id)
      ->first();

    $detalle = DB::table('detalle_factura')
      ->join('producto_venta','producto_venta.id', '=', 'detalle_factura.idProducto')
      ->select('producto_venta.nombre','detalle_factura.cantidad','producto_venta.precioUnitario')
      ->where('detalle_factura.idFactura','=', $id)
      ->get();

    return view('venta.factura.show',["factura"=> $factura, "detalle" => $detalle]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
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
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
  public function diri()
  {
    //
  }
}
