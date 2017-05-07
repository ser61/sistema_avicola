@extends('layouts.fondo')
@section('content')
  <!-- start: PAGE HEADER -->
<!-- start: TOOLBAR -->
<div class="toolbar row">
  <div class="page-header">
    <h1 style="text-align: center;">* * * S E G U R I D A D * * *
      <small> Sección de los Empleados </small>
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
        <h2 class="panel-title center">Panel de control de los <span class="text-bold">Empleados</span></h2>

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
        @include('alertas.logrado')
        <div class="panel panel-blue">
          <div class="panel-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Buscar por Nombre...">
                <span class="input-group-btn">
                  <button class="btn btn-main-color btn-squared" type="button">
                    <i class="fa fa-search"></i>
                  </button> </span>
              </span>
                <span class="input-group-btn">
                  <a href="{{ url('/empleado/create') }}" class="btn btn-red btn-squared">
                    <i class="fa fa-plus"></i>
                  </a>
                </span>
            </div>
          </div>
        </div>

        <table class="table table-hover" id="sample-table-1">
          <thead>
          <tr>
            <th class="center">ci</th>
            <th class="hidden-xs">Foto</th>
            <th>Nombre(s)</th>
            <th>Apellido(s)</th>
            <th class="hidden-xs">Direccion</th>
            <th class="hidden-xs">Fecha Nacimiento</th>
            <th>Fecha Ingreso</th>
            <th>Cargo</th>
            <th></th>
          </tr>
          </thead>
          <tbody>
          @foreach($empleados as $empleado)
            <tr>
              <td class="center">{{$empleado->ci}}</td>
              <td class="hidden-xs">
                  <img src='usuarios/{{$empleado->foto}}' class="img-circle" alt=""  style="width: 60px; height: 60px;">
              </td>
              <td>{{$empleado->nombre}}</td>
              <td>{{$empleado->apellido}}</td>
              <td class="hidden-xs">{{$empleado->direccion}}</td>
              <td class="hidden-xs">{{$empleado->fechaNacimiento}}</td>
              <td>{{$empleado->fechaIngreso}}</td>
              <td>{{$empleado->idCargo}}</td>
              <td class="center">
                <div class="visible-md visible-lg hidden-sm hidden-xs">
                  {!! Form::open(['method'=>'DELETE', 'route'=>['empleado.destroy',$empleado->id]]) !!}
                  <a href="{{ route('empleado.edit', $empleado->id) }}" class="btn btn-xs btn-blue tooltips" data-placement="top" data-original-title="Edit">
                    <i class="fa fa-edit"></i>
                  </a>
                  <button class="btn btn-xs btn-red tooltips" data-placement="top" data-original-title="Remove">
                    <i class="fa fa-times fa fa-white"></i>
                  </button>
                  {!! Form::close() !!}
                </div>
                <div class="visible-xs visible-sm hidden-md hidden-lg">
                  <div class="btn-group">
                    <a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                      <i class="fa fa-cog"></i> <span class="caret"></span>
                    </a>
                    <ul role="menu" class="dropdown-menu pull-right dropdown-dark">
                      <li>
                        <a role="menuitem" tabindex="-1">
                          <i class="fa fa-edit"></i> Edit
                        </a>
                      </li>
                      <li>
                        <a role="menuitem" tabindex="-1" href="#">
                          <i class="fa fa-times"></i> Remove
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
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