@extends ('layouts.fondo')
@section ('content')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Lista de Baterías <a href="bateria/create"><button class="btn btn-success">Nueva Batería</button></a></h3><br>
			@include('infraestructura.bateria.search')
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
						<th>Id Galpón</th>
						<th>Opciones</th>
					</thead>
				@foreach($baterias as $bateria)
					@if($bateria->visible == '1')
					<tr>
						<td>{{ $bateria->id }}</td>
						<td>{{ $bateria->capacidad }}</td>
						<td>{{ $bateria->idGalpon }}</td>
						<td>
							<a href="{{URL::action('BateriaController@edit',$bateria->id)}}"><button class="btn btn-primary">Editar</button></a>
							<a href="" data-target="#modal-delete-{{$bateria->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
						</td>
					</tr>
					@endif
					@include('infraestructura.bateria.modal')
				@endforeach
				</table>
			</div>
			{{$baterias->render()}}
		</div>			
	</div>			
@endsection