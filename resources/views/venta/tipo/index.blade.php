@extends ('index')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Lista de Tipos de Pollos <a href="tipo/create"><button class="btn btn-success">Nuevo Tipo</button></a></h3><br>
			@include('venta.tipo.search')
			<br>
		</div>
	</div>
		
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Id</th>						
						<th>Nombre</th>
						<th>Opciones</th>
					</thead>
					@foreach($tipos as $tipo)
					<tr>
						<td>{{ $tipo->id }}</td>
						<td>{{ $tipo->nombre }}</td>
						<td>
							<a href="{{URL::action('TipoController@edit',$tipo->id)}}"><button class="btn btn-primary">Editar</button></a>
							<a href="" data-target="#modal-delete-{{$tipo->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
						</td>
					</tr>
					@include('venta.tipo.modal')
					@endforeach
				</table>
			</div>
			{{$tipos->render()}}
		</div>			
	</div>			
@endsection