@extends ('layouts.fondo')
@section ('content')
<br>
	<div class="panel panel-white panel-body">

	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Lista de Categorias de Huevo <a href="categoria/create"><button class="btn btn-success">Nueva Categoria</button></a></h3><br>
			@include('venta.categoria.search')
			<br>
		</div>
	</div>
		
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-condensed table-hover">
					<thead>
						<th>Id</th>						
						<th>Nombre</th>
						<th>Descripcion</th>
						<th>Int.Sup.</th>
						<th>Int.Inf.</th>
						<th>Opciones</th>
					</thead>
					@foreach($categoria as $cat)
					<tr>
						<td>{{ $cat->id }}</td>
						<td>{{ $cat->nombre }}</td>
						<td>{{ $cat->descripcion }}</td>
						<td>{{ $cat->pesoIntervaloSuperior }}</td>
						<td>{{ $cat->pesoIntervaloInferior }}</td>
						<td>
							<a href="{{URL::action('CategoriaController@edit',$cat->id)}}"><button class="btn btn-primary">Editar</button></a>
							<a href="" data-target="#modal-delete-{{$cat->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
						</td>
					</tr>
					@include('venta.categoria.modal')
					@endforeach
				</table>
			</div>
			{{$categoria->render()}}
		</div>			
	</div>			


	</div>

@endsection