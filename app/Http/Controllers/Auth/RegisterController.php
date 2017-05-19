<?php

namespace sisAvicola\Http\Controllers\Auth;

use sisAvicola\User;
use sisAvicola\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';


    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'idEmpresa' => 'min:6|unique:users',
        ]);
    }

    protected function create(array $data)
    {
      if (!array_key_exists('foto', $data)) {$data['foto'] = 'user.png';}
      return User::create([
        'name' => $data['name'],
        'foto' => $data['foto'],
        'email' => $data['email'],
        'password' => bcrypt($data['password']),
        'estado' => '1',
        'idEmpleado' => null,
        'idEmpresa' => $data['idEmpresa'],
        'tipoUser' => 'a', //a= admin; u= usuario; s= superAdmin
        'privilegio' => null,
        'visible' => '1',
      ]);
    }
}
