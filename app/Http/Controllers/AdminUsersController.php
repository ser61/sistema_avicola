<?php

namespace sisAvicola\Http\Controllers;

use Illuminate\Http\Request;
use sisAvicola\AdminUsers;

class AdminUsersController extends Controller
{

  public function index()
  {
    return view('admin.iniciar');
  }

  public function create()
  {
    return view('admin.create');
  }

  public function store(Request $request)
  {
    if ($request['password'] != $request['password_confirmation']) {
      return back()->with('error','Las contraseñan deben ser iguales!!!');
    }else{
      $request['visible'] = '1';
      $request['password'] = bcrypt($request['password']);
      AdminUsers::create($request->all());
      return redirect('home2');
    }
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
