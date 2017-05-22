@extends ('layouts.fondo')
@section ('content')
<br>
	<div class="panel panel-white panel-body">

	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Lista de Clientes <a href="cliente/create"><button class="btn btn-success">Nuevo Cliente</button></a></h3><br>
			@include('venta.cliente.search')
			<br>
		</div>
	</div>
		
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-condensed table-hover">
					<thead>
						<th>CI</th>						
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Direccion</th>
						<th>Opciones</th>
					</thead>
					@foreach($persona as $per)
					<tr>
						<td>{{ $per->ci }}</td>
						<td>{{ $per->nombre }}</td>
						<td>{{ $per->apellido }}</td>
						<td>{{ $per->direccion }}</td>
						<td>
							<a href="{{URL::action('ClienteController@edit',$per->id)}}"><button class="btn btn-primary">Editar</button></a>
							<a href="" data-target="#modal-delete-{{$per->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
						</td>
					</tr>
					@include('venta.cliente.modal')
					@endforeach
				</table>
			</div>
			{{$persona->render()}}
		</div>			
	</div>		
	</div>

@endsection