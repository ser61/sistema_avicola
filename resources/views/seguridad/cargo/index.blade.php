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
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <div class="box box-primary">
        <!-- TITULO DE PANEL -->
        <div class="box-header with-border">
          <h3 align="center">Panel de control de los <span class="text-bold">Cargos</span></h3>
        </div>
        @include('seguridad.cargo.modals.cargo_create')
          <!-- fin-> TITULO DE PANEL -->
        @if(count($cargos) > 0)
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
          <table class="table table-bordered" style="border-top-color: #00AEFF">
            <thead>
            <tr>
              <th class="center">id</th>
              <th>Cargo</th>
              <th class="hidden-sm hidden-xs">Descripcion</th>
              <th>Nro. Empleados</th>
              <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cargos as $cargo)
              <tr>
                <td class="center">{{$cargo->id}}</td>
                <td>{{$cargo->nombre}}</td>
                <td class="hidden-xs">{{$cargo->descripcion}}</td>
                <td>{{$cargo->nro}}</td>
                <td class="center">
                  <!-- CUANDO ESTE EN PANTALLA COMPLETA -->
                  <div class="visible-md visible-lg hidden-sm hidden-xs">
                    {!! Form::open(['method'=>'DELETE', 'route'=>['cargo.destroy',$cargo->id]]) !!}
                    <a href="{{ route('cargo.edit', $cargo->id) }}" class="btn btn-info">
                      <i class="fa fa-edit"></i>
                    </a>
                    <button class="btn btn-danger">
                      <i class="fa fa-trash"></i>
                    </button>
                    {!! Form::close() !!}
                  </div>
                  <!-- CUANDO ESTE EN MODO CELL -->
                  <div class="visible-xs visible-sm hidden-md hidden-lg">
                    <div class="btn-group">
                      <a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                        <i class="fa fa-cog"></i> <span class="caret"></span>
                      </a>
                      <ul role="menu" class="dropdown-menu pull-right dropdown-dark">
                        <li>
                          <a href="{{ route('cargo.edit', $cargo->id) }}" role="menuitem" tabindex="-1">
                            <i class="fa fa-edit"></i> Editar
                          </a>
                        </li>
                        <li>
                          <a href="{{ route('cargo.destroy',$cargo->id)}}"
                             onclick="event.preventDefault();document.getElementById('delete').submit();">
                            <i class="fa fa-trash"></i> Remover
                          </a>
                          {!! Form::open(['method'=>'DELETE', 'route'=>['cargo.destroy',$cargo->id], 'id'=>'delete']) !!}
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
      </div>
    </div>
    <br>
  </section>
@endsection