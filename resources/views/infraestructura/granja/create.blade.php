@extends ('layouts.fondo')
@section ('content')
<section class="content-header">
	<h1 align="center">
		<b>I N F R A E S T R U C T U R A</b>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{url('infraestructura/granja')}}">index</a></li>
		<li><a href="#">Crear</a></li>
	</ol>
</section>
<br>

<section class="content">
	<div class="row">
	<div class="col-sm-12 col-xs-12">

	<div class="box box-primary">

		<!-- TITULO DEL PANEL-->
		<div class="box-header with-border">
			<h3 align="center">Panel de Registro de una <span class="text-bold">Graja</span></h3>
		</div>

		<div class="box-body">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h3>Nueva Granja</h3>
				</div>
			</div>

			{!! Form::open(array('url'=>'infraestructura/granja','method'=>'POST','autocomplete'=>'off'))!!}
			{{Form::token()}}

			<div class="row">
				<div class="col-lg-8 col-sm8 col-md8 col-xs-12">
					<div class="form-group">
						<label for="ubicacion">Ubicación</label>
						<input type="text" name="ubicacion" class="form-control" placeholder="Ubicación..">
					</div>
				</div>

				<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
					<div class="form-group">
						<label>Tipo Granja</label>
						<select name="tipo" class="form-control">
							<option value="Crianza">Crianza</option>
							<option value="Engorda">Engorda</option>
							<option value="Reproducción">Reproducción</option>
						</select>
					</div>
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
</section>

@endsection