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
          <h3 align="center">Panel de control de las <span class="text-bold"> Parvada de Engorde</span></h3>
          @include('alertas.request')
          {!!Form::open(array('url'=>'proceso/parvadaengorde','method'=>'POST','autocomplete'=>'off'))!!}
			{{Form::token()}}

	<div class="row">
		<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 col-sm-offset-2">
			<div class="form-group">
				<label for="cantidadpollos">Cantidad de Pollos</label>
				<input type="number" name="cantidadpollos"  class="form-control" placeholder="Cantidad de Pollos...">

			</div>
		</div>	
	</div>
	<div class="row">
    <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 col-sm-offset-2">
      <div class="form-group">
        <label for="sexo">Sexo</label>
                 <select name="sexo" id="sexo" class="form-control selectpicker">
                      <option value="Machos">Machos</option>
                      <option value="Hembras">Hembras</option>
          </select>
      </div>
    </div>  
  </div>
	<div class="row">
		<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 col-sm-offset-2">
			<div class="form-group">
				<label for="edad">Edad (Dias)</label>
				<input type="number" name="edad"  class="form-control" placeholder="Edad...">

			</div>
		</div>	
	</div>
	<div class="row">
		<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 col-sm-offset-2">
			<div class="form-group">
				<label for="pesopromedio">Peso Promedio ()</label>
				<input type="number" step="any" name="pesopromedio"  class="form-control" placeholder="Peso Promedio...">

			</div>
		</div>	
	</div>
	<div class="row">
		<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 col-sm-offset-2">
			<div class="form-group">
				<label for="caracteristica">Caracteristicas</label>
				<input type="text" name="caracteristica"  class="form-control" placeholder="Caracteristicas...">

			</div>
		</div>	
	</div>
	<div class="row">
		<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 col-sm-offset-2">
			<div class="form-group">
				<label for="productividad">Productividad</label>
				<input type="number" name="productividad"  class="form-control" placeholder="Productividad...">

			</div>
		</div>	
	</div>
	<div class="row">
		<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 col-sm-offset-2">
			<div class="form-group">
				<label for="nombre">Escoger Galpon</label>
		             <select name="idgalpon" id="idgalpon" class="form-control selectpicker">
		             	 @foreach($galpones as $galp)
		              		<option value="{{$galp->id}}">{{$galp->id}}</option>
		              	@endforeach
					</select>

			</div>
		</div>	
	</div>
	
          <div class="form-group">
            <div class="col-sm-8 col-sm-offset-2">
              <br>
              <button class="btn btn-primary btn-block">
                Registrar Parvada <i class="fa fa-arrow-circle-right"></i>
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