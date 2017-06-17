@extends('layouts.fondo')
@section('content')
  <section class="content-header">
    <h1 align="center">
      * * * * * <b>V E N T A</b> * * * * *
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">index</a></li>
    </ol>
  </section>
  <br>

  <section class="content">
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <div class="box box-primary">
        <!-- TITULO DE PANEL -->
        <div class="box-header with-border">
          <h3 align="center">Panel de control de <span class="text-bold">Categoria de Huevo</span></h3>
          @include('alertas.logrado')
        </div>
       
          <!-- fin-> TITULO DE PANEL -->
        @if(count($cantidad) > 0)
        @include('venta.categoria.search')
          <!-- CUADRO DE BUSQUEDA -->
        
        <!-- fin-> CUADRO DE BUSQUEDA -->

        <!-- TABLA DE DATOS -->

        <div class="box-body">
          <table class="table table-bordered" style="border-top-color: #00AEFF">
            <thead>
            <tr>
              <th>Id</th>						
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Int.Sup.</th>
				<th>Int.Inf.</th>
				<th>Opciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categoria as $cat)
					<tr>
						<td>{{ $cat->id }}</td>
						<td>{{ $cat->nombre }}</td>
						<td>{{ $cat->descripcion }}</td>
						<td>{{ $cat->pesoIntervaloSuperior }}</td>
						<td>{{ $cat->pesoIntervaloInferior }}</td>
						<td>
							<a href="{{URL::action('CategoriaController@edit',$cat->id)}}" class="btn btn-info" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                 			<a href="" data-target="#modal-delete-{{$cat->id}}" data-toggle="modal" class="btn btn-danger" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
						</td>
					</tr>
			@include('venta.categoria.modal')
			@endforeach
            </tbody>
          </table>
        </div>
        <!-- fin-> TABLA DE DATOS -->
        @else
          <div class="box">
            <div class="box-header">
              <h3 align="center"><b>Aun no tiene ninguna Categoria de Huevo...</b></h3>
            </div>
            <div class="box-body">
              <br>
              <p align="center">Bienvenido a la seccion de Categoria de Huevos, para agregar una nueva Categoria, haga click en icono de mas.</p>
              <br>
              <div class="col-md-6 col-sm-offset-3">
                <a href="categoria/create"><button type="button" class="btn btn-danger btn-block" data-backdrop=”false”>
                  <i class="fa fa-plus"></i>
                </button></a>
                

              </div>
            </div>
          </div>
        @endif
      </div>
      </div>
    </div>
    <br>
  </section>
@endsection