@if( count($cargos) > 0)
  <table class="table table-bordered" style="border-top-color: #00AEFF">
  <thead>
  <tr>
    <th class="center">id</th>
    <th>Cargo</th>
    <th class="hidden-sm hidden-xs">Descripcion</th>
    <th>Nro. Empleados</th>
    <th>Opciones</th>
  </tr>
  </thead>
  <tbody>
  @foreach($cargos as $cargo)
    <tr>
      <td class="center">{{$cargo->id}}</td>
      <td>{{$cargo->nombre}}</td>
      <td class="hidden-xs">{{$cargo->descripcion}}</td>
      <td>{{$cargo->nro}}</td>
      <td class="center">
        <!-- CUANDO ESTE EN PANTALLA COMPLETA -->
        <div class="visible-md visible-lg hidden-sm hidden-xs">
          {!! Form::open(['method'=>'DELETE', 'route'=>['cargo.destroy',$cargo->id]]) !!}
          <a href="{{ route('cargo.edit', $cargo->id) }}" class="btn btn-info">
            <i class="fa fa-edit"></i>
          </a>
          <button class="btn btn-danger">
            <i class="fa fa-trash"></i>
          </button>
          <!-- <a href="#" class="btn btn-success">
            <i class="fa fa-eye"></i>
          </a> -->
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
                <a href="{{ route('cargo.edit', $cargo->id) }}" role="menuitem" tabindex="-1">
                  <i class="fa fa-edit"></i> Editar
                </a>
              </li>
              <li>
                <a href="{{ route('cargo.destroy',$cargo->id)}}"
                   onclick="event.preventDefault();document.getElementById('delete').submit();">
                  <i class="fa fa-trash"></i> Remover
                </a>
                {!! Form::open(['method'=>'DELETE', 'route'=>['cargo.destroy',$cargo->id], 'id'=>'delete']) !!}
                {!! Form::close() !!}
              </li>
              {{--<li>
                <a href="#" role="menuitem" tabindex="-1">
                  <i class="fa fa-eye"></i> Editar
                </a>
              </li>--}}
            </ul>
          </div>
        </div>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
  {{ $cargos->links() }}
@else
  <div class="panel panel-default">
    <div class="panel-body">
      <h3 style="text-align: center;">
        <b style="text-align: center;">{{$search}}</b> no fue encontrado.
      </h3>
    </div>
  </div>
@endif