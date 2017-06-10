@extends ('layouts.fondo')
@section ('content')

<section class="content-header">
	<h1 align="center">
		<b>G R A N J A S &ensp;</b>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{url('infraestructura/granja')}}">index</a></li>
		<li><a href="#">Editar</a></li>
	</ol>
</section>
<br>
<section class="content">
	<div class="row">
		<div class="col-sm-12 col-xs-12">

			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 align="center">Panel de Edición de una <span class="text-bold">Granja</span></h3>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<h3>Editar Granja: {{ $granja->id}}</h3>
						</div>
					</div>

					<div class="row">
						{!! Form::model($granja,['method'=>'PATCH','route'=>['granja.update',$granja->id]])!!}
						{{Form::token()}}
						<div class="col-lg-8 col-sm8 col-md8 col-xs-12">
							<div class="form-group">
								<label for="ubicacion">Ubicación</label>
								<input type="text" name="ubicacion" class="form-control" value="{{ $granja->ubicacion }}" placeholder="Ubicación..">
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="form-group">
								<label>Tipo Granja</label>
								<select name="tipo" class="form-control">

									@foreach($listaTipo as $lTipo)
									@if($lTipo == $granja->tipo)
									<option value="{{ $granja->tipo }}" selected> {{ $granja->tipo }} </option>
									@else
									<option value= {{$lTipo}}> {{ $lTipo }} </option>
									@endif
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


@endsection