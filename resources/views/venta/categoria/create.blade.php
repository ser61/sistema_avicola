@extends('layouts.fondo')
@section('content')
  <section class="content-header">
    <h1 align="center">
      * * * * * <b>V E N T A</b> * * * * *
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
          <h3 align="center">Panel de control de <span class="text-bold">Categoria de Huevo</span></h3>
          @include('alertas.request')
          {!! Form::open(array('url'=>'venta/categoria','method'=>'POST','autocomplete'=>'off'))!!}
				{{Form::token()}}			
				<div class="form-group">
					<label for="nombre">Nombre de la Categoria</label>
					<input type="text" name="nombre" class="form-control" >
				</div>

				<div class="form-group">
					<label for="descripcion">Descripcion de la Categoria</label>
					<input type="text" name="descripcion" class="form-control" >
				</div>

				<div class="form-group">
					<label for="pesoIntervaloSuperior">Peso Intervalo Superior del Huevo</label>
					<input type="number" step="any" name="pesoIntervaloSuperior" class="form-control">
				</div>

				<div class="form-group">
					<label for="pesoIntervaloInferior">Peso Intervalo Inferior del Huevo</label>
					<input type="number" step="any" name="pesoIntervaloInferior" class="form-control" >
				</div>

				<div class="form-group">
		            <div class="col-sm-8 col-sm-offset-2">
		              <br>
		              <button class="btn btn-primary btn-block">
		                Registrar Categoria de Huevo <i class="fa fa-arrow-circle-right"></i>
		              </button>
		              <br>
		            </div>
		        </div>
				{!!Form::close()!!}
        </div>
       
          <!-- fin-> TITULO DE PANEL -->
        
      </div>
      </div>
    </div>
    <br>
  </section>
@endsection