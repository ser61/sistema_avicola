@extends ('layouts.fondo')
@section ('content')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Lista de Infraestructuras <a href="infraestructura/create"><button class="btn btn-success">Nueva Infraestructura</button></a></h3><br>
			@include('infraestructura.infraestructura.search')
			<br>
		</div>
	</div>
		
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>

						<th>Id</th>
						<th>Capacidad</th>
						<th>Tipo</th>
						<th>Ubicacion</th>
						<th>Cantidad Huevos Almacenados</th>
						<th>Id Granja</th>
						<th>Tipo Granja</th>
						<th>Opciones</th>
					</thead>
				@foreach($infraestructuras as $inf)
					@if($inf->visible == '1')
					<tr>
						<td>{{ $inf->id }}</td>
						<td>{{ $inf->capacidad }}</td>
						<td>{{ $inf->tipo }}</td>
						<td>{{ $inf->ubicacion }}</td>
						<td>{{ $inf->cantidadHuevosAlmacenados }}</td>
						<td>{{ $inf->idGranja }}</td>
						<td>{{ $inf->tipoGranja }}</td>
						<td>
							<a href="{{URL::action('InfraestructuraController@edit',$inf->id)}}"><button class="btn btn-primary">Editar</button></a>
							<a href="" data-target="#modal-delete-{{$inf->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
						</td>
					</tr>
					@endif
					@include('infraestructura.infraestructura.modal')
				@endforeach
				</table>
			</div>
			{{$infraestructuras->render()}}
		</div>			
	</div>			
@endsection