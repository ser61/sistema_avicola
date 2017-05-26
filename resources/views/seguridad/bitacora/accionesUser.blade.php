@extends('layouts.fondo')
@section('content')
  <section class="content-header">
    <h1 align="center">
      * * * * * <b>S E G U R I D A D</b> * * * * *
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{ url('/bitacora') }}">index</a></li>
      <li><a href="javascript:window.history.go(-1);">Bitacora</a></li>
      <li><a href="#">Acciones</a></li>
    </ol>
  </section>
  <br>

  <section class="content">
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <div class="box box-primary">
          <!-- TITULO DE PANEL -->
          <div class="box-header with-border">
            <h3 align="center">Panel de control de Acciones de: <span class="text-bold">{{ $user->name }}</span></h3>
          </div>
            <!-- fin-> TITULO DE PANEL -->
          @if(count($acciones) > 0)
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
                <th>Fecha</th>
                <th>Hora</th>
                <th>Accion</th>
                <th>Tabla</th>
                <th>ID de Tabla</th>
              </tr>
              </thead>
              <tbody>
              @foreach($acciones as $accion)
                <tr>
                  <td><?php echo Carbon\Carbon::createFromFormat('Y-m-d', $accion->fecha)->format('d M Y') ?></td>
                  <td>{{$accion->hora}}</td>
                  <td>{{$accion->accion}}</td>
                  <td>{{$accion->tabla}}</td>
                  <td>{{$accion->idTupla}}</td>
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