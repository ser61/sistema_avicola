@extends('layouts.fondo')
@section('content')
  <section class="content-header">
    <h1 align="center">
      * * * * * <b>V E N T A</b> * * * * *
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="">Index</a></li>
      <li><a href="#">Editar</a></li>
    </ol>
  </section>
  <br>

  <section class="content">
    <div class="row">
      <div class="col-md-10 col-sm-offset-1">
        <div class="box box-primary">
          <!-- TITULO DE PANEL -->
          <div class="box-header with-border">
            <h3 align="center">Panel de control de <span class="text-bold">Producto Pollo</span></h3>
          </div>

          <div class="box-body">

        @include('alertas.request')
        {!! Form::model($productoVenta,['method'=>'PATCH','route'=>['pollo.update',$productoVenta->id], 'files'=>'true'])!!}
			{{Form::token()}}			
			<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" name="nombre" class="form-control" value="{{ $productoVenta->nombre}}">
				</div>

				<div class="form-group">
					<label for="stock">Stock</label>
					<input type="text" name="stock" class="form-control" value="{{ $productoVenta->stock}}">
				</div>

        		<div class="form-group">
	            	<label for="imagen">Imagen</label>
	            	<input type="file" name="imagen" class="form-control">
           			@if (($productoVenta -> imagen)!="")
	           		<img src="{{asset('imagenes/productos/'.$productoVenta-> imagen)}}" height="150px" >
	           		@endif
       			 </div>
       			
				<div class="form-group">
					<label for="precioUnitario">Precio Unitario</label>
					<input type="text" name="precioUnitario" class="form-control" value="{{ $productoVenta->precioUnitario}}">
				</div>

				<div class="form-group">
	            	<label for="edad">Edad</label>
	            	<input type="text" name="edad" class="form-control" value="{{ $productoVenta->edad}}">
       			</div>
        		
        		<div class="form-group">
	            	<label for="sexo">Sexo</label>
	            	<input type="text" name="sexo" class="form-control" value="{{ $productoVenta->sexo}}">
       			</div> 

        		<div class="form-group">
	            	<label for="pesoPromedio">Peso Promedio</label>
	            	<input type="text" name="pesoPromedio" class="form-control" value="{{ $productoVenta->pesoPromedio}}">
       			</div>

       			<div class="form-group">
	            	<label for="productividad">Productividad</label>
	            	<input type="text" name="productividad" class="form-control" value="{{ $productoVenta->productividad}}">
       			</div>

       			<div class="form-group">
	            	<label for="caracteristicas">Caracteristicas</label>
	            	<input type="text" name="caracteristicas" class="form-control" value="{{ $productoVenta->caracteristicas}}">
       			</div>

				<div class="form-group">
	    			<label>Tipo de Pollo</label>
	    			<select name="idTipo" class="form-control">
	    				@foreach ($tipo as $tip)
							@if ($tip -> id == $productoVenta -> idTipo)
		    				   <option value="{{$tip -> id}}" selected>{{$tip -> nombre}}</option>	 
						    @else
		    				   <option value="{{$tip -> id}}">{{$tip -> nombre}}</option>	 
	    				    @endif
	    				@endforeach
	    			</select>
    			</div>
				<div class="form-group">
		            <div class="col-sm-8 col-sm-offset-2">
		              <br>
		              <button class="btn btn-primary btn-block">
		                Editar Pollo <i class="fa fa-arrow-circle-right"></i>
		              </button>
		              <br>
		            </div>
		         </div>
			{!!Form::close()!!}



          </div>
        </div>
        <br>

      </div>
    </div>
  </section>
@endsection