@extends('layouts.fondo')
@section('content')
  <!-- start: PAGE HEADER -->
  <!-- start: TOOLBAR -->
  <div class="toolbar row">
    <div class="page-header">
      <h1 style="text-align: center;">* * * P R O C E S O * * *
        <small> Sección de los Traspaso de Parvadas </small>
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
          <h2 class="panel-title center">Panel de Registro de los <span class="text-bold">Traspaso de Parvada</span></h2>
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
          {!!Form::open(array('url'=>'proceso/traspasoparvada','method'=>'POST','autocomplete'=>'off'))!!}
			{{Form::token()}}

	<div class="row">
		<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 col-sm-offset-2">
			<div class="form-group">
				<label for="nombre">Escoger Galpon</label>
		             <select name="idgalpon" id="idgalpon" class="form-control selectpicker">
		             	 @foreach($galpones as $galp)
		              		<option value="{{$galp->id}}">id:{{$galp->id}} - tipo:{{$galp->tipog}} - ubicacion:{{$galp->ubicacion }} - capacidad:{{$galp->capacidad}}</option>
		              	@endforeach
					</select>

			</div>
		</div>	
	</div>
	<div class="row">
		<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 col-sm-offset-2">
			<div class="form-group">
				<label for="nombre">Escoger Parvada</label>
		             <select name="idparvada" id="idparvada" class="form-control selectpicker">
		             	 @foreach($parvadas as $parv)
		              		<option value="{{$parv->id}}">id:{{$parv->id}} - tipo:{{$parv->tipo}}</option>
		              	@endforeach
					</select>

			</div>
		</div>	
	</div>
	<div class="row">
		<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 col-sm-offset-2">
			<div class="form-group">
				<label for="nombre">Escoger Etapa</label>
		             <select name="idetapa" id="idetapa" class="form-control selectpicker">
		             	 @foreach($etapas as $eta)
		              		<option value="{{$eta->id}}">{{$eta->id}} - {{$eta->nombre}}</option>
		              	@endforeach
					</select>

			</div>
		</div>	
	</div>
	
	
          <div class="form-group">
            <div class="col-sm-8 col-sm-offset-2">
              <br>
              <button class="btn btn-blue btn-block">
                Registrar Traspaso <i class="fa fa-arrow-circle-right"></i>
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