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
          <h3 align="center">Panel de control de <span class="text-bold">Traspaso de Parvada</span></h3>
          @include('alertas.logrado')
        </div>
       
          <!-- fin-> TITULO DE PANEL -->
        @if(count($cantidad) > 0)
        @include('proceso.traspasoparvada.search')
          <!-- CUADRO DE BUSQUEDA -->
        
        <!-- fin-> CUADRO DE BUSQUEDA -->

        <!-- TABLA DE DATOS -->

        <div class="box-body">
          <table class="table table-bordered" style="border-top-color: #00AEFF">
            <thead>
            <tr>
              <th class="center">id</th>
              <th class="center">Fecha</th>
              <th class="center">Cantidad</th>
              <th class="center">Id Galpon</th>
              <th class="center">id Parvada</th>
              <th class="center">Id Etapa</th>
            </tr>
            </thead>
            <tbody>
            @foreach($traspasoparvadas as $par)
              <tr>
                <td class="center">{{$par->id}}</td>
                <td class="center">{{$par->fecha}}</td>
                <td class="center">{{$par->cantidad}}</td>
                <td class="center">{{$par->idGalpon}}</td>
                <td class="center">{{$par->idParvada}}</td>
                <td class="center">{{$par->idEtapa}}</td>
                
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        {{$traspasoparvadas->links()}}
        <!-- fin-> TABLA DE DATOS -->
        @else
          <div class="box">
            <div class="box-header">
              <h3 align="center"><b>Aun no tiene ningun Traspaso de Parvada...</b></h3>
            </div>
            <div class="box-body">
              <br>
              <p align="center">Bienvenido a la seccion de Traspaso de Parvada, para agregar un nuevo Traspaso, haga click en icono de mas.</p>
              <br>
              <div class="col-md-6 col-sm-offset-3">
                <a href="traspasoparvada/create"><button type="button" class="btn btn-danger btn-block" data-backdrop=”false”>
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