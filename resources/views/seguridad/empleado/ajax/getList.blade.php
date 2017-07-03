@if( count($empleados) > 0)
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
            <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#phones{{ $empleado->id }}">
              <i class="fa fa-phone"></i>
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
                    <i class="fa fa-eye"></i> Ver
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
@else
  <div class="panel panel-default">
    <div class="panel-body">
      <h3 style="text-align: center;">
        <b style="text-align: center;">{{$search}}</b> no fue encontrado.
      </h3>
    </div>
  </div>
@endif