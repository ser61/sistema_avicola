<?php

namespace sisAvicola\Http\Controllers\Seguridad;

use sisAvicola\Http\Controllers\Controller;
use sisAvicola\Models\seguridad\Telefono;

class TelefonoController extends Controller
{

  public function destroy($id)
  {
    Telefono::_eliminar($id);
    return back()->with('msj', 'El numero se elimino correctamente.');
  }
}
