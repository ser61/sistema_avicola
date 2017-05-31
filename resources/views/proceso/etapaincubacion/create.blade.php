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
          <h3 align="center">Panel de control de las <span class="text-bold">Etapas de Huevos</span></h3>
          @include('alertas.request')
          {!!Form::open(array('url'=>'proceso/etapaincubacion','method'=>'POST','autocomplete'=>'off'))!!}
      {{Form::token()}}

  <div class="row">
    <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 col-sm-offset-2">
      <div class="form-group">
        <label for="nombre">Etapas de Huevo</label>
                 <select name="nombre" id="idparvada" class="form-control selectpicker">
                      <option value="Etapa de Incubacion">Etapa de Incubacion</option>
                      <option value="Etapa de Nacedora">Etapa de Nacedora</option>
          </select>
      </div>
    </div>  
  </div>
  
  
          <div class="form-group">
            <div class="col-sm-8 col-sm-offset-2">
              <br>
              <button class="btn btn-primary btn-block">
                Registrar Etapa <i class="fa fa-arrow-circle-right"></i>
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