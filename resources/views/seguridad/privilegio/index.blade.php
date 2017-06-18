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
            </div>
          </div>
          <!-- fin-> CUADRO DE BUSQUEDA -->

          <!-- TABLA DE DATOS -->
          <div class="panel panel-default" style="margin: 10px">
            <div class="panel-body table-responsive">
              <table id="mitabla2" class="table table-bordered table-hover" style="border-top-color: #00AEFF">
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
                  {!!Form::open(['route'=> ['privilegio.editCargo', $cargo->id], 'method'=>'GET'])!!}
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
          </div>
          <!-- fin-> TABLA DE DATOS -->
          @else
            <div class="box">
              <div class="box-header">
                <h3 align="center"><b>Aun no tiene ninguna Cargo...</b></h3>
              </div>
              <div class="box-body">
                <br>
                <p align="center">Bienvenido a la seccion de Privilegios, para asignar Privilegios a un Cargo es necesario que haya creado al menos un cargo.</p>
                <p align="center">Haga click en el icono de más para agregar un cargo.</p>
                <br>
                <div class="col-md-6 col-sm-offset-3">
                  <a href="{{ url('/cargo') }}" type="button" class="btn btn-danger btn-block">
                    <i class="fa fa-plus"></i>
                  </a>

                </div>
              </div>
            </div>
          @endif
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <div class="box box-primary">
          <!-- TITULO DE PANEL -->
          <div class="box-header with-border">
            <h3 align="center">Panel de Privilegios de los <span class="text-bold">Usuarios</span></h3>
          </div>
          <!-- fin-> TITULO DE PANEL -->
          @if(count($usuarios) > 0)
            <!-- CUADRO DE BUSQUEDA -->
          <div class="panel panel-blue">
            <div class="panel-body">
              @include('alertas.logrado')
              @include('alertas.error')
            </div>
          </div>
          <!-- fin-> CUADRO DE BUSQUEDA -->

          <!-- TABLA DE DATOS -->
          <div class="panel panel-default" style="margin: 10px">
            <div class="panel-body table-responsive">
              <table id="mitabla" class="table table-bordered table-hover" style="border-top-color: #00AEFF">
              <thead>
              <tr>
                <th>Nombre</th>
                <th>Estado</th>
                <th>Privilegio</th>
                <th>Opciones</th>
              </tr>
              </thead>
              <tbody>
              @foreach($usuarios as $usuario)
                <tr>
                  <td class="center">{{$usuario->name}}</td>
                  <td>{{$usuario->estado}}</td>
                  {!!Form::open(['route'=> ['privilegio.editUser', $usuario->id], 'method'=>'GET'])!!}
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
                    <button class="btn btn-xs btn-info">
                      <i class="fa fa-edit"></i>
                    </button>
                  </td>
                  {!! Form::close() !!}
                </tr>
              @endforeach
              </tbody>
            </table>
            </div>
          </div>
          <!-- fin-> TABLA DE DATOS -->
          @else
            <div class="box">
              <div class="box-header">
                <h3 align="center"><b>Aun no tiene ningun Usuario...</b></h3>
              </div>
              <div class="box-body">
                <br>
                <p align="center">Bienvenido a la seccion de Privilegios, para asignar Privilegios a un Usuario es necesario que haya creado al menos uno.</p>
                <p align="center">haga click en icono de mas.</p>
                <br>
                <div class="col-md-6 col-sm-offset-3">
                  <a type="button" href="{{ url('/admin') }}" class="btn btn-danger btn-block">
                    <i class="fa fa-plus"></i>
                  </a>
                </div>
              </div>
            </div>
          @endif
          <br><br><br><br>
        </div>
      </div>
    </div>
  </section>
@endsection
@push('scripts')
<script>
  function comenzar(){
    $(".select2").select2();
    $('#mitabla').DataTable();
    $('#mitabla2').DataTable();
  }
  window.addEventListener("load",comenzar, false);
</script>
@endpush