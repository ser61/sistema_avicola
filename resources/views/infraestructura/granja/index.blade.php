@extends ('layouts.fondo')
@section ('content')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Lista de Granjas <a href="granja/create"><button class="btn btn-success">Nueva Granja</button></a></h3><br>
			@include('infraestructura.granja.search')
			<br>
		</div>

	</div>
		
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Id</th>						
						<th>Ubicacion</th>
						<th>Tipo</th>
						<th>Id Empresa</th>
						<th>Opciones</th>
					</thead>
				@foreach($granjas as $granja)
					@if($granja->visible == '1')
					<tr>
						<td>{{ $granja->id }}</td>
						<td>{{ $granja->ubicacion }}</td>
						<td>{{ $granja->tipo }}</td>
						<td>{{ $granja->idEmpresa }}</td>
						<td>
							<a href="{{URL::action('GranjaController@edit',$granja->id)}}"><button class="btn btn-primary">Editar</button></a>
							<a href="" data-target="#modal-delete-{{$granja->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
						</td>
					</tr>
					@endif
					@include('infraestructura.granja.modal')
				@endforeach
				</table>
			</div>
			{{$granjas->links()}}
		</div>			
	</div>			
@endsection