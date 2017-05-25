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
          <h3 align="center">Panel de control de  <span class="text-bold">Reporte de Ventas</span></h3>
           <div class="row">
              <div class="col-md-6 col-sm-offset-3">
                  <a href="reporteventa/create"><button type="button" class="btn btn-danger btn-block" data-backdrop=”false”>
                    Realizar reporte Personalizado de Factura
                  </button></a>
              </div>   
           </div> 
           <br>
          <div class="row">
            <div class="col-md-6 col-sm-offset-3">
                <a href="factura/reporte"><button class="btn btn-primary btn-block">
                    Realizar Reporte de Todas las Facturas <i class="fa fa-arrow-circle-right"></i>
                  </button></a>
            </div>   
          </div>
          

        </div>
       
          <!-- fin-> TITULO DE PANEL -->
        
			
      </div>
      </div>
    </div>
    <br>
  </section>
@endsection