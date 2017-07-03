  <table class="table table-bordered" style="border-top-color: #00AEFF">
    <thead>
    <tr>
      <th class="center">ID</th>
      <th>Nombre</th>
      <th>Cantidad</th>
      <th>Precio</th>
      <th>Opciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($insumos as $insumo)
      <tr>
        <td class="center">{{$insumo->id}}</td>
        <td>{{$insumo->nombre}}</td>
        <td>{{$insumo->cantidadTotal}}</td>
        <td>{{$insumo->precio}}</td>
        <td class="center">
          {!! Form::open(['method'=>'DELETE', 'route'=>['insumo.destroy',$insumo->id]]) !!}
          <a href="#" class="btn btn-info" onclick="showModal({{$insumo->id}});"  data-toggle="modal" data-target="#detallar" data-backdrop=”false”>
            <i class="fa fa-edit"></i> Detallar
          </a>
          <button class="btn btn-danger">
            <i class="fa fa-trash"></i>
          </button>
          {!! Form::close() !!}
        </td>
      </tr>
    @endforeach
    </tbody>
    <tfoot>
    <th></th>
    <th></th>
    <th></th>
    <th><h4><b>TOTAL</b></h4></th>
    <th><h4>Bs/. {{$total}}</h4></th>
    </tfoot>
  </table>
