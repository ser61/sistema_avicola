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
            <h3 align="center">Panel de control de los <span class="text-bold">Empleados</span></h3>
          </div>
          <!-- fin-> TITULO DE PANEL -->
          <div class="box-body table-responsive">
            @if(count($cargos) > 0 && count($empleados) > 0)
              <!-- CUADRO DE BUSQUEDA -->
              <div class="panel panel-blue">
                <div class="panel-body">
                  @include('alertas.logrado')
                  @include('alertas.request')
                  <div class="input-group margin">
                    <input id="search" type="text" class="form-control" placeholder="Buscar por Nombre, apellido, ci o cargo...">
                <span class="input-group-btn">
                  <button type="button" class="btn btn-info btn-flat">
                    <i class="fa fa-search"></i>
                  </button>
                  <a href="{{ url('empleado/create') }}" class="btn btn-danger btn-flat">
                    <i class="fa fa-plus"></i>
                  </a>
                </span>
                  </div>
                </div>
              </div>
              <!-- fin-> CUADRO DE BUSQUEDA -->

              <!-- TABLA DE DATOS -->
              <div id="tbody" class="box-body table-responsive">
                <table class="table table-bordered table-hover" style="border-top-color: #00AEFF">
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
                  <th>Opcion</th>
                </tr>
                </thead>
                <tbody>
                @foreach($empleados as $empleado)
                <tr>
                  <td class="center">{{$empleado->ci}}</td>
                  <td class="hidden-xs">
                    <img src='usuarios/{{$empleado->foto}}' class="img-circle" alt=""  style="width: 30px; height: 30px;">
                  </td>
                  <td>{{$empleado->nombre}}</td>
                  <td>{{$empleado->apellido}}</td>
                  <td class="hidden-xs">{{$empleado->direccion}}</td>
                  <td class="hidden-xs">{{$empleado->fechaNacimiento}}</td>
                  <td>{{$empleado->fechaIngreso}}</td>
                  <td>{{$empleado->cargo}}</td>
                  <td class="center">
                    @include("seguridad.empleado.phones")
                    <div class="visible-md visible-lg hidden-sm hidden-xs">
                      {!! Form::open(['method'=>'DELETE', 'route'=>['empleado.destroy',$empleado->id]]) !!}
                      <a href="{{ route('empleado.edit', $empleado->id) }}" class="btn btn-xs btn-info">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-xs btn-danger">
                        <i class="fa fa-trash"></i>
                      </button>
                      <a type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#phones{{$empleado->id}}">
                        <i class="fa fa-phone"></i>
                      </a>
                      {!! Form::close() !!}
                    </div>
                    <div class="visible-xs visible-sm hidden-md hidden-lg">
                      <div class="btn-group">
                        <a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                          <i class="fa fa-cog"></i> <span class="caret"></span>
                        </a>
                        <ul role="menu" class="dropdown-menu pull-right dropdown-dark">
                          <li>
                            <a href="{{ route('empleado.edit', $empleado->id) }}" role="menuitem" tabindex="-1">
                              <i class="fa fa-edit"></i> Edit
                            </a>
                          </li>
                          <li>
                            <a href="{{ route('empleado.destroy', $empleado->id) }}"
                               onclick="event.preventDefault();document.getElementById('delete').submit();">
                              <i class="fa fa-trash"></i> Remove
                            </a>
                            {!! Form::open(['method'=>'DELETE', 'route'=>['empleado.destroy',$empleado->id], 'id'=>'delete']) !!}
                            {!! Form::close() !!}
                          </li>
                          <li>
                            <a type="button" href="" role="menuitem" data-toggle="modal" data-target="#phones{{$empleado->id}}">
                              <i class="fa fa-phone"></i> Ver
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
                {{ $empleados->links() }}
              </div>
              <!-- fin-> TABLA DE DATOS -->
            @else
              <div class="box">
                @if(count($cargos) == 0)
                  <div class="box-header">
                    <h3 align="center"><b>Aun no tiene ninguna Cargo...</b></h3>
                  </div>
                  <div class="box-body">
                    <br>
                    <p align="center">Bienvenido a la seccion de Empleados, para agregar un nuevo Empleado,</p>
                    <p align="center">es necesario que cree al menos un cargo</p>
                    <p align="center">haga click en el icono de más.</p>
                    <br>
                    <div class="col-md-6 col-sm-offset-3">
                      <a href="{{ url('cargo/') }}" type="button" class="btn btn-danger btn-block">
                        <i class="fa fa-plus"></i>
                      </a>
                    </div>
                  </div>
                @elseif(count($empleados) == 0)
                  <div class="box-header">
                    <h3 align="center"><b>Aun no tiene ninguna Empleado...</b></h3>
                  </div>
                  <div class="box-body">
                    <br>
                    <p align="center">Bienvenido a la seccion de Empleados, para agregar un nuevo Empleado, haga click en icono de más.</p>
                    <br>
                    <div class="col-md-6 col-sm-offset-3">
                      <a href="{{ url('empleado/create') }}" type="button" class="btn btn-danger btn-block">
                        <i class="fa fa-plus"></i>
                      </a>
                    </div>
                  </div>
                @endif
              </div>
            @endif
          </div>
        </div>
      </div>
    </div>
    <br>
  </section>
@endsection
@push('scripts')
<script type="text/javascript">

  $('#search').on('keyup', function () {
    $value = $(this).val();
    $.ajax({
      type: 'GET',
      url: "{{url('searchEmpleados/')}}",
      data: {'search': $value},
      success: function (data) {
        console.log(data);
        $('#tbody').html(data);
      }
    });
  });

  $(document).on('click', '.pagination a', function (e) {
    e.preventDefault();
    var page = $(this).attr('href').split('page=')[1];
    empleados(page, $('#search').val());
  });

  function empleados(page, search) {
    var url = "{{url('searchPaginateEmpleados/')}}";
    $.ajax({
      type: 'GET',
      url: url + '?page=' + page,
      data: {'search': search},
    }).done(function (data) {
      $('#tbody').html(data);
    })
  }

</script>
@endpush