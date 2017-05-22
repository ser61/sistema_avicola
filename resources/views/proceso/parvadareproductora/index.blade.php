@extends('layouts.fondo')
@section('content')
  <!-- start: PAGE HEADER -->
  <!-- start: TOOLBAR -->
  <div class="toolbar row">
    <div class="page-header">
      <h1 style="text-align: center;">* * * P R O C E S O * * *
        <small> Sección de Parvada de Reproductora </small>
      </h1>
    </div>
  </div>
  <!-- end: TOOLBAR -->
  <!-- end: PAGE HEADER -->
  <br>
  <div class="row">
    <div class="col-md-12">
      <!-- start: BASIC TABLE PANEL -->
      <div class="panel panel-white">
        <div class="panel-heading">
          <h2 class="panel-title center">Panel de control de las <span class="text-bold">Parvada de Reproductora</span></h2>

          <div class="panel-tools">
            <div class="dropdown">
              <a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
                <i class="fa fa-cog"></i>
              </a>
              <ul class="dropdown-menu dropdown-light pull-right" role="menu">
                <li>
                  <a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
                </li>
                <li>
                  <a class="panel-refresh" href="#"> <i class="fa fa-refresh"></i> <span>Refresh</span> </a>
                </li>
                <li>
                  <a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="panel-body">
        @include('proceso.parvadareproductora.search')
        @include('alertas.logrado')
          

          <table class="table table-hover" id="sample-table-1">
            <thead>
            <tr>
              <th class="center">id</th>
              <th class="center">Cant. Pollos</th>
              <th class="center">Sexo</th>
              <th class="center">Edad</th>
              <th class="center">Peso Prom.</th>
              <th class="center">Caracteristicas</th>
              <th class="center">Productividad</th>
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
                	
					<a href="" data-target="#modal-delete-{{$par->id}}" data-toggle="modal" class="btn btn-xs btn-red tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
                </td>
              </tr>
              @include('proceso.parvadareproductora.modal')
            @endforeach
            </tbody>
           
          </table>

          
        </div>
      </div>
      <!-- end: BASIC TABLE PANEL -->
    </div>
  </div>
  <br>
@endsection