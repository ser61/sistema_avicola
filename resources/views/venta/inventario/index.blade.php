@extends ('layouts.fondo')
@section ('content')
<br>
	<div class="panel panel-white panel-body">

	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Lista de Productos</h3><br>
			@include('venta.inventario.search')
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
						<th>Precio Unitario</th>
						<th>Stock</th>
					</thead>
					@foreach($productoVenta as $pro)
					<tr>
						<td>{{ $pro->id }}</td>
						<td>{{ $pro->nombre }}</td>
						<td>{{ $pro->precioUnitario }}</td>
						<td>{{ $pro->stock }}</td>
					</tr>
					@endforeach
				</table>
			</div>
			{{$productoVenta->render()}}
		</div>			
	</div>			


	</div>

@endsection