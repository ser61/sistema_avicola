@extends ('layouts.fondo')
@section ('content')
<section class="content-header">
	<h1 align="center">
		<b>I N F R A E S T R U C T U R A</b>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{url('infraestructura/infraestructura')}}">index</a></li>
		<li><a href="#">Crear</a></li>
	</ol>
</section>
<br>
<section class="content">
	<div class="row">
		<div class="col-sm-12 col-xs-12">
			<div class="box box-primary">

				<div class="box-header with-border">
					<h3 align="center">Panel de Registro de una <span class="text-bold">Infraestructura</span></h3>
				</div>

				<div class="box-body">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<h3>Nueva Infraestructura</h3>
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
								<select name="tipo" id="tipoi" class="form-control">
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
				</div>
			</div>
		</div>
	</div>
</section>
@push('scripts')
<script>
	$(document).ready(function(){
		alert("Añade una nueva infraestructura.");
	});
	$("#cantidadHuevosAlmacenados").hide();
	$("#tipoi").change(mostrarValores);//Método change->cuando se modifique el valor que está en el select

	function mostrarValores(){
		datosTipo = document.getElementById('tipoi').value;
		if(datosTipo=="Planta de Incubación"){
			$("#cantidadHuevosAlmacenados").show();
		}else{
			$("#cantidadHuevosAlmacenados").val(0);
			$("#cantidadHuevosAlmacenados").hide();
		}
	}
</script>
@endpush
@endsection