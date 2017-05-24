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
          <h3 align="center">Panel de control de <span class="text-bold">Traspaso de Lote de Huevos</span></h3>
        </div>
       
          <!-- fin-> TITULO DE PANEL -->
        @if(count($cantidad) > 0)
        @include('proceso.traspasolotehuevo.search')
          <!-- CUADRO DE BUSQUEDA -->
        
        <!-- fin-> CUADRO DE BUSQUEDA -->

        <!-- TABLA DE DATOS -->

        <div class="box-body">
          <table class="table table-bordered" style="border-top-color: #00AEFF">
            <thead>
            <tr>
              <th class="center">id</th>
              <th class="center">id Lote Huevo</th>
              <th class="center">id Etapa</th>
              <th class="center">Fecha</th>
              <th class="center">Cantidad</th>
              <th class="center">Id Equipo</th>
            </tr>
            </thead>
            <tbody>
            @foreach($traspasolotes as $lot)
              <tr>
                <td class="center">{{$lot->id}}</td>
                <td class="center">{{$lot->idLoteHuevoIncubable}}</td>
                <td class="center">{{$lot->idEtapaIncubacion}}</td>
                <td class="center">{{$lot->fecha}}</td>
                <td class="center">{{$lot->cantidad}}</td>
                <td class="center">{{$lot->idEquipo}}</td>
                
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <!-- fin-> TABLA DE DATOS -->
        @else
          <div class="box">
            <div class="box-header">
              <h3 align="center"><b>Aun no tiene ningun Traspaso de Lote de Huevo...</b></h3>
            </div>
            <div class="box-body">
              <br>
              <p align="center">Bienvenido a la seccion de Traspaso de Lote, para agregar un nuevo Traspaso, haga click en icono de mas.</p>
              <br>
              <div class="col-md-6 col-sm-offset-3">
                <a href="traspasolotehuevo/create"><button type="button" class="btn btn-danger btn-block" data-backdrop=”false”>
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