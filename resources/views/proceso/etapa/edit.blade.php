@extends('layouts.fondo')
@section('content')
  <!-- start: PAGE HEADER -->
<!-- start: TOOLBAR -->
<div class="toolbar row">
  <div class="page-header">
    <h1 style="text-align: center;">* * * P R O C E S O  * * *
      <small> Sección de Etapas de Parvadas </small>
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
        <h2 class="panel-title center">Panel de edicion de Etapa de Parvada: <span class="text-bold">{{ $etapa->nombre}}</span></h2>
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
        {!!Form::model($etapa,['method'=>'PATCH','route'=>['etapa.update',$etapa->id]])!!}
			{{Form::token()}}			
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" class="form-control" value="{{$etapa->nombre}}">
			</div>

			


		<div class="form-group">
          <div class="col-sm-8 col-sm-offset-2">
            <br>
            <button class="btn btn-blue btn-block">
              Editar Categoria <i class="fa fa-arrow-circle-right"></i>
            </button>
            <br>
          </div>
        </div>
			{!!Form::close()!!}
      </div>
    </div>
  </div>
</div>

@endsection