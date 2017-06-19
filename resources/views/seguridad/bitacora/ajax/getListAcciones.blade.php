@if( count($acciones) > 0)
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
@else
  <div class="panel panel-default">
    <div class="panel-body">
      <h3 style="text-align: center;">
        <b style="text-align: center;">{{$search}}</b> no fue encontrado.
      </h3>
    </div>
  </div>
@endif