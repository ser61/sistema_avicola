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
          <h3 align="center">Panel de control de <span class="text-bold">Traspaso de Lote de Huevo</span></h3>
          @include('alertas.request')
          {!!Form::open(array('url'=>'proceso/traspasolotehuevo','method'=>'POST','autocomplete'=>'off'))!!}
      {{Form::token()}}

  <div class="row">
    <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 col-sm-offset-2">
      <div class="form-group">
        <label for="nombre">Escoger Equipo de Nacedora</label>
                 <select name="idequipo" id="idequipo" class="form-control selectpicker">
                   @foreach($equipos as $equi)
                      <option value="{{$equi->id}}">id:{{$equi->id}} - tipo:{{$equi->tipo}} - Nombre:{{$equi->nombre }} - capacidad:{{$equi->capacidad}}</option>
                    @endforeach
          </select>

      </div>
    </div>  
  </div>
  <div class="row">
    <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 col-sm-offset-2">
      <div class="form-group">
        <label for="nombre">Escoger Lote de Huevo</label>
                 <select name="idlotehuevoincubable" id="idlotehuevoincubable" class="form-control selectpicker">
                   @foreach($lotes as $lot)
                      <option value="{{$lot->id}}">id:{{$lot->id}} - Cantidad:{{$lot->cantidad}}</option>
                    @endforeach
          </select>

      </div>
    </div>  
  </div>
  <div class="row">
    <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 col-sm-offset-2">
      <div class="form-group">
        <label for="nombre">Escoger Etapa</label>
                 <select name="idetapaincubacion" id="idetapaincubacion" class="form-control selectpicker">
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
              <button class="btn btn-primary btn-block">
                Registrar Traspaso de Lote<i class="fa fa-arrow-circle-right"></i>
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