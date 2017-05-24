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
          <h3 align="center">Panel de control de <span class="text-bold">Producto Pollo</span></h3>
          @include('alertas.request')
          {!! Form::open(array('url'=>'venta/pollo','method'=>'POST','autocomplete'=>'off', 'files'=>'true'))!!}
				{{Form::token()}}			
				
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" name="nombre" class="form-control" >
				</div>

				<div class="form-group">
					<label for="stock">Stock</label>
					<input type="text" name="stock" class="form-control">
				</div>

        		<div class="form-group">
	            	<label for="imagen">Imagen</label>
	            	<input type="file" name="imagen" class="form-control">
       			 </div>

				<div class="form-group">
					<label for="precioUnitario">Precio Unitario</label>
					<input type="text" name="precioUnitario" class="form-control" >
				</div>

        		<div class="form-group">
	            	<label for="edad">Edad</label>
	            	<input type="text" name="edad" class="form-control">
       			</div>
        		
        		<div class="form-group">
	            	<label for="sexo">Sexo</label>
	            	<input type="text" name="sexo" class="form-control">
       			</div>

        		<div class="form-group">
	            	<label for="pesoPromedio">Peso Promedio</label>
	            	<input type="text" name="pesoPromedio" class="form-control">
       			</div>

       			<div class="form-group">
	            	<label for="productividad">Productividad</label>
	            	<input type="text" name="productividad" class="form-control">
       			</div>

       			<div class="form-group">
	            	<label for="caracteristicas">Caracteristicas</label>
	            	<input type="text" name="caracteristicas" class="form-control">
       			</div>

				<div class="form-group">
	    			<label>Tipo de Pollo</label>
	    			<select name="idTipo" class="form-control">
	    				@foreach ($tipo as $tip)
	    				   <option value="{{$tip -> id}}">{{$tip -> nombre}}</option>	 
	    				@endforeach
	    			</select>
    			</div>

				  <div class="form-group">
		            <div class="col-sm-8 col-sm-offset-2">
		              <br>
		              <button class="btn btn-primary btn-block">
		                Registrar Pollo <i class="fa fa-arrow-circle-right"></i>
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