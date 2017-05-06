@extends ('index')

@if(Session::has('message'))

<div class="alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	{{ Session::get('message') }}
</div>

@endif

@section ('contenido')



	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			
			<h3>Nuevo Tipo</h3>
			@if(count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!! Form::open(array('url'=>'venta/tipo','method'=>'POST','autocomplete'=>'off'))!!}
			{{Form::token()}}			
			<div class="form-group">
				<label for="descripcion">Nombre</label>
				<input type="text" name="nombre" class="form-control" placeholder="Nombre..">
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
			{!!Form::close()!!}

		</div>
	</div>
@endsection