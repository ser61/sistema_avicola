@extends ('layouts.fondo')

@if(Session::has('message'))

<div class="alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	{{ Session::get('message') }}
</div>

@endif

@section ('content')

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			
			<h3>Nueva Infraestructura</h3>
			@if(count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>
	<div class="row">

			{!! Form::open(array('url'=>'infraestructura/infraestructura','method'=>'POST','autocomplete'=>'off'))!!}
			{{Form::token()}}

		<div class="col-lg-8 col-sm8 col-md8 col-xs-12">
			<div class="form-group">
				<label for="capacidad">Capacidad</label>
				<input type="number" name="capacidad" class="form-control" placeholder="Capacidad..">
			</div>
		</div>

		<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
			<div class="form-group">
				<label>Tipo Granja</label>
				<select name="idGranja" class="form-control">
					@foreach($granjas as $granja)
					<option value="{{ $granja->idGranja }}">{{ $granja->tipo }}</option>
					@endforeach
				</select>
			</div>
		</div>
		<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
			<div class="form-group">
				<label for="estado">Estado</label>
				<input type="text" name="estado" class="form-control" placeholder="Estado..">
			</div>
		</div>
		<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
			<div class="form-group" id="cantidadHuevosAlmacenados">
				<label for="cantidadHuevosAlmacenados">Cantidad Huevos Almacenados</label>
				<input type="number" name="cantidadHuevosAlmacenados" class="form-control" placeholder="Cantidad Huevos Almacenados..">
			</div>
		</div>
		<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
			<div class="form-group">
				<label>Tipo Infraestructura</label>
				<select name="tipo" id="tipo" class="form-control">
					@foreach($tipos as $tipo)
					<option value="{{ $tipo }}">{{ $tipo }}</option>
					@endforeach
				</select>
			</div>
		</div>

		<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
		</div>
		{!!Form::close()!!}
	</div>

@push('scripts')
<script>
	$(document).ready(function(){
		alert("Añade una nueva infraestructura.");
	});
	$("#cantidadHuevosAlmacenados").hide();
	$("#tipoi").change(mostrarValores);//Método change->cuando se modifique el valor que está en el select

	function mostrarValores(){

		datosTipo = document.getElementById('tipoi').value;
		//alert(" "+datosTipo);
		if(datosTipo=="Planta de Incubación"){
			$("#cantidadHuevosAlmacenados").show();
		}else{

			$("#cantidadHuevosAlmacenados").html(0);
			$("#cantidadHuevosAlmacenados").val(0);
			$("#cantidadHuevosAlmacenados").hide();
		}
	}
</script>
@endpush
@endsection