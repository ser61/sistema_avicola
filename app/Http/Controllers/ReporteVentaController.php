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
use PDF;

class ReporteVentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('venta.reporteventa.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cliente = DB::table('persona')
          ->where('visible','=','1')
          ->where('tipo','=','c') -> get();
        $empleado = DB::table('persona')
          ->where('visible','=','1')
          ->where('tipo','=','e') -> get();
        $factura_a = DB::table('factura')
          ->get();
        $factura_b = DB::table('factura')
          ->get();
        $producto=DB::table('producto_venta')
            ->where ('visible','=','1')
            ->get();
        return view('venta.reporteventa.create',['producto'=>$producto,'empleado'=>$empleado,'cliente'=>$cliente,'factura_a'=>$factura_a,'factura_b'=>$factura_b]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FacturaFormRequest $request)
    {
        
        //$fecha=$request->get('fecha');
        $idcliente=$request->get('idCliente');
        $idempleado=$request->get('idEmpleado');
        $estado=$request->get('estado');

        $id = $request->get('codigo');

        $fa_c=DB::table('factura')
        ->where('id','=',$id)
        ->get();

        $fecha_a=$request->get('fecha_a');
        $fecha_b=$request->get('fecha_b');
        //Route::get('venta/factura/reporte',function(){
        if($id==-1){
            $facturas=DB::table('factura')
            ->select('factura.*', 'p.nombre as nombreC')
            ->join('persona as p', 'p.id', '=', 'factura.idEmpleado')
            //->where('fecha','=',$fecha_a)
            ->whereBetween('fecha', [$fecha_a, $fecha_b])
            ->where('idCliente','=',$idcliente)
            ->where('idEmpleado','=',$idempleado)
            ->where('estado','=',$estado)
            ->get();
            $pdf = PDF::loadView('venta/factura/reporte',['facturas' => $facturas , "fa_c"=>$fa_c]);
            return $pdf->download('ReporteFacturas.pdf');
        }else{

            $facturas = DB::table('factura')
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

            $pdf = PDF::loadView('venta/factura/reporte',['facturas' => $facturas,"detalle" => $detalle,"fa_c"=>$fa_c]);
            return $pdf->download('ReporteFacturas.pdf');
        }
        //});
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
}
