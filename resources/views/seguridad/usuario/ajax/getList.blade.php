@if( count($usuarios) > 0)
  <table class="table table-bordered table-hover" style="border-top-color: #00AEFF">
    <thead>
    <tr>
      <th>Nombre</th>
      <th class="hidden-xs">Foto</th>
      <th>Email</th>
      <th>Estado</th>
      <th>Cargo</th>
      <th>Opciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($usuarios as $usuario)
      <tr>
        <td class="center">{{$usuario->name}}</td>
        <td class="hidden-xs">
          <img src='usuarios/{{$usuario->foto}}' class="img-circle" alt=""  style="width: 60px; height: 60px;">
        </td>
        <td>{{$usuario->email}}</td>
        <td>{{$usuario->estado}}</td>
        <td>{{$usuario->cargo}}</td>
        <td class="center">
          <div class="visible-md visible-lg hidden-sm hidden-xs">
            {!! Form::open(['method'=>'DELETE', 'route'=>['admin.destroy',$usuario->id]]) !!}
            <a href="{{ route('admin.edit', $usuario->id) }}" class="btn btn-xs btn-info">
              <i class="fa fa-edit"></i>
            </a>
            <button class="btn btn-xs btn-danger">
              <i class="fa fa-trash"></i>
            </button>
            <a href="#" class="btn btn-xs btn-success">
              <i class="fa fa-eye"></i>
            </a>
            {!! Form::close() !!}
          </div>
          <div class="visible-xs visible-sm hidden-md hidden-lg">
            <div class="btn-group">
              <a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                <i class="fa fa-cog"></i> <span class="caret"></span>
              </a>
              <ul role="menu" class="dropdown-menu pull-right dropdown-dark">
                <li>
                  <a href="{{ route('admin.edit', $usuario->id) }}" role="menuitem" tabindex="-1">
                    <i class="fa fa-edit"></i> Edit
                  </a>
                </li>
                <li>
                  <a href="{{ route('admin.destroy', $usuario->id) }}"
                     onclick="event.preventDefault();document.getElementById('delete').submit();">
                    <i class="fa fa-trash"></i> Remove
                  </a>
                  {!! Form::open(['method'=>'DELETE', 'route'=>['admin.destroy',$usuario->id], 'id'=>'delete']) !!}
                  {!! Form::close() !!}
                </li>
                <li>
                  <a href="{{ route('admin.show', $usuario->id) }}" role="menuitem" tabindex="-1">
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