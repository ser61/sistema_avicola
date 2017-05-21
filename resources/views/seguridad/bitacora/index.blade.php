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
            <h3 align="center">Panel de Bitacora de los <span class="text-bold">Usuarios</span></h3>
          </div>
          <!-- fin-> TITULO DE PANEL -->
          <div class="box-body table-responsive">
            <div class="row">

              <div class="col-lg-4 col-md-4 col-sm-4">
                <a href="{{ url('/privilegio') }}" class="btn-info btn-lg btn-block" style="text-align: center">
                  Usuarios
                </a>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <a class="btn-info btn-lg btn-block" style="text-align: center">
                  Cargos
                </a>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <a class="btn-info btn-lg btn-block" style="text-align: center">
                  Casos de Usos
                </a>
              </div>

            </div>

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
                </span>
                </div>
              </div>
            </div>
            <!-- fin-> CUADRO DE BUSQUEDA -->

            <!-- TABLA DE DATOS -->
            <table class="table table-bordered table-hover" style="border-top-color: #00AEFF">
              <thead>
              <tr>
                <th class="col-sm-2">Cuenta</th>
                <th class="col-sm-2">Nombre</th>
                <th class="col-sm-2">Apellido</th>
                <th class="col-sm-3">Cargo</th>
                <th class="col-sm-1"></th>
              </tr>
              </thead>
              <tbody>
              @foreach($usuarios as $usuario)
                <tr>
                  <td>{{$usuario->name}}</td>
                  <td>{{ $usuario->nombre }}</td>
                  <td>{{$usuario->apellido}}</td>
                  <td>{{$usuario->cargo}}</td>
                  <td class="center">
                    <a href="{{ route('bitacora.showUser', $usuario->id) }}" type="button" class="btn btn-xs btn-info">
                      <i class="fa fa-eye"></i> Ver
                    </a>
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