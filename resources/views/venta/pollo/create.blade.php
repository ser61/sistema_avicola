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
				
				<div class="row">
		          <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 col-sm-offset-2">
		            <div class="form-group">
						<label for="nombre">Nombre del Producto de Venta (Pollo)</label>
						<input type="text" name="nombre" class="form-control" >
					</div>
		          </div>  
		        </div>
				
		        <div class="row">
		          <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 col-sm-offset-2">
		        	<div class="form-group">
						<label for="stock">Stock del Producto Pollo</label>
						<input type="number" name="stock" class="form-control">
					</div>    
		          </div>  
		        </div>
				
		        <div class="row">
		          <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 col-sm-offset-2">
		        	 <div class="form-group">
		            	<label for="imagen">Imagen del Producto Pollo</label>
		            	<input type="file" name="imagen" class="form-control">
	       			 </div>  
		          </div>  
		        </div>
        		
		        <div class="row">
		          <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 col-sm-offset-2">
		        	 <div class="form-group">
						<label for="precioUnitario">Precio Unitario  del Producto (Bs)</label>
						<input type="number" step="any" name="precioUnitario" class="form-control" >
					</div>  
		          </div>  
		        </div>
				
		        <div class="row">
		          <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 col-sm-offset-2">
		        	 <div class="form-group">
		            	<label for="edad">Edad Aprox. del Pollo (Dias)</label>
		            	<input type="number" name="edad" class="form-control">
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
		            	<label for="pesoPromedio">Peso Promedio (Kg)</label>
		            	<input type="number" step="any" name="pesoPromedio" class="form-control">
	       			</div>  
		          </div>  
		        </div>
        		
		        <div class="row">
		          <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 col-sm-offset-2">
		        	<div class="form-group">
		            	<label for="caracteristicas">Caracteristicas del Producto</label>
		            	<input type="text" name="caracteristicas" class="form-control">
	       			</div>  
		          </div>  
		        </div>
       			
		        <div class="row">
		          <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 col-sm-offset-2">
		        	<div class="form-group">
		    			<label>Tipo de Pollo del Producto</label>
		    			<select name="idTipo" class="form-control">
		    				@foreach ($tipo as $tip)
		    				   <option value="{{$tip -> id}}">{{$tip -> nombre}}</option>	 
		    				@endforeach
		    			</select>
	    			</div>   
		          </div>  
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