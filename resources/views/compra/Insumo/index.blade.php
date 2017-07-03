@extends('layouts.fondo')
@section('content')
  <section class="content-header">
    <h1 align="center">
      * * * * * <b>C O M P R A</b> * * * * *
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
            <h3 align="center">Panel de control de los <span class="text-bold">Insumos</span></h3>
          </div>
          @include('compra.insumo.modals.insumo_create')
            <!-- fin-> TITULO DE PANEL -->
          @if(count($insumos) > 0)
            <!-- CUADRO DE BUSQUEDA -->
          <div class="panel panel-blue">
            <div class="panel-body">
              @include('alertas.logrado')
              @include('alertas.request')
              <div class="input-group margin">
                <input id="search" type="text" class="form-control" placeholder="Buscar por Nombre">
              <span class="input-group-btn">
                <button type="button" class="btn btn-info btn-flat">
                  <i class="fa fa-search"></i>
                </button>
                <button type="button" class="btn btn-danger btn-flat" data-toggle="modal" data-target="#create" data-backdrop=”false”>
                  <i class="fa fa-plus"></i>
                </button>
              </span>
              </div>
            </div>
          </div>
          <!-- fin-> CUADRO DE BUSQUEDA -->

          <!-- TABLA DE DATOS -->
          <div id="tbody" class="box-body">
            <table class="table table-bordered" style="border-top-color: #00AEFF">
              <thead>
              <tr>
                <th class="center">ID</th>
                <th>Nombre</th>
                <th class="hidden-sm hidden-xs">Descripcion</th>
                <th>Tipo Insumo</th>
                <th>Opciones</th>
              </tr>
              </thead>
              <tbody>
              @foreach($insumos as $insumo)
                <tr>
                  <td class="center">{{$insumo->id}}</td>
                  <td>{{$insumo->nombre}}</td>
                  <td class="hidden-xs">{{$insumo->descripcion}}</td>
                  <td>{{$insumo->tipoInsumo}}</td>
                  <td class="center">
                    <!-- CUANDO ESTE EN PANTALLA COMPLETA -->
                    <div class="visible-md visible-lg hidden-sm hidden-xs">
                      {!! Form::open(['method'=>'DELETE', 'route'=>['insumo.destroy',$insumo->id]]) !!}
                      <a href="{{ route('insumo.edit', $insumo->id) }}" class="btn btn-info">
                        <i class="fa fa-edit"></i>
                      </a>
                      <button class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                      </button>
                      {!! Form::close() !!}
                    </div>
                    <!-- CUANDO ESTE EN MODO CELL -->
                    <div class="visible-xs visible-sm hidden-md hidden-lg">
                      <div class="btn-group">
                        <a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                          <i class="fa fa-cog"></i> <span class="caret"></span>
                        </a>
                        <ul role="menu" class="dropdown-menu pull-right dropdown-dark">
                          <li>
                            <a href="{{ route('insumo.edit', $insumo->id) }}" role="menuitem" tabindex="-1">
                              <i class="fa fa-edit"></i> Editar
                            </a>
                          </li>
                          <li>
                            <a href="{{ route('insumo.destroy',$insumo->id)}}"
                               onclick="event.preventDefault();document.getElementById('delete').submit();">
                              <i class="fa fa-trash"></i> Remover
                            </a>
                            {!! Form::open(['method'=>'DELETE', 'route'=>['insumo.destroy',$insumo->id], 'id'=>'delete']) !!}
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
            {{ $insumos->links() }}
          </div>
          <!-- fin-> TABLA DE DATOS -->
          @else
            <div class="box">
              <div class="box-header">
                <h3 align="center"><b>Aun no tiene ninguna Insumo...</b></h3>
              </div>
              <div class="box-body">
                <br>
                <p align="center">Bienvenido a la seccion de Insumos, para agregar un nuevo insumo, haga click en boton de mas.</p>
                <br>
                <div class="col-md-6 col-sm-offset-3">
                  <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#create" data-backdrop=”false”>
                    <i class="fa fa-plus"></i>
                  </button>
                </div>
              </div>
              <br>
            </div>
          @endif
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
      url: "{{url('searchinsumos/')}}",
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
    insumos(page, $('#search').val());
  });

  function insumos(page, search) {
    var url = "{{url('searchPaginateinsumos/')}}";
    $.ajax({
      type: 'GET',
      url: url + '?page=' + page,
      data: {'search': search},
    }).done(function (data) {
      $('#tbody').html(data);
    })
  }

  $("#insumo").change(mostrarCampo);

  function mostrarCampo(){
    var dato = document.getElementById('insumo').value;
    if (dato == 2){
      eliminar();
      var div = $('#insumoBody');
      var label = '<label id="milabel" for="insumo">Seleccione el tipo Medicamento</label>';
      var select = ''+
        '<select name="tipo" class="form-control select2" id="tipo" placeholder="Seleccion un tipo">' +
          '<option value="1">Aereo</option>' +
          '<option value="2">Venereo</option>' +
          '<option value="3">Rozamiento</option>' +
          '<option value="4">liquido</option>' +
        '</select>';

      div.append(label);
      div.append(select);
      document.getElementById('insumoBody').style.display = 'block';
    }else if(dato == 3){
      eliminar();
      var div = $('#insumoBody');
      var label = '<label id="milabel" for="insumo">Seleccione el tipo Producto Sanitario</label>';
      var select = ''+
        '<select name="tipo" class="form-control select2" id="tipo" placeholder="Seleccion un tipo">' +
        '<option value="1">Pesticida</option>' +
        '<option value="2">Bactericida</option>' +
        '<option value="3">Legia</option>' +
        '</select>';

      div.append(label);
      div.append(select);
      document.getElementById('insumoBody').style.display = 'block';
    }else{
      eliminar();
      document.getElementById('insumoBody').style.display = 'none';
    }

  }

  function eliminar(){
    $("#milabel").remove();
    $("#tipo").remove();
  }
</script>
@endpush