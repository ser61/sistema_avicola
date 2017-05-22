@extends ('layouts.fondo')
@section ('content')
<br>
	<div class="panel panel-white panel-body">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				
				<h3>Nueva Huevo</h3>
				@if(count($errors)>0)
				<div class="alert alert-danger">
					<ul>
					@foreach($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach
					</ul>
				</div>
				@endif

				{!! Form::open(array('url'=>'venta/huevo','method'=>'POST','autocomplete'=>'off', 'files'=>'true'))!!}
				{{Form::token()}}			
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" name="nombre" class="form-control" >
				</div>

				<div class="form-group">
					<label for="stock">Stock</label>
					<input type="text" name="stock" class="form-control">
				</div>

            		<div class="form-group">
		            	<label for="imagen">Imagen</label>
		            	<input type="file" name="imagen" class="form-control">
           			 </div>

					<div class="form-group">
						<label for="precioUnitario">Precio Unitario</label>
						<input type="text" name="precioUnitario" class="form-control" >
					</div>


				<div class="form-group">
	    			<label>Categoria</label>
	    			<select name="idCategoria" class="form-control">
	    				@foreach ($categoria as $cat)
	    				   <option value="{{$cat -> id}}">{{$cat -> nombre}}</option>	 
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