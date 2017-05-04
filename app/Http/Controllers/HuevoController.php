<?php

namespace sisAvicola\Http\Controllers;

use sisAvicola\Http\Requests\HuevoFormRequest;
use Illuminate\Http\Request;

class HuevoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(HuevoFormRequest $request)
    {
        if ($request) {
            $query = trim($request->get('searchText'));
            $productos=DB::table('producto as p')
                ->join('categoria_producto as c','p.idcategoria_producto','=','c.idcategoria_producto')
                ->select('p.idproducto','p.nombre','c.descripcion as categoria','p.imagen','p.precio','p.tiempo_prep','info','estado')
                ->where('p.nombre','LIKE','%'.$query.'%')
                ->orwhere('c.descripcion','LIKE','%'.$query.'%')
                ->orderBy('c.descripcion','asc')
                ->paginate(3);
            /*if (Auth::user()->rol==8) {
                return view('productos.producto.index',["productos"=>$productos,"searchText"=>$query]);
            }else {
                return view('productosc.producto.index',["productos"=>$productos,"searchText"=>$query]);
            }*/
            return view('productos.producto.index',["productos"=>$productos,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
