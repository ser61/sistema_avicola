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
            <h3 align="center">Panel de control de <span class="text-bold">Categoria</span></h3>
          </div>

          <div class="box-body">

        @include('alertas.request')
        {!! Form::model($categoria,['method'=>'PATCH','route'=>['categoria.update',$categoria->id]])!!}
			{{Form::token()}}			
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" class="form-control" value="{{$categoria->nombre}}">
			</div>

			<div class="form-group">
				<label for="descripcion">Descripcion</label>
				<input type="text" name="descripcion" class="form-control" value="{{$categoria->descripcion}}">
			</div>

			<div class="form-group">
				<label for="pesoIntervaloSuperior">Peso Intervalo Superior</label>
				<input type="text" name="pesoIntervaloSuperior" class="form-control" value="{{$categoria->pesoIntervaloSuperior}}">
			</div>

			<div class="form-group">
				<label for="pesoIntervaloInferior">Peso Intervalo Inferior</label>
				<input type="text" name="pesoIntervaloInferior" class="form-control" value="{{$categoria->pesoIntervaloInferior}}">
			</div>


			<div class="form-group">
	            <div class="col-sm-8 col-sm-offset-2">
	              <br>
	              <button class="btn btn-primary btn-block">
	                Editar Categoria <i class="fa fa-arrow-circle-right"></i>
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