@extends('layouts.fondo')
@section('content')
  <!-- start: PAGE HEADER -->
  <!-- start: TOOLBAR -->
  <div class="toolbar row">
    <div class="page-header">
      <h1 style="text-align: center;">* * * P R O C E S O * * *
        <small> Sección de Etapas de Parvadas </small>
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
          <h2 class="panel-title center">Panel de control de las <span class="text-bold">Etapas de Parvadas</span></h2>

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
        @include('proceso.etapa.search')
        @include('alertas.logrado')
          

          <table class="table table-hover" id="sample-table-1">
            <thead>
            <tr>
              <th class="center">id</th>
              <th class="center">Nombre de Etapa</th>
              <th class="center">Opciones</th>
            </tr>
            </thead>

            <tbody>
            @foreach($etapas as $eta)
              <tr>
              	<td class="center">{{$eta->id}}</td>
                <td class="center">{{$eta->nombre}}</td>
                <td class="center">
                	<a href="{{URL::action('EtapaController@edit',$eta->id)}}" class="btn btn-xs btn-blue tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
					       <a href="" data-target="#modal-delete-{{$eta->id}}" data-toggle="modal" class="btn btn-xs btn-red tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
                </td>
              </tr>
            @include('proceso.etapa.modal')
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