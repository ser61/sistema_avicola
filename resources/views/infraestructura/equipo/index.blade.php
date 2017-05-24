@extends ('layouts.fondo')
@section ('content')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Lista de Equipos <a href="equipo/create"><button class="btn btn-success">Nuevo Equipo</button></a></h3><br>
			@include('infraestructura.equipo.search')
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
						<th>Capacidad</th>
						<th>Tipo</th>
						<th>Id Planta Incubación</th>
						<th>Opciones</th>
					</thead>
				@foreach($equipos as $equipo)
					@if($equipo->visible == '1')
					<tr>
						<td>{{ $equipo->id }}</td>
						<td>{{ $equipo->nombre }}</td>
						<td>{{ $equipo->capacidad }}</td>
						<td>{{ $equipo->tipo }}</td>
						<td>{{ $equipo->idPlantaIncubacion }}</td>
						<td>
							<a href="{{URL::action('EquipoController@edit',$equipo->id)}}"><button class="btn btn-primary">Editar</button></a>
							<a href="" data-target="#modal-delete-{{$equipo->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
						</td>
					</tr>
					@endif
					@include('infraestructura.equipo.modal')
				@endforeach
				</table>
			</div>
			{{$equipos->render()}}
		</div>			
	</div>			
@endsection