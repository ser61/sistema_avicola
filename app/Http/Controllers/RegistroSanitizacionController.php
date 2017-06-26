<?php

namespace sisAvicola\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use sisAvicola\DetalleSanitizacion;
use sisAvicola\ProcesoSanitario;
use sisAvicola\RegistroSanitizacion;
use Illuminate\Support\Facades\Redirect;


class RegistroSanitizacionController extends Controller
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
            $registros=DB::table('registro_sanitizacion as rs')
                ->join('persona as p','rs.idEmpleado','=','p.id')
                ->join('infraestructura as i','rs.idInfraestructura','i.id')
                ->select('rs.id','rs.fecha','rs.visible','rs.idEmpleado','p.nombre','p.apellido',
                    DB::raw('CONCAT(i.id," ",i.capacidad," ",i.tipo) as infraestuctura'))
                ->where('p.tipo','=','e')
                ->where('rs.id','LIKE','%'.$query.'%')
                ->where('rs.visible','=','1')
                ->orwhere('p.nombre','LIKE','%'.$query.'%')
                ->orderBy('rs.id','desc')
                ->groupBy('rs.id','rs.fecha','rs.visible','p.nombre','p.apellido')
                ->paginate(7);
            $idCargo=DB::table('registro_sanitizacion as rs')
                ->join('persona as p','rs.idEmpleado','=','p.id')
                ->select('p.idCargo');
            $cargo = DB::table('cargo as c')
                ->select('c.nombre as cargo')
                ->where('c.id','=',$idCargo);
            $procesos=ProcesoSanitario::all();
            return view('infraestructura.registro_sanitizacion.index',["registros"=>$registros,"searchText"=>$query,"procesos"=>$procesos]);

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleados=DB::table('persona')
            ->where('tipo','=','e')->get();
        $procesos = DB::table('proceso_sanitario as ps')
            ->select('ps.id','ps.nombre','ps.descripcion')
            ->where('ps.visible','=','1')
            ->get();
        $infraestructuras = DB::table('infraestructura as i')->get();
        return view('infraestructura.registro_sanitizacion.create',["empleados"=>$empleados,"procesos"=>$procesos,"infraestructuras"=>$infraestructuras]);
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
            $registro=new RegistroSanitizacion;
            $registro->idEmpleado=$request->get('idEmpleado');
            $registro->idInfraestructura=$request->get('idInfraestructura');
            $mytime = Carbon::now('America/La_Paz');//Clase carbon
            $registro->fecha=$mytime->toDateTimeString();
            $registro->visible='1';
            $registro->idEmpresa=Auth::user()->idEmpresa;
            $registro->save();

            //Arrays:
            //articulo = idProceso
            $idarticulo=$request->get('idarticulo');

            $cont = 0;

            while ($cont < count($idarticulo)) {
                $detalle = new DetalleSanitizacion();
                $detalle->idRegistroSanitizacion=$registro->id;
                $detalle->idProcesoSanitario=$idarticulo[$cont];
                $detalle->idEmpresa=Auth::user()->idEmpresa;
                $detalle->visible='1';
                $detalle->save();
                $cont = $cont + 1;
            }

            DB::commit();

        } catch (Exception $e) {

            DB::rollback();

        }
        return Redirect::to('infraestructura/registro_sanitizacion')
            ->with('msj','Registro de Sanitización creado exitósamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registro=DB::table('registro_sanitizacion as rs')
            ->join('persona as p','i.idEmpleado','=','p.id')
            ->join('infraestructura as i','rs.idInfraestructura','i.id')
            ->select('rs.id','rs.fecha','rs.visible','p.nombre','p.apellido',
                'c.nombre as cargo',DB::raw('CONCAT(i.id," ",i.capacidad," ",i.tipo) as infraestuctura'))
            ->where('rs.id','=',$id)
            ->groupBy('rs.id','rs.fecha','rs.visible','p.nombre','p.apellido',
                'c.nombre as cargo')
            ->first();

        $detalles=DB::table('detalle_sanitizacion as d')
            ->join('proceso_sanitario as p','d.idProcesoSanitario','=','p.id')
            ->select('p.nombre','p.descripcion')
            ->where('d.idProcesoSanitario','=',$id)
            ->get();//Con el método get obtengo todos los detalles
        return view('compras.ingreso.show',["registro"=>$registro,"detalles"=>$detalles]);
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
        $registro=RegistroSanitizacion::findOrFail($id);
        $registro->visible='0';
        $registro->update();
        return Redirect::to('infraestructura/registro_sanitizacion');
    }
}
