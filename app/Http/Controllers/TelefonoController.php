<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Http\Request;
use sisAvicola\Telefono;

class TelefonoController extends Controller
{

  public function destroy($id)
  {
    Telefono::_eliminar($id);
    return back()->with('msj', 'El numero se elimino correctamente.');
  }
}
