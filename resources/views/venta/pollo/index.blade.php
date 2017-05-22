@extends ('layouts.fondo')
@section ('content')
<br>
	<div class="panel panel-white panel-body">

	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Lista de Pollos <a href="pollo/create"><button class="btn btn-success">Nuevo Pollo</button></a></h3><br>
			@include('venta.pollo.search')
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
						<th>Imagen</th>
						<th>Stock</th>
						<th>Precio</th>
						<th>Tipo</th>
						<th>Edad</th>
						<th>Sexo</th>
						<th>Peso Prom.</th>
						<th>Productividad</th>
						<th>Opciones</th>
					</thead>
					@foreach($productoVenta as $pro)
					<tr>
						<td>{{ $pro->id }}</td>
						<td>{{ $pro->nombre }}</td>
						<td><img src="{{asset('imagenes/productos/'.$pro -> imagen)}}" alt="{{$pro -> nombre}}" height="100px" width="100px" class="img-thumbnail"></td>
						<td>{{ $pro->stock }}</td>
						<td>{{ $pro->precioUnitario }}</td>
						<td>{{ $pro->tipo }}</td>
						<td>{{ $pro->edad }}</td>
						<td>{{ $pro->sexo }}</td>
						<td>{{ $pro->pesoPromedio }}</td>
						<td>{{ $pro->productividad }}</td>
						<td>
							<a href="{{URL::action('PolloController@edit',$pro->id)}}"><button class="btn btn-primary">Editar</button></a>
							<a href="" data-target="#modal-delete-{{$pro->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
						</td>
					</tr>
					@include('venta.pollo.modal')
					@endforeach
				</table>
			</div>
			{{$productoVenta->render()}}
		</div>			
	</div>			


	</div>

@endsection