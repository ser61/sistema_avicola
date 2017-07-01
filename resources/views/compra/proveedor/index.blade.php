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
            <h3 align="center">Panel de control de los <span class="text-bold">Proveedores</span></h3>
          </div>
          <!-- fin-> TITULO DE PANEL -->
          <div class="box-body table-responsive">
            @if(count($proveedores) > 0 )
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
                  <a href="{{ url('proveedor/create') }}" class="btn btn-danger btn-flat">
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
                  <th>Nombre(s)</th>
                  <th>Apellido(s)</th>
                  <th class="hidden-xs">Direccion</th>
                  <th>E-mail</th>
                  <th>Empresa</th>
                  <th>Opcion</th>
                </tr>
                </thead>
                <tbody>
                @foreach($proveedores as $proveedor)
                  <tr>
                    <td class="center">{{$proveedor->ci}}</td>
                    <td>{{$proveedor->nombre}}</td>
                    <td>{{$proveedor->apellido}}</td>
                    <td class="hidden-xs">{{$proveedor->direccion}}</td>
                    <td>{{$proveedor->email}}</td>
                    <td>{{$proveedor->empresa}}</td>
                    <td class="center">
                      <div class="visible-md visible-lg hidden-sm hidden-xs">
                        {!! Form::open(['method'=>'DELETE', 'route'=>['proveedor.destroy',$proveedor->id]]) !!}
                        <a href="{{ route('proveedor.edit', $proveedor->id) }}" class="btn btn-xs btn-info">
                          <i class="fa fa-edit"></i>
                        </a>
                        <button class="btn btn-xs btn-danger">
                          <i class="fa fa-trash"></i>
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
                              <a href="{{ route('proveedor.edit', $proveedor->id) }}" role="menuitem" tabindex="-1">
                                <i class="fa fa-edit"></i> Edit
                              </a>
                            </li>
                            <li>
                              <a href="{{ route('proveedor.destroy', $proveedor->id) }}"
                                 onclick="event.preventDefault();document.getElementById('delete').submit();">
                                <i class="fa fa-trash"></i> Remove
                              </a>
                              {!! Form::open(['method'=>'DELETE', 'route'=>['proveedor.destroy',$proveedor->id], 'id'=>'delete']) !!}
                              {!! Form::close() !!}
                            </li>
                          </ul>
                        </div>
                      </div>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
              {{ $proveedores->links() }}
            </div>
            <!-- fin-> TABLA DE DATOS -->
            @else
              <div class="box">
                <div class="box-header">
                  <h3 align="center"><b>Aun no tiene ninguna Proveedor...</b></h3>
                </div>
                <div class="box-body">
                  <br>
                  <p align="center">Bienvenido a la seccion de Proveedores, para agregar un nuevo Proveedor,</p>
                  <p align="center">haga click en el icono de más.</p>
                  <br>
                  <div class="col-md-6 col-sm-offset-3">
                    <a href="{{ route('proveedor.create') }}" type="button" class="btn btn-danger btn-block">
                      <i class="fa fa-plus"></i>
                    </a>
                  </div>
                </div>
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
      url: "{{url('searchproveedors/')}}",
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
    proveedors(page, $('#search').val());
  });

  function proveedors(page, search) {
    var url = "{{url('searchPaginateproveedors/')}}";
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