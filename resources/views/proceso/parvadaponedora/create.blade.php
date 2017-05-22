@extends('layouts.fondo')
@section('content')
  <!-- start: PAGE HEADER -->
  <!-- start: TOOLBAR -->
  <div class="toolbar row">
    <div class="page-header">
      <h1 style="text-align: center;">* * * P R O C E S O * * *
        <small> Sección de las Parvada de Ponedora </small>
      </h1>
    </div>
  </div>
  <!-- end: TOOLBAR -->
  <!-- end: PAGE HEADER -->
  <br>

  <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
      <div class="panel panel-white">

        <div class="panel-heading">
          <h2 class="panel-title center">Panel de Registro de las <span class="text-bold">Parvada de Ponedora</span></h2>
          <div class="panel-tools">
            <div class="dropdown">
              <a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
                <i class="fa fa-cog"></i>
              </a>
              <ul class="dropdown-menu dropdown-light pull-right" role="menu">
                <li>
                  <a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
                </li>
                <li>
                  <a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>

		<div class="panel-body">
          @include('alertas.request')
          {!!Form::open(array('url'=>'proceso/parvadaponedora','method'=>'POST','autocomplete'=>'off'))!!}
			{{Form::token()}}

	<div class="row">
		<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 col-sm-offset-2">
			<div class="form-group">
				<label for="cantidadpollos">Cantidad de Pollos</label>
				<input type="text" name="cantidadpollos"  class="form-control" placeholder="Cantidad de Pollos...">

			</div>
		</div>	
	</div>
	<div class="row">
		<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 col-sm-offset-2">
			<div class="form-group">
				<label for="sexo">Sexo</label>
				<input type="text" name="sexo"  class="form-control" placeholder="Sexo...">

			</div>
		</div>	
	</div>
	<div class="row">
		<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 col-sm-offset-2">
			<div class="form-group">
				<label for="edad">Edad</label>
				<input type="text" name="edad"  class="form-control" placeholder="Edad...">

			</div>
		</div>	
	</div>
	<div class="row">
		<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 col-sm-offset-2">
			<div class="form-group">
				<label for="pesopromedio">Peso Promedio</label>
				<input type="text" name="pesopromedio"  class="form-control" placeholder="Peso Promedio...">

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
				<input type="text" name="productividad"  class="form-control" placeholder="Productividad...">

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
              <button class="btn btn-blue btn-block">
                Registrar Parvada <i class="fa fa-arrow-circle-right"></i>
              </button>
              <br>
            </div>
          </div>
          {!! Form::close() !!}
        </div>

      </div>
    </div>
  </div>

@endsection