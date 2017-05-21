<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Http\Request;
use sisAvicola\Persona;
use sisAvicola\User;

class BitacoraController extends Controller
{
    public function index()
    {
      $usuarios = User::_getUsuariosBitacora()->get();
      $empleados = Persona::_allEmpleados()->get();
      return view('seguridad.bitacora.index', compact('usuarios', 'empleados'));
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
