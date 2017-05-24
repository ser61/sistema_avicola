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
          <h3 align="center">Panel de control de <span class="text-bold">Clientes</span></h3>
          @include('alertas.request')
          {!! Form::open(array('url'=>'venta/cliente','method'=>'POST','autocomplete'=>'off'))!!}
				{{Form::token()}}			
				<div class="form-group">
					<label for="ci">Carnet de Identidad</label>
					<input type="text" name="ci" class="form-control" >
				</div>

				<div class="form-group">
					<label for="nombre">Nombres</label>
					<input type="text" name="nombre" class="form-control" >
				</div>

				<div class="form-group">
					<label for="apellido">Apellidos</label>
					<input type="text" name="apellido" class="form-control">
				</div>

				<div class="form-group">
					<label for="direccion">Direccion</label>
					<input type="text" name="direccion" class="form-control" >
				</div>

				<div class="form-group">
		            <div class="col-sm-8 col-sm-offset-2">
		              <br>
		              <button class="btn btn-primary btn-block">
		                Registrar Cliente <i class="fa fa-arrow-circle-right"></i>
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