@extends('layouts.fondo')
@section('content')
  <section class="content-header">
    <h1 align="center">
      * * * * * <b>S E G U R I D A D</b> * * * * *
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{ url('/bitacora') }}">index</a></li>
      <li><a href="#">Bitacora</a></li>
    </ol>
  </section>
  <br>

  <section class="content">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2 col-xs-8">
        <div class="box box-primary">
          <!-- TITULO DE PANEL -->
          <div class="box-header with-border">
            <h3 align="center">Panel de Bitacora de: <span class="text-bold">{{ $user->name }}</span></h3>
          </div>
          <!-- fin-> TITULO DE PANEL -->
          <div class="box-body">

              <!-- CUADRO DE BUSQUEDA -->
            <div class="panel panel-blue">
              <div class="panel-body">
                @include('alertas.logrado')
                @include('alertas.error')

                {{--<div class="row">

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

                </div>--}}

              </div>
            </div>
            <!-- fin-> CUADRO DE BUSQUEDA -->

            <!-- TABLA DE DATOS -->
            <div class="row">
              <div class="col-lg-6 col-lg-offset-3">
                <table class="table table-bordered table-hover" style="border-top-color: #00AEFF">
                  <thead>
                  <tr>
                    <th class="col-sm-2">Nro</th>
                    <th class="col-sm-2">Fecha</th>
                    <th class="col-sm-1">Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($bitacoras as $bitacora)
                    <tr>
                      <td>{{$bitacora->id}}</td>
                      <td>{{$bitacora->fecha}}</td>
                      <td class="center">
                        <a href="{{ route('bitacora.showAccionesUser', [$bitacora->id, $bitacora->idUser]) }}" type="button" class="btn btn-xs btn-info">
                          <i class="fa fa-eye"></i> Ver
                        </a>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>

            <!-- fin-> TABLA DE DATOS -->
            <br>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection