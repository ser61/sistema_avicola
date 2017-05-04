@extends('index')
@section ('contenido')


<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h3>Cargos<a href="cargo/create"><button class="btn btn-success">Crear Nuevo Cargo </button></a></h3>
	</div>
</div>


<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
		<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Codigo</th>
						<th>Descripcion</th>
						<th>Opciones</th>
						
					@foreach($cargos as $car)
						<tr>
						<td>{{$car->id}}</td>
						<td>{{$car->nombre}}</td>
						<td>
								<a href="{{URL::action('CargoController@edit',$car->id)}}"><button class="btn btn-info">Editar</button></a>
								<a href="" data-target="#modal-delete-{{$car->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
								
						</td>		
									
						</tr>
					@endforeach

					</thead>
					
				</table>	
		</div>
	</div>
</div>	


@endsection
