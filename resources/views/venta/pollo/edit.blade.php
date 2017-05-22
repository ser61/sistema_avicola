@extends ('layouts.fondo')
@section ('content')
<br>
<div class="panel panel-white panel-body">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Pollo: {{ $productoVenta->nombre}}</h3>
			@if(count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!! Form::model($productoVenta,['method'=>'PATCH','route'=>['pollo.update',$productoVenta->id], 'files'=>'true'])!!}
			{{Form::token()}}			
			<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" name="nombre" class="form-control" value="{{ $productoVenta->nombre}}">
				</div>

				<div class="form-group">
					<label for="stock">Stock</label>
					<input type="text" name="stock" class="form-control" value="{{ $productoVenta->stock}}">
				</div>

        		<div class="form-group">
	            	<label for="imagen">Imagen</label>
	            	<input type="file" name="imagen" class="form-control">
           			@if (($productoVenta -> imagen)!="")
	           		<img src="{{asset('imagenes/productos/'.$productoVenta-> imagen)}}" height="150px" >
	           		@endif
       			 </div>
       			
				<div class="form-group">
					<label for="precioUnitario">Precio Unitario</label>
					<input type="text" name="precioUnitario" class="form-control" value="{{ $productoVenta->precioUnitario}}">
				</div>

				<div class="form-group">
	            	<label for="edad">Edad</label>
	            	<input type="text" name="edad" class="form-control" value="{{ $productoVenta->edad}}">
       			</div>
        		
        		<div class="form-group">
	            	<label for="sexo">Sexo</label>
	            	<input type="text" name="sexo" class="form-control" value="{{ $productoVenta->sexo}}">
       			</div> 

        		<div class="form-group">
	            	<label for="pesoPromedio">Peso Promedio</label>
	            	<input type="text" name="pesoPromedio" class="form-control" value="{{ $productoVenta->pesoPromedio}}">
       			</div>

       			<div class="form-group">
	            	<label for="productividad">Productividad</label>
	            	<input type="text" name="productividad" class="form-control" value="{{ $productoVenta->productividad}}">
       			</div>

       			<div class="form-group">
	            	<label for="caracteristicas">Caracteristicas</label>
	            	<input type="text" name="caracteristicas" class="form-control" value="{{ $productoVenta->caracteristicas}}">
       			</div>

				<div class="form-group">
	    			<label>Tipo de Pollo</label>
	    			<select name="idTipo" class="form-control">
	    				@foreach ($tipo as $tip)
							@if ($tip -> id == $productoVenta -> idTipo)
		    				   <option value="{{$tip -> id}}" selected>{{$tip -> nombre}}</option>	 
						    @else
		    				   <option value="{{$tip -> id}}">{{$tip -> nombre}}</option>	 
	    				    @endif
	    				@endforeach
	    			</select>
    			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
			{!!Form::close()!!}

		</div>
	</div>
</div>
@endsection