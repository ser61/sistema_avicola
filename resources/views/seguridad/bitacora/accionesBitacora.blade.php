@extends('layouts.fondo')
@section('content')
  <section class="content-header">
    <h1 align="center">
      * * * * * <b>S E G U R I D A D</b> * * * * *
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="javascript:window.history.go(-1);">Bitacora</a></li>
      <li><a href="#">Acciones</a></li>
    </ol>
  </section>
  <br>

  <section class="content">
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <div class="box box-primary">
          <!-- TITULO DE PANEL -->
          <div class="box-header with-border">
            <h3 align="center">Panel de control de <span>Acciones</span></h3>
          </div>
          <!-- fin-> TITULO DE PANEL -->
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
                <th>Fecha</th>
                <th>Hora</th>
                <th>Accion</th>
                <th>Tabla</th>
                <th>ID de Tabla</th>
              </tr>
              </thead>
              <tbody>
              @foreach($acciones as $accion)
                <tr>
                  <td><?php echo Carbon\Carbon::createFromFormat('Y-m-d', $accion->fecha)->format('d M Y') ?></td>
                  <td>{{$accion->hora}}</td>
                  <td>{{$accion->accion}}</td>
                  <td>{{$accion->tabla}}</td>
                  <td>{{$accion->idTupla}}</td>
                </tr>
              @endforeach
              </tbody>
            </table>
            {{ $acciones->links() }}
          </div>
          <!-- fin-> TABLA DE DATOS -->
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
    $id = '{{ $id }}';
    $.ajax({
      type: 'GET',
      url: "{{url('searchAcciones/')}}",
      data: {'search': $value, 'id': $id},
      success: function (data) {
        console.log(data);
        $('#tbody').html(data);
      }
    });
  });

  $(document).on('click', '.pagination a', function (e) {
    e.preventDefault();
    var page = $(this).attr('href').split('page=')[1];
    acciones(page, $('#search').val());
  });

  function acciones(page, search) {
    var url = "{{url('searchPaginateAcciones/')}}";
    var id = '{{ $id }}';
    $.ajax({
      type: 'GET',
      url: url + '?page=' + page,
      data: {'search': search, 'id': id},
    }).done(function (data) {
      $('#tbody').html(data);
    })
  }
</script>
@endpush