@extends ('index')
@section ('contenido')

	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			

			{!!Form::open(array('url'=>'administracion/persona','method'=>'POST','autocomplete'=>'off'))!!}
			{{Form::token()}}

			<h3>Nueva Persona</h3>

	<div class="row">
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="nit">Nit</label>
				<input type="text" name="nit"  class="form-control" placeholder="Nit...">

			</div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label>Tipo</label>
				<select name="tipo" class="form-control">
					<option value="c" selected>Cliente</option>
					<option value="p" selected>Proveedor</option>
				</select>
			</div>
		</div>
		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
			<div class="form-group">
				<label for="direccion">Direeccion de Adimicilio</label>
				<input type="text" name="direccion"  class="form-control" placeholder="Direccion...">

			</div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre"  class="form-control" placeholder="Nombre/s...">

			</div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="apellido">Apellido</label>
				<input type="text" name="apellido"  class="form-control" placeholder="Apellido/s...">

			</div>
		</div>
		
		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
			<div class="form-group">
				<label for="email">Correo Electronico</label>
				<input type="text" name="email"  class="form-control" placeholder="Correo Electronico...">

			</div>
		</div>
		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
			<div class="form-group">
				<label for="empresa">Empresa</label>
				<input type="text" name="empresa"  class="form-control" placeholder="Empresa...">

			</div>
		</div>
			
		
	</div>

	<div class="row">
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
		</div>
	</div>
			
			
			

			{!!Form::close()!!}

		</div>
	</div>

@endsection