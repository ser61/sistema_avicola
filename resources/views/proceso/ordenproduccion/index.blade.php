@extends('layouts.fondo')
@section('content')
  <section class="content-header">
    <h1 align="center">
      * * * * * <b>P R O C E S O</b> * * * * *
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
          <h3 align="center">Panel de control de  <span class="text-bold">Orden de Produccion</span></h3>
        </div>
       
          <!-- fin-> TITULO DE PANEL -->
        @if(count($cantidad) > 0)
        @include('proceso.ordenproduccion.search')
          <!-- CUADRO DE BUSQUEDA -->
        
        <!-- fin-> CUADRO DE BUSQUEDA -->

        <!-- TABLA DE DATOS -->

        <div class="box-body">
          <table class="table table-bordered" style="border-top-color: #00AEFF">
            <thead>
            <tr>
              <th class="center">id</th>
              <th class="center">Fecha</th>
              <th class="center">Hora</th>
              <th class="center">Observacion</th>
              <th class="center">Id empleado</th>
              <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($ordenes as $ord)
              <tr>
                <td class="center">{{$ord->id}}</td>
                <td class="center">{{$ord->fecha}}</td>
                <td class="center">{{$ord->hora}}</td>
                <td class="center">{{$ord->observacion}}</td>
                <td class="center">{{$ord->idEmpleado}}</td>
                <td>
                  <a href="{{URL::action('OrdenProduccionController@show',$ord->id)}}" class="btn btn-info" data-placement="top" data-original-title="Ver Detalle de Orden de Produccion"><i class="fa fa-bars"></i></a>
                  
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        {{$ordenes->links()}}
        <!-- fin-> TABLA DE DATOS -->
        @else
          <div class="box">
            <div class="box-header">
              <h3 align="center"><b>Aun no tiene ningun Orden de Produccion...</b></h3>
            </div>
            <div class="box-body">
              <br>
              <p align="center">Bienvenido a la seccion de Orden de Produccion, para agregar una nueva Orden, haga click en icono de mas.</p>
              <br>
              <div class="col-md-6 col-sm-offset-3">
                <a href="ordenproduccion/create"><button type="button" class="btn btn-danger btn-block" data-backdrop=”false”>
                  <i class="fa fa-plus"></i>
                </button></a>
                

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