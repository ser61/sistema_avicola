@extends('layouts.fondo')
@section('content')
  <!-- start: PAGE HEADER -->
  <!-- start: TOOLBAR -->
  <div class="toolbar row">
    <div class="page-header">
      <h1 style="text-align: center;">* * * P R O C E S O * * *
        <small> Sección de Traspaso de Parvada </small>
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
          <h2 class="panel-title center">Panel de control de <span class="text-bold">Traspaso de Parvada</span></h2>

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
        @include('proceso.traspasoparvada.search')
        @include('alertas.logrado')
          

          <table class="table table-hover" id="sample-table-1">
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
      </div>
      <!-- end: BASIC TABLE PANEL -->
    </div>
  </div>
  <br>
@endsection