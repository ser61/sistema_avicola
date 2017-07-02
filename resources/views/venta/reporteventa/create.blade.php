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
          <h3 align="center">Panel de control de <span class="text-bold">Reporte de Venta Factura</span></h3>
          @include('alertas.request')
          {!! Form::open(array('url'=>'venta/reporteventa','method'=>'POST','autocomplete'=>'off'))!!}
				{{Form::token()}}			
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label for="fecha_a">Desde:</label>
					<select name="fecha_a" class="form-control">
			    				@foreach ($factura_a as $fa)
			    				   <option value="{{$fa -> fecha}}">{{$fa -> fecha}}</option>	 
			    				@endforeach
			    	</select>
				</div>
				</div>
				
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label for="fecha_b">hasta: </label>
					<select name="fecha_b" class="form-control">
			    				@foreach ($factura_a as $fa)
			    				   <option value="{{$fa -> fecha}}">{{$fa -> fecha}}</option>	 
			    				@endforeach
			    	</select>
				</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			    		<div class="form-group">
			    			<label>Del Cliente:</label>
			    			<select name="idCliente" class="form-control">
			    				@foreach ($cliente as $cli)
			    				   <option value="{{$cli -> id}}">{{$cli -> nombre}}</option>	 
			    				@endforeach
			    			</select>
			    		</div>
			    	</div>
			    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			    		<div class="form-group">
			    			<label>Del Empleado:</label>
			    			<select name="idEmpleado" class="form-control">
			    				@foreach ($empleado as $en)
			    				   <option value="{{$en -> id}}">{{$en -> nombre}}</option>	 
			    				@endforeach
			    			</select>
			    		</div>
			    </div>

			    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			    		<div class="form-group">
			    			<label>Del Producto:</label>
			    			<select name="estado" class="form-control">
			    				<option value="activa">Activa</option>
			    				<option value="inactivo">Inactiva</option>
			    			</select>
			    		</div>
			    </div>

				<div class="form-group">
		            <div class="col-sm-8 col-sm-offset-2">
		              <br>
		              <button class="btn btn-primary btn-block">
		                Realizar Reporte <i class="fa fa-arrow-circle-right"></i>
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