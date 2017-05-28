@extends('layouts.fondo')
@section('content')
  <section class="content-header">
    <h1 align="center">
      * * * * * <b>S E G U R I D A D</b> * * * * *
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
            <h3 align="center">Panel de control de <span class="text-bold">Backups</span></h3>
          </div>
          <div class="box-body table-responsive">
            @if (count($backups) > 0)
              <div class="panel panel-blue">
                <div class="panel-body">
                  @include('alertas.logrado')
                  @include('alertas.error')
                  <div class="col-xs-12 clearfix">
                    <button class="btn btn-primary pull-right" style="margin-bottom:2em;" data-toggle="modal" data-target=".bs-example-modal-sm">
                      <i class="fa fa-plus"></i> Crear un Nuevo Backup
                    </button>
                  </div>
                </div>
              </div>
              @include('seguridad.backup.create_model')
                <!-- fin-> TITULO DE PANEL -->
              <table class="table table-bordered table-hover" style="border-top-color: #00AEFF">
                <thead>
                  <tr>
                    <th>Nro</th>
                    <th>Nombre</th>
                    <th>Fecha</th>
                    <th class="text-center">Opciones</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($backups as $backup)
                  <tr>
                    <td>{{ $backup['id'] }}</td>
                    <td>{{ $backup['nombre'] }}</td>
                    <td>{{ $backup['fecha']}}</td>
                    <td class="text-center">
                      {!! Form::open(['method'=>'DELETE', 'route'=>['backup.delete',$backup->id]]) !!}
                      <a href="{{ route('backup.download', $backup->id) }}" class="btn btn-xs btn-success">
                        <i class="fa fa-download"></i> Bajar
                      </a>
                      <a href="{{ route('backup.restore', $backup->id) }}" class="btn btn-xs btn-info">
                        <i class="fa fa-upload"></i> Restaurar
                      </a>
                      <button class="btn btn-xs btn-danger">
                        <i class="fa fa-trash"></i> Eliminar
                      </button>
                      {!! Form::close() !!}
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            @else
              <div class="box-header">
                <h3 align="center"><b>Aun no tiene ningun BackUp...</b></h3>
              </div>
              <div class="box-body">
                <br>
                <p align="center">Bienvenido a la seccion de BackUp, para crear un nuevo BackUp,</p>
                <p align="center">haga click en el boton de <b>"Crear un Nuevo Backup"</b>.</p>
                <br>
                <div class="col-md-6 col-sm-offset-3">
                  <a type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target=".bs-example-modal-sm">
                    <i class="fa fa-plus"></i> Crear un Nuevo Backup
                  </a>
                </div>
              </div>
              @include('seguridad.backup.create_model')
            @endif
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection