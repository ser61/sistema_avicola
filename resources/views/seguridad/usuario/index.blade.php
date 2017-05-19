@extends('layouts.fondo')
@section('content')
  <section class="content-header">
    <h1 align="center">
      * * * * * <b>S E G U R I D A D</b> * * * * *
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">index</a></li>
    </ol>
  </section>
  <br>

  <section class="content">
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <div class="box box-primary">
          <!-- TITULO DE PANEL -->
          <div class="box-header with-border">
            <h3 align="center">Panel de control de los <span class="text-bold">Usuarios</span></h3>
          </div>
          <!-- fin-> TITULO DE PANEL -->
          <div class="box-body table-responsive">
            @if(count($empleados) > 0 && count($usuarios) > 0)
              <!-- CUADRO DE BUSQUEDA -->
            <div class="panel panel-blue">
              <div class="panel-body">
                @include('alertas.logrado')
                @include('alertas.error')
                <div class="input-group margin">
                  <input type="text" class="form-control" placeholder="Buscar por Nombre">
                <span class="input-group-btn">
                  <button type="button" class="btn btn-info btn-flat">
                    <i class="fa fa-search"></i>
                  </button>
                  <a href="{{ url('admin/create') }}" class="btn btn-danger btn-flat">
                    <i class="fa fa-plus"></i>
                  </a>
                </span>
                </div>
              </div>
            </div>
            <!-- fin-> CUADRO DE BUSQUEDA -->

            <!-- TABLA DE DATOS -->
            <table class="table table-bordered table-hover" style="border-top-color: #00AEFF">
              <thead>
              <tr>
                <th>Nombre</th>
                <th class="hidden-xs">Foto</th>
                <th>Email</th>
                <th>Estado</th>
                <th>Cargo</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
              @foreach($usuarios as $usuario)
                <tr>
                  <td class="center">{{$usuario->name}}</td>
                  <td class="hidden-xs">
                    <img src='usuarios/{{$usuario->foto}}' class="img-circle" alt=""  style="width: 60px; height: 60px;">
                  </td>
                  <td>{{$usuario->email}}</td>
                  <td>{{$usuario->estado}}</td>
                  <td>{{$usuario->cargo}}</td>
                  <td class="center">
                    <div class="visible-md visible-lg hidden-sm hidden-xs">
                      {!! Form::open(['method'=>'DELETE', 'route'=>['admin.destroy',$usuario->id]]) !!}
                      <a href="{{ route('admin.edit', $usuario->id) }}" class="btn btn-xs btn-info">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-xs btn-danger">
                        <i class="fa fa-trash"></i>
                      </button>
                      <a href="#" class="btn btn-xs btn-success">
                        <i class="fa fa-eye"></i>
                      </a>
                      {!! Form::close() !!}
                    </div>
                    <div class="visible-xs visible-sm hidden-md hidden-lg">
                      <div class="btn-group">
                        <a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                          <i class="fa fa-cog"></i> <span class="caret"></span>
                        </a>
                        <ul role="menu" class="dropdown-menu pull-right dropdown-dark">
                          <li>
                            <a href="{{ route('admin.edit', $usuario->id) }}" role="menuitem" tabindex="-1">
                              <i class="fa fa-edit"></i> Edit
                            </a>
                          </li>
                          <li>
                            <a href="{{ route('admin.destroy', $usuario->id) }}"
                               onclick="event.preventDefault();document.getElementById('delete').submit();">
                              <i class="fa fa-trash"></i> Remove
                            </a>
                            {!! Form::open(['method'=>'DELETE', 'route'=>['admin.destroy',$usuario->id], 'id'=>'delete']) !!}
                            {!! Form::close() !!}
                          </li>
                          <li>
                            <a href="{{ route('admin.show', $usuario->id) }}" role="menuitem" tabindex="-1">
                              <i class="fa fa-eye"></i> Ver
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
            <!-- fin-> TABLA DE DATOS -->
            @else
              <div class="box">
                @if(count($empleados) == 0)
                  <div class="box-header">
                    <h3 align="center"><b>Aun no tiene ningun Empleado...</b></h3>
                  </div>
                  <div class="box-body">
                    <br>
                    <p align="center">Bienvenido a la seccion de Usuario, para agregar un nuevo Usuario,</p>
                    <p align="center">es necesario que registre al menos a un empleado.</p>
                    <p align="center">Para registra un nuevo empleado haga click en el icono de más.</p>
                    <br>
                    <div class="col-md-6 col-sm-offset-3">
                      <a type="button" href="{{ url('empleado/create') }}" class="btn btn-danger btn-block">
                        <i class="fa fa-plus"></i>
                      </a>
                    </div>
                  </div>
                @elseif(count($usuarios) == 0)
                  <div class="box-header">
                    <h3 align="center"><b>Aun no tiene ningun Usuario...</b></h3>
                  </div>
                  <div class="box-body">
                    <br>
                    <p align="center">Bienvenido a la seccion de Usuario, para agregar un nuevo Usuario, haga click en el icono de mas.</p>
                    <br>
                    <div class="col-md-6 col-sm-offset-3">
                      <a type="button" href="{{ url('admin/create') }}" class="btn btn-danger btn-block">
                        <i class="fa fa-plus"></i>
                      </a>
                    </div>
                  </div>
                @endif
              </div>
            @endif
            <br><br><br><br>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection