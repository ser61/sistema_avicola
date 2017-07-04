<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use sisAvicola\DetalleProducto;

use sisAvicola\Models\Compra\Insumo;
use DB;
use sisAvicola\ProcesoSanitario;

class ProcesoSanitarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request) {

            $query=trim($request->get('searchText'));
            $procesos=DB::table('proceso_sanitario as ps')
                ->join('detalle_producto as dp','ps.id','=','dp.idProcesoSanitario')
                ->select('ps.id','ps.nombre','ps.descripcion',DB::raw('sum(dp.cantidad) as cantidad'))
                ->where('ps.nombre','LIKE','%'.$query.'%')
                ->where('ps.visible','=','1')
                ->orderBy('ps.id','desc')
                ->groupBy('ps.id','ps.nombre','ps.descripcion')
                ->paginate(7);
            $insumos = Insumo::all();
            return view('infraestructura.proceso_sanitario.index',["procesos"=>$procesos,"searchText"=>$query,"insumos"=>$insumos]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articulos = DB::table('insumo')
            ->where('tipoInsumo','=','3')
            ->where('visible','=','1')
            ->where('cantidadTotal','>','0')
            ->get();
        return view('infraestructura.proceso_sanitario.create',["articulos"=>$articulos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $proceso = new ProcesoSanitario;
            $proceso->nombre = $request['nombre'];
            $proceso->descripcion = $request['descripcion'];
            $proceso->visible = '1';
            $proceso->idEmpresa = Auth::user()->idEmpresa;
            $proceso->save();
            //Arrays:
            $idarticulo=$request->get('idarticulo');
            $cantidad = $request->get('cantidad');

            $cont = 0;

            while ($cont < count($idarticulo)) {
                $detalle = new DetalleProducto();
                $detalle->idProcesoSanitario=$proceso->id;
                $detalle->idProductoSanitario=$idarticulo[$cont];
                $detalle->cantidad=$cantidad[$cont];
                $detalle->visible= '1';
                $detalle->idEmpresa= Auth::user()->idEmpresa;
                $detalle->save();
                $cont = $cont + 1;
            }

            DB::commit();

        } catch (Exception $e) {

            DB::rollback();

        }
        return Redirect::to('infraestructura/proceso_sanitario')->with('msj','El proceso sanitario se guardó correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proceso=DB::table('proceso_sanitario as ps')
            ->join('detalle_producto as dp','dp.id','=','ps.id')
            ->select('ps.id','ps.nombre','ps.descripcion',DB::raw('sum(dp.cantidad) as cantidad'))
            ->where('ps.id','=',$id)
            ->groupBy('ps.id','ps.nombre','ps.descripcion')
            ->first();

        $detalles=DB::table('detalle_producto as d')
            ->join('insumo as i','d.idProductoSanitario','=','i.id')
            ->select('i.nombre as insumo','i.descripcion','d.cantidad')
            ->where('d.idProcesoSanitario','=',$id)
            ->get();//Con el método get obtengo todos los detalles
        return view('infraestructura.proceso_sanitario.show',["proceso"=>$proceso,"detalles"=>$detalles]);
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

        $detalle=DB::table('detalle_producto as dp')
            ->where('dp.idProcesoSanitario','=',$id)->get();
        $detalle->visible='0';
        $detalle->save();
        $proceso=ProcesoSanitario::findOrFail($id);
        $proceso->visible='0';
        $proceso->update();
        return Redirect::to('infraestructura/proceso_sanitario');
    }
}
