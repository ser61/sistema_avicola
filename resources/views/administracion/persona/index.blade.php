@extends('index')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
		<h3>Personas Registradas Cliente/Proveedores<a href="persona/create"><button class="btn btn-success">Registrar Nuevo Cliente</button></a></h3>
		
	</div>
</div>



<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Codigo</th>
						<th>Nit/Ci</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Direccion</th>
						<th>Email</th>
						<th>Empresa</th>
						<th>Tipo</th>
						<th>Opciones</th>

					@foreach($personas as $per)
						<tr>
						<td>{{$per->id}}</td>
						<td>{{$per->nit}}</td>
						<td>{{$per->nombre}}</td>
						<td>{{$per->apellido}}</td>
						<td>{{$per->direccion}}</td>						
						<td>{{$per->email}}</td>
						<td>{{$per->empresa}}</td>
						<td>{{$per->tipo}}</td>
						<td>
							<a href="{{URL::action('PersonaController@edit',$per->id)}}"><button class="btn btn-info">Editar</button></a>
								<a href="" data-target="#modal-delete-{{$per->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>	
								
						</td>					
						</tr>
					@endforeach	
					</thead>
					
				</table>	
		</div>
		
	</div>
</div>	
@endsection