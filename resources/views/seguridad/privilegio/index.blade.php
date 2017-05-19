@extends('layouts.fondo')
@section('content')
  <section class="content-header">
    <h1 align="center">
      * * * * * <b>P R I V I L E G I O S</b> * * * * *
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
            <h3 align="center">Panel de Privilegios de los <span class="text-bold">Cargos</span></h3>
          </div>
            <!-- fin-> TITULO DE PANEL -->
          @if(count($cargos) > 0)
            <!-- CUADRO DE BUSQUEDA -->
          <div class="panel panel-blue">
            <div class="panel-body">
              @include('alertas.logrado')
              @include('alertas.request')
              <div class="input-group margin">
                <input type="text" class="form-control" placeholder="Buscar por Nombre">
              <span class="input-group-btn">
                <button type="button" class="btn btn-info btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
              </div>
            </div>
          </div>
          <!-- fin-> CUADRO DE BUSQUEDA -->

          <!-- TABLA DE DATOS -->
          <div class="box-body">
            <table class="table table-bordered" style="border-top-color: #00AEFF">
              <thead>
              <tr>
                <th>Cargo</th>
                <th>Privilegio</th>
                <th>Opciones</th>
              </tr>
              </thead>
              <tbody>
              @foreach($cargos as $cargo)
                <tr>
                  <td>{{$cargo->nombre}}</td>
                  {!!Form::open(['route'=> ['privilegio.edit', $cargo->id], 'method'=>'GET'])!!}
                  <td>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group-lg">
                          {!! Form::select('modulo',$modulos, null, [
                          'class'=>'form-control select2',
                          'placeholder'=>'Seleccion un modulo...',
                          'style' => '"width: 100px;"'
                          ]) !!}
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="center">
                    <button class="btn btn-info">
                      <i class="fa fa-edit"></i>
                    </button>
                  </td>
                  {!! Form::close() !!}
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
          <!-- fin-> TABLA DE DATOS -->
          @else
            <div class="box">
              <div class="box-header">
                <h3 align="center"><b>Aun no tiene ninguna Cargo...</b></h3>
              </div>
              <div class="box-body">
                <br>
                <p align="center">Bienvenido a la seccion de Privilegios, para asignar Privilegios a un Cargo es necesario que haya creado uno.
                  Haga click en el icono de más para agregar un cargo.</p>
                <br>
                <div class="col-md-6 col-sm-offset-3">
                  <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#create" data-backdrop=”false”>
                    <i class="fa fa-plus"></i>
                  </button>

                </div>
              </div>
            </div>
          @endif
        </div>
      </div>
    </div>
  </section>
@endsection
@push('scripts')
<script>
  function comenzar(){
    $(".select2").select2();
  }
  window.addEventListener("load",comenzar, false);
</script>
@endpush