<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use sisAvicola\Http\Requests\OrdenProduccionFormRequest;
use sisAvicola\OrdenProduccion;
use sisAvicola\DetalleOrden;
use DB;

class OrdenProduccionController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request){
            $query = trim($request->get('searchText'));
            $ordenes=DB::table('orden_produccion')
            ->where('id','LIKE','%'.$query.'%')
            //->where('tipo','=','Engorde')
            ->paginate(7);
            $cantidad=DB::table('orden_produccion')
            ->where('visible','=','1')
            ->paginate(7);
            return view('proceso.ordenproduccion.index',["cantidad"=>$cantidad,"ordenes"=>$ordenes,"searchText"=>$query]);   
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trabajadores=DB::table('persona')->get();
        $alimentos=DB::table('alimento')->get();
        return view('proceso.ordenproduccion.create',['trabajadores'=>$trabajadores,'alimentos'=>$alimentos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrdenProduccionFormRequest $request)
    {
        try{

            DB::beginTransaction();

            $ordenproduccion= new OrdenProduccion;
            $ordenproduccion->fecha=date("j/ n/ Y");;
            $ordenproduccion->hora=date("H:i:s");
            $ordenproduccion->observacion=$request->get('observacion');
            $ordenproduccion->idEmpleado=$request->get('idempleado');
            $ordenproduccion->idEmpresa=123456;
            $ordenproduccion->visible='1';
            $ordenproduccion->save();


            $idAlimento=$request->get('idalimento');
            $peso=$request->get('peso'); 

            $cont=0;
            while($cont < count($idAlimento)){
                $detalleorden= new DetalleOrden();
                $detalleorden->idOrdenProduccion=$ordenproduccion->id;
                $detalleorden->idAlimento=$idAlimento[$cont];
                $detalleorden->peso=$peso[$cont];
                $detalleorden->idEmpresa=123456;
                $detalleorden->visible='1';
                $detalleorden->save();
                $cont=$cont+1;
            }               
            DB::commit();

        }catch(\Exception $e)
        {
            DB::rollback();
        }

        return Redirect::to('proceso/ordenproduccion');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orden = DB::table('orden_produccion')
        ->join('persona as empleado', 'empleado.id', '=', 'orden_produccion.idEmpleado')
        ->select('orden_produccion.id','orden_produccion.observacion','orden_produccion.fecha','empleado.nombre as empleado','empleado.apellido as eap')
        ->where('orden_produccion.id','=', $id)
        ->first();

        $detalle = DB::table('detalle_orden')
        ->join('alimento','alimento.id', '=', 'detalle_orden.idAlimento')
        ->select('alimento.nombre','detalle_orden.peso')
        ->where('detalle_orden.idOrdenProduccion','=', $id)
        ->get();

        return view('proceso.OrdenProduccion.show',["orden"=> $orden, "detalle" => $detalle]);
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
