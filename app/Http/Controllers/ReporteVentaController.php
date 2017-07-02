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

        $fecha_a=$request->get('fecha_a');
        $fecha_b=$request->get('fecha_b');
        //Route::get('venta/factura/reporte',function(){
            $facturas=DB::table('factura')
            ->select('factura.*', 'p.nombre as nombreC')
            ->join('persona as p', 'p.id', '=', 'factura.idEmpleado')
            //->where('fecha','=',$fecha_a)
            ->whereBetween('fecha', [$fecha_a, $fecha_b])
            ->where('idCliente','=',$idcliente)
            ->where('idEmpleado','=',$idempleado)
            ->where('estado','=',$estado)
            ->get();
            $pdf = PDF::loadView('venta/factura/reporte',['facturas' => $facturas]);
            return $pdf->download('ReporteFacturas.pdf');
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
