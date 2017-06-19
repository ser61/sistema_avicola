@if( count($bitacoras) > 0)
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
          <a href="{{ route('bitacora.showAccionesU', [$bitacora->id]) }}" type="button" class="btn btn-xs btn-info">
            <i class="fa fa-eye"></i> Ver
          </a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  {{ $bitacoras->links() }}
@else
  <div class="panel panel-default">
    <div class="panel-body">
      <h3 style="text-align: center;">
        <b style="text-align: center;">{{$search}}</b> no fue encontrado.
      </h3>
    </div>
  </div>
@endif