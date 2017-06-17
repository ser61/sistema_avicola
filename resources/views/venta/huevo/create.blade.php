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
          <h3 align="center">Panel de control de <span class="text-bold">Producto Huevo</span></h3>
          @include('alertas.request')
          {!! Form::open(array('url'=>'venta/huevo','method'=>'POST','autocomplete'=>'off', 'files'=>'true'))!!}
				{{Form::token()}}			
				<div class="form-group">
					<label for="nombre">Nombre del Producto Huevo</label>
					<input type="text" name="nombre" class="form-control" >
				</div>

				<div class="form-group">
					<label for="stock">Stock del Producto</label>
					<input type="number" name="stock" class="form-control">
				</div>

            		<div class="form-group">
		            	<label for="imagen">Imagen del Producto</label>
		            	<input type="file" name="imagen" class="form-control">
           			 </div>

					<div class="form-group">
						<label for="precioUnitario">Precio Unitario del Producto (Bs)</label>
						<input type="number" step="any" name="precioUnitario" class="form-control" >
					</div>


				<div class="form-group">
	    			<label>Categoria de Huevo</label>
	    			<select name="idCategoria" class="form-control">
	    				@foreach ($categoria as $cat)
	    				   <option value="{{$cat -> id}}">{{$cat -> nombre}}</option>	 
	    				@endforeach
	    			</select>
    			</div>

				  <div class="form-group">
		            <div class="col-sm-8 col-sm-offset-2">
		              <br>
		              <button class="btn btn-primary btn-block">
		                Registrar Producto Huevo <i class="fa fa-arrow-circle-right"></i>
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