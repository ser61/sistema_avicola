@if( count($proveedores) > 0)
  <table class="table table-bordered table-hover" style="border-top-color: #00AEFF">
    <thead>
    <tr>
      <th class="center">ci</th>
      <th>Nombre(s)</th>
      <th>Apellido(s)</th>
      <th class="hidden-xs">Direccion</th>
      <th>E-mail</th>
      <th>Empresa</th>
      <th>Opcion</th>
    </tr>
    </thead>
    <tbody>
    @foreach($proveedores as $proveedor)
      <tr>
        <td class="center">{{$proveedor->ci}}</td>
        <td>{{$proveedor->nombre}}</td>
        <td>{{$proveedor->apellido}}</td>
        <td class="hidden-xs">{{$proveedor->direccion}}</td>
        <td>{{$proveedor->email}}</td>
        <td>{{$proveedor->empresa}}</td>
        <td class="center">
          @include("compra.proveedor.phone")
          <div class="visible-md visible-lg hidden-sm hidden-xs">
            {!! Form::open(['method'=>'DELETE', 'route'=>['proveedor.destroy',$proveedor->id]]) !!}
            <a href="{{ route('proveedor.edit', $proveedor->id) }}" class="btn btn-xs btn-info">
              <i class="fa fa-edit"></i>
            </a>
            <button class="btn btn-xs btn-danger">
              <i class="fa fa-trash"></i>
            </button>
            <a type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#phones{{$proveedor->id}}">
              <i class="fa fa-phone"></i>
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
                  <a href="{{ route('proveedor.edit', $proveedor->id) }}" role="menuitem" tabindex="-1">
                    <i class="fa fa-edit"></i> Edit
                  </a>
                </li>
                <li>
                  <a href="{{ route('proveedor.destroy', $proveedor->id) }}"
                     onclick="event.preventDefault();document.getElementById('delete').submit();">
                    <i class="fa fa-trash"></i> Remove
                  </a>
                  {!! Form::open(['method'=>'DELETE', 'route'=>['proveedor.destroy',$proveedor->id], 'id'=>'delete']) !!}
                  {!! Form::close() !!}
                </li>
                <li>
                  <a type="button" href="" role="menuitem" data-toggle="modal" data-target="#phones{{$proveedor->id}}">
                    <i class="fa fa-phone"></i> Ver
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
  {{ $proveedores->links() }}
@else
  <div class="panel panel-default">
    <div class="panel-body">
      <h3 style="text-align: center;">
        <b style="text-align: center;">{{$search}}</b> no fue encontrado.
      </h3>
    </div>
  </div>
@endif