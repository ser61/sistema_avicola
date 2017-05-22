@extends('layouts.fondo')
@section('content')
  <!-- start: PAGE HEADER -->
  <!-- start: TOOLBAR -->
  <div class="toolbar row">
    <div class="page-header">
      <h1 style="text-align: center;">* * * P R O C E S O * * *
        <small> Sección de Orden de Produccion </small>
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
          <h2 class="panel-title center">Panel de control de las <span class="text-bold">Orden de Produccion</span></h2>

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
        @include('proceso.ordenproduccion.search')
        @include('alertas.logrado')
          

          <table class="table table-hover" id="sample-table-1">
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
                	<a href="{{URL::action('OrdenProduccionController@show',$ord->id)}}" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="Ver Detalle de Orden de Produccion"><i class="fa fa-bars"></i></a>
					<a href="" data-target="#modal-delete-{{$ord->id}}" data-toggle="modal" class="btn btn-xs btn-red tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
                </td>
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