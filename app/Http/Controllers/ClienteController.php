<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use sisAvicola\Http\Requests\ClienteFormRequest;
use sisAvicola\Persona;
use Illuminate\Support\Facades\Auth;

class ClienteController extends Controller
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
      $persona = DB::table('persona')
        ->where('persona.nombre','LIKE','%'.$query.'%')
        ->where('persona.tipo', '=', 'c')
        ->where('persona.visible','=','1')
        ->paginate(7);
      $cantidad = DB::table('persona')
        ->where('persona.tipo', '=', 'c')
        ->where('persona.visible','=','1')
        ->paginate(7);
      return view('venta.cliente.index',["cantidad"=>$cantidad,"persona"=>$persona,"searchText"=>$query]);
    }
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view("venta.cliente.create");
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(ClienteFormRequest $request)
  {
    $persona = new Persona;
    $persona -> ci = $request -> get('ci');
    $persona -> nombre = $request -> get('nombre');
    $persona -> apellido = $request -> get('apellido');
    $persona -> direccion = $request -> get('direccion');
    $persona -> idEmpresa = Auth::user()->idEmpresa;
    $persona -> tipo = 'c';
    $persona -> visible = '1';
    $persona -> save();

    return redirect('venta/cliente')->with('msj','El Cliente :"'.$request['nombre'].'" se creo exitósamente.');
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
    return view('venta.cliente.edit',["persona"=>Persona::findOrFail($id)]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(ClienteFormRequest $request, $id)
  {
    $persona = Persona::findOrFail($id);
    $persona -> ci = $request -> get('ci');
    $persona -> nombre = $request -> get('nombre');
    $persona -> apellido = $request -> get('apellido');
    $persona -> direccion = $request -> get('direccion');
    $persona -> update();
    return redirect('venta/cliente')->with('msj','El Cliente: '.$persona->nombre.' se edito exitosamente.');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $persona = Persona::findOrFail($id);
    $persona -> visible = '0';
    $persona -> update();
    return redirect('venta/cliente');
  }
}
