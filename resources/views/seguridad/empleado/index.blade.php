@extends('layouts.fondo')
@section('content')
  <section class="content-header">
    <h1 align="center">
      * * * * * <b>S E G U R I D A D</b> * * * * *
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{url('/home')}}">index</a></li>
    </ol>
  </section>
  <br>

  <section class="content">
    <div class="box box-primary">
      <!-- TITULO DE PANEL -->
      <div class="box-header with-border">
        <h3 align="center">Panel de control de los <span class="text-bold">Empleados</span></h3>
      </div>
      @include('seguridad.cargo.modals.create')
        <!-- fin-> TITULO DE PANEL -->
      @if(count($empleados) > 0)
        <!-- CUADRO DE BUSQUEDA -->
        <div class="panel panel-blue">
          <div class="panel-body">
            @include('alertas.logrado')
            @include('alertas.request')
            <div class="input-group margin">
              <input type="text" class="form-control" placeholder="Buscar por Nombre">
              <span class="input-group-btn">
                  <button type="button" class="btn btn-info btn-flat">
                    <i class="fa fa-search"></i>
                  </button>
                  <button type="button" class="btn btn-danger btn-flat" data-toggle="modal" data-target="#create" data-backdrop=”false”>
                    <i class="fa fa-plus"></i>
                  </button>
                </span>
            </div>
          </div>
        </div>
        <!-- fin-> CUADRO DE BUSQUEDA -->

        <!-- TABLA DE DATOS -->
        <div class="box-body">
          <table class="table table-hover" style="border-top-color: #00AEFF">
            <thead>
            <tr>
              <th class="center">ci</th>
              <th class="hidden-xs">Foto</th>
              <th>Nombre(s)</th>
              <th>Apellido(s)</th>
              <th class="hidden-xs">Direccion</th>
              <th class="hidden-xs">Fecha Nacimiento</th>
              <th>Fecha Ingreso</th>
              <th>Cargo</th>
              <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($empleados as $empleado)
              <tr>
                <td class="center">{{$empleado->ci}}</td>
                <td class="hidden-xs">
                  <img src='usuarios/{{$empleado->foto}}' class="img-circle" alt=""  style="width: 60px; height: 60px;">
                </td>
                <td>{{$empleado->nombre}}</td>
                <td>{{$empleado->apellido}}</td>
                <td class="hidden-xs">{{$empleado->direccion}}</td>
                <td class="hidden-xs">{{$empleado->fechaNacimiento}}</td>
                <td>{{$empleado->fechaIngreso}}</td>
                <td>{{$empleado->idCargo}}</td>
                <td class="center">
                  <div class="visible-md visible-lg hidden-sm hidden-xs">
                    {!! Form::open(['method'=>'DELETE', 'route'=>['empleado.destroy',$empleado->id]]) !!}
                    <a href="{{ route('empleado.edit', $empleado->id) }}" class="btn btn-xs btn-info">
                      <i class="fa fa-edit"></i>
                    </a>
                    <button class="btn btn-xs btn-danger">
                      <i class="fa fa-trash"></i>
                    </button>
                    {!! Form::close() !!}
                  </div>
                  <div class="visible-xs visible-sm hidden-md hidden-lg">
                    <div class="btn-group">
                      <a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                        <i class="fa fa-cog"></i> <span class="caret"></span>
                      </a>
                      <ul role="menu" class="dropdown-menu pull-right dropdown-dark">
                        <li>
                          <a href="{{ route('empleado.edit', $empleado->id) }}" role="menuitem" tabindex="-1">
                            <i class="fa fa-edit"></i> Edit
                          </a>
                        </li>
                        <li>
                          <a href="{{ route('empleado.destroy', $empleado->id) }}"
                             onclick="event.preventDefault();document.getElementById('delete').submit();">
                            <i class="fa fa-trash"></i> Remove
                          </a>
                          {!! Form::open(['method'=>'DELETE', 'route'=>['empleado.destroy',$empleado->id], 'id'=>'delete']) !!}
                          {!! Form::close() !!}
                        </li>
                      </ul>
                    </div>
                  </div>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <!-- fin-> TABLA DE DATOS -->
      @else
        <div class="box">
          <div class="box-header">
            <h3 align="center"><b>Aun no tiene ninguna Cargo...</b></h3>
          </div>
          <div class="box-body">
            <br>
            <p align="center">Bienvenido a la seccion de Cargos, para agregar un nuevo Cargo, haga click en icono de mas.</p>
            <br>
            <div class="col-md-6 col-sm-offset-3">
              <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#create" data-backdrop=”false”>
                <i class="fa fa-plus"></i>
              </button>

            </div>
          </div>
        </div>
      @endif
    </div>
    <br>
  </section>
@endsection