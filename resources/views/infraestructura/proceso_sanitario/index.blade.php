@extends ('layouts.fondo')
@section ('content')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de los Procesos Sanitarios <a href="proceso_sanitario/create"><button class="btn btn-success">Nuevo Proceso Sanitario</button></a></h3><br>
			@include('infraestructura.proceso_sanitario.search')
			<br>
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table  table-bordered table-condensed table-hover">
					<thead >
						<tr class="active">							
							<th>Nro</th>
							<th>Nombre</th>
							<th>Descripción</th>
							<th>Opciones</th>
						</tr>
					</thead>
					
					@foreach($pSanitarios as $proceso)
					<tr>
						
						<td>{{ $proceso->id }}</td>
						<td>{{ $proceso->nombre }}</td>
						<td>{{ $proceso->descripcion }}</td>
						<td>
							<a href="{{URL::action('ProcesoSanitarioController@show',$proceso->id)}}">
								<button class="btn btn-primary">Detalles</button>
							</a>

							<a href="" data-target="#modal-delete-{{$proceso->id}}" data-toggle="modal"><button class="btn btn-danger"
							>Anular</button></a>
						</td>
					</tr>
					@include('infraestructura.proceso_sanitario.modal')
					@endforeach
					
				</table>
			</div>
			{{$pSanitarios->render()}}
		</div>			
	</div>			
@endsection