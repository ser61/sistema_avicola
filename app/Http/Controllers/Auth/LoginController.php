<?php

namespace sisAvicola\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use sisAvicola\Accion;
use sisAvicola\Bitacora;
use sisAvicola\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use sisAvicola\Persona;
use sisAvicola\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

  protected function validateLogin(Request $request)
  {
    $this->validate($request, [
      $this->username() => 'required', 'password' => 'required','idEmpresa' => 'required|exists:users,idEmpresa'
    ]);
  }

  public function username()
  {
    return 'name';
  }

  protected function authenticated(Request $request, $user)
  {
    Bitacora::_crearBitacora(Auth::user()->id, Auth::user()->idEmpresa);
    Accion::_crearAccion('LogIn', Auth::user()->id, Auth::user()->idEmpresa);
  }

  public function logout(Request $request)
  {
    Accion::_crearAccion('LogOut', Auth::user()->id, Auth::user()->idEmpresa);

    $this->guard()->logout();

    $request->session()->flush();

    $request->session()->regenerate();

    return redirect('/');
  }
}
