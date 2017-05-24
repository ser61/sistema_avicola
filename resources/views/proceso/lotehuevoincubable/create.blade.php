@extends('layouts.fondo')
@section('content')
  <section class="content-header">
    <h1 align="center">
      * * * * * <b>P R O C E S O</b> * * * * *
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">crear</a></li>
    </ol>
  </section>
  <br>

  <section class="content">
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <div class="box box-primary">
        <!-- TITULO DE PANEL -->
        <div class="box-header with-border">
          <h3 align="center">Panel de control de <span class="text-bold"> Lotes de Huevo</span></h3>
          @include('alertas.request')
          {!!Form::open(array('url'=>'proceso/lotehuevoincubable','method'=>'POST','autocomplete'=>'off'))!!}
			{{Form::token()}}

	
	<div class="row">
		<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 col-sm-offset-2">
			<div class="form-group">
				<label for="nombre">Escoger Planta de Incubacion</label>
		             <select name="idplantaincubacion" id="idplantaincubacion" class="form-control selectpicker">
		             	 @foreach($plantaincubacion as $plan)
		              		<option value="{{$plan->id}}">Id de Lote={{$plan->id}} ; Cantida de Huevos={{$plan->cantidadHuevosAlmacenados}}</option>
		              	@endforeach
					</select>

			</div>
		</div>	
	</div>
	<div class="row">
		<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 col-sm-offset-2">
			<div class="form-group">
				<label for="nombre">Escoger Equipo de Incubacion</label>
		             <select name="idequipo" id="idequipo" class="form-control selectpicker">
		             	 @foreach($equipos as $equ)
		              		<option value="{{$equ->id}}">Id de Lote={{$equ->id}} ; Nombre={{$equ->nombre}} ; Capacidad={{$equ->capacidad}}</option>
		              	@endforeach
					</select>

			</div>
		</div>	
	</div>
	
          <div class="form-group">
            <div class="col-sm-8 col-sm-offset-2">
              <br>
              <button class="btn btn-primary btn-block">
                Registrar Lote <i class="fa fa-arrow-circle-right"></i>
              </button>
              <br>
            </div>
          </div>
          {!! Form::close() !!}
        </div>
       
          <!-- fin-> TITULO DE PANEL -->
        
      </div>
      </div>
    </div>
    <br>
  </section>
@endsection