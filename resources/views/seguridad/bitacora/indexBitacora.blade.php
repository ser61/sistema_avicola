@extends('layouts.fondo')
@section('content')
  <section class="content-header">
    <h1 align="center">
      * * * * * <b>S E G U R I D A D</b> * * * * *
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Bitacora</a></li>
    </ol>
  </section>
  <br>

  <section class="content">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
        <div class="box box-primary">
          <!-- TITULO DE PANEL -->
          <div class="box-header with-border">
            <h3 align="center">Panel de <span>Bitacoras</span></h3>
          </div>
          <!-- fin-> TITULO DE PANEL -->
          <div class="box-body">

            <!-- TABLA DE DATOS -->
            <div class="row">
              <div class="col-lg-4 col-lg-offset-2 col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2" style="margin-bottom: 5px">
                <a href="{{ url('/bitacora') }}" class="btn-info btn-lg btn-block" style="text-align: center">
                  Usuarios
                </a>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4" style="margin-bottom: 5px">
                <a href="{{ url('/bitacoras') }}" class="btn-info btn-lg btn-block" style="text-align: center">
                  Bitacoras
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-8 col-lg-offset-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    @include('alertas.logrado')
                    @include('alertas.error')
                    <div class="input-group margin">
                      <input id="search" type="text" class="form-control" placeholder="Buscar por fecha: año-mes-dia">
                      <span class="input-group-btn">
                        <button type="button" class="btn btn-info btn-flat">
                          <i class="fa fa-search"></i>
                        </button>
                      </span>
                    </div>
                  </div>
                </div>
                @if(count($bitacoras) > 0)
                  <div id="tbody" class="box-body table-responsive">
                    <table class="table table-bordered table-hover" style="border-top-color: #00AEFF">
                      <thead>
                      <tr>
                        <th class="col-sm-2">Nro</th>
                        <th class="col-sm-2">Fecha</th>
                        <th class="col-sm-1">Acciones</th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach($bitacoras as $bitacora)
                        <tr>
                          <td>{{$bitacora->id}}</td>
                          <td>{{ $bitacora->created_at->format('d M Y') }}</td>
                          <td class="center">
                            <a href="{{ route('bitacora.showAcciones', [$bitacora->id]) }}" type="button" class="btn btn-xs btn-info">
                              <i class="fa fa-eye"></i> Ver
                            </a>
                          </td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                    {{ $bitacoras->links() }}
                  </div>
                @else
                  <div class="box-header">
                    <h3 align="center"><b>Aun no se ha registrado ninguna bitacora.</b></h3>
                  </div>
                @endif
              </div>
            </div>

            <!-- fin-> TABLA DE DATOS -->
            <br>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
@push('scripts')
<script type="text/javascript">
  $('#search').on('keyup', function () {
    $value = $(this).val();
    $.ajax({
      type: 'GET',
      url: "{{url('searchBitacoras/')}}",
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
    bitacoras(page, $('#search').val());
  });

  function bitacoras(page, search) {
    var url = "{{url('searchPaginateBitacoras/')}}";
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