<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use sisAvicola\Equipo;
use DB;
use sisAvicola\Infraestructura;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request){
            $query = trim($request['searchText']);
            $equipos=DB::table('equipo as e')
                ->where('e.id','LIKE','%'.$query.'%')
                ->where('e.visible','LIKE','1')
                ->orwhere('e.tipo','LIKE','%'.$query.'%')
                ->orderBy('e.id','asc')
                ->paginate(5);
            $inf = Infraestructura::all();
            return view('infraestructura.equipo.index',["equipos"=>$equipos,"searchText"=>$query,"inf"=>$inf]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pIncubadoras = DB::table('infraestructura as i')
            ->select('i.id as idPlantaIncubacion','i.capacidad','i.estado')
            ->where('i.tipo','=','Planta de Incubación')->get();
        $tipos = ['I'=>'Incubadora','N'=>'Nacedora'];
        return view('infraestructura.equipo.create',["plantas"=>$pIncubadoras,"tipos"=>$tipos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['visible'] = '1';
        $request['idEmpresa'] = Auth::user()->idEmpresa;
        Equipo::create($request->all());
        return Redirect::to("infraestructura/equipo")->with('msj','El equipo se creó exitósamente.');;
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
        $equipo = Equipo::findOrFail($id);
        $pIncubadoras = DB::table('infraestructura as i')
            ->select('i.id as idPlantaIncubacion','i.capacidad','i.estado')
            ->where('i.tipo','=','Planta de Incubación')->get();
        $tipos = ['I'=>'Incubadora','N'=>'Nacedora'];
        return view('infraestructura.equipo.edit',["equipo"=>$equipo,"plantas"=>$pIncubadoras,"tipos"=>$tipos]);
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
        $equipo = Equipo::findOrFail($id);
        $equipo->update($request->all());
        $equipo->save();
        return redirect('infraestructura/equipo')->with('msj','El Equipo: '.$equipo->id.' se edito exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equipo = Equipo::findOrFail($id);
        $equipo->visible = '0';
        $equipo->update();
        return Redirect::to("infraestructura/equipo");
    }
}
