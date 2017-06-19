@if( count($usuarios) > 0)
  <table class="table table-bordered table-hover" style="border-top-color: #00AEFF">
    <thead>
    <tr>
      <th class="col-sm-2">Cuenta</th>
      <th class="col-sm-2">Nombre</th>
      <th class="col-sm-2">Apellido</th>
      <th class="col-sm-3">Cargo</th>
      <th class="col-sm-1">Opcion</th>
    </tr>
    </thead>
    <tbody>
    @foreach($usuarios as $usuario)
      <tr>
        <td>{{$usuario->name}}</td>
        <td>{{ $usuario->nombre }}</td>
        <td>{{$usuario->apellido}}</td>
        <td>{{$usuario->cargo}}</td>
        <td class="center">
          <a href="{{ route('bitacora.showUser', $usuario->id) }}" type="button" class="btn btn-xs btn-info">
            <i class="fa fa-eye"></i> Ver
          </a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  {{ $usuarios->links() }}
@else
  <div class="panel panel-default">
    <div class="panel-body">
      <h3 style="text-align: center;">
        <b style="text-align: center;">{{$search}}</b> no fue encontrado.
      </h3>
    </div>
  </div>
@endif