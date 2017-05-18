<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Http\Request;
use sisAvicola\Cargo;

class PrevilegioController extends Controller
{
    public function index()
    {
      $cargos = Cargo::_allCargos()->get();
      return view('seguridad.privilegio.index',compact('cargos'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
