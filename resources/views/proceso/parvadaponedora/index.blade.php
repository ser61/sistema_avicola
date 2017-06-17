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
          <h3 align="center">Panel de control de las <span class="text-bold">Parvada Ponedora</span></h3>
          @include('alertas.logrado')
        </div>
       
          <!-- fin-> TITULO DE PANEL -->
        @if(count($cantidad) > 0)
        @include('proceso.parvadaponedora.search')
          <!-- CUADRO DE BUSQUEDA -->
        
        <!-- fin-> CUADRO DE BUSQUEDA -->

        <!-- TABLA DE DATOS -->

        <div class="box-body">
          <table class="table table-bordered" style="border-top-color: #00AEFF">
            <thead>
            <tr>
              <th class="center">id</th>
              <th class="center">Cant. Pollos</th>
              <th class="center">Sexo</th>
              <th class="center">Edad</th>
              <th class="center">Peso Prom.</th>
              <th class="center">Caracteristicas</th>
              <th class="center">Huevos Recolectados</th>
              <th class="center">Tipo</th>
              <th class="center">Mortalidad</th>
              <th class="center">Estado</th>
              <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($parvadas as $par)
              <tr>
                <td class="center">{{$par->id}}</td>
                <td class="center">{{$par->cantidadPollos}}</td>
                <td class="center">{{$par->sexo}}</td>
                <td class="center">{{$par->edad}}</td>
                <td class="center">{{$par->pesoPromedio}}</td>
                <td class="center">{{$par->caracteristicas}}</td>
                <td class="center">{{$par->productividad}}</td>
                <td class="center">{{$par->tipo}}</td>
                <td class="center">{{$par->mortalidad}}</td>
                <td class="center"><span class="text-bold">{{$par->visible}}</span></td>
                <td class="center">
                  
                   <a href="" data-target="#modal-delete-{{$par->id}}" data-toggle="modal" class="btn btn-danger" data-placement="top" data-original-title="Finalizar Ciclo Reproductivo"><i class="fa fa-times fa fa-white"></i></a>
                </td>
              </tr>
              @include('proceso.parvadaponedora.modal')
            @endforeach
            </tbody>
          </table>
        </div>
        {{$parvadas->links()}}
        <!-- fin-> TABLA DE DATOS -->
        @else
          <div class="box">
            <div class="box-header">
              <h3 align="center"><b>Aun no tiene ninguna Parvada Ponedora...</b></h3>
            </div>
            <div class="box-body">
              <br>
              <p align="center">Bienvenido a la seccion de Parvadas Ponedora, para agregar una nueva Parvada, haga click en icono de mas.</p>
              <br>
              <div class="col-md-6 col-sm-offset-3">
                <a href="parvadaponedora/create"><button type="button" class="btn btn-danger btn-block" data-backdrop=”false”>
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