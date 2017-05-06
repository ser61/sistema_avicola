@extends('layouts.fondo')
@section('content')
  <!-- start: PAGE HEADER -->
  <!-- start: TOOLBAR -->
  <div class="toolbar row">
    <div class="page-header">
      <h1 style="text-align: center;">Bienvenido <small> Pagina principal </small></h1>
    </div>
  </div>
  <!-- end: TOOLBAR -->
  <!-- end: PAGE HEADER -->
  <br>
  <div class="row">
    <div class="col-md-12">
      <!-- start: SIMPLE LINE CHART -->
      <div class="panel panel-white">
        <div class="panel-heading">
          <h4 class="panel-title">Simple Line <span class="text-bold">Chart</span></h4>
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
                <a class="panel-refresh" href="#"> <i class="fa fa-refresh"></i> <span>Refresh</span> </a>
              </li>
              <li>
                <a class="panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> <span>Configurations</span></a>
              </li>
              <li>
                <a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span></a>
              </li>
            </ul>
            </div>
            <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
          </div>
        </div>
        <div class="panel-body">
          <div id="demo-chart-1" class="height-300">
            <svg></svg>
          </div>
        </div>
      </div>
      <!-- end: SIMPLE LINE CHART -->
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <!-- start: REGULAR PIE CHART -->
      <div class="panel panel-white">
        <div class="panel-heading">
          <h4 class="panel-title">Regular <span class="text-bold">Pie</span> Chart</h4>
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
                <a class="panel-refresh" href="#"> <i class="fa fa-refresh"></i> <span>Refresh</span> </a>
              </li>
              <li>
                <a class="panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> <span>Configurations</span></a>
              </li>
              <li>
                <a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span></a>
              </li>
            </ul>
            </div>
            <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
          </div>
        </div>
        <div class="panel-body">
          <div id="demo-chart-9" class="height-300">
            <svg></svg>
          </div>
        </div>
      </div>
      <!-- end: REGULAR PIE CHART -->
    </div>
    <div class="col-md-6">
      <!-- start: DONUT CHART -->
      <div class="panel panel-white">
        <div class="panel-heading">
          <h4 class="panel-title">Donut <span class="text-bold">Chart</span></h4>
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
                <a class="panel-refresh" href="#"> <i class="fa fa-refresh"></i> <span>Refresh</span> </a>
              </li>
              <li>
                <a class="panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> <span>Configurations</span></a>
              </li>
              <li>
                <a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span></a>
              </li>
            </ul>
            </div>
            <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
          </div>
        </div>
        <div class="panel-body">
          <div id="demo-chart-10" class="height-300">
            <svg></svg>
          </div>
        </div>
      </div>
      <!-- end: DONUT CHART -->
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <!-- start: DISCRETE BAR CHART -->
      <div class="panel panel-white">
        <div class="panel-heading">
          <h4 class="panel-title">Discrete Bar <span class="text-bold">Chart</span></h4>
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
                <a class="panel-refresh" href="#"> <i class="fa fa-refresh"></i> <span>Refresh</span> </a>
              </li>
              <li>
                <a class="panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> <span>Configurations</span></a>
              </li>
              <li>
                <a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span></a>
              </li>
            </ul>
            </div>
            <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
          </div>
        </div>
        <div class="panel-body">
          <div id="demo-chart-4" class="height-300">
            <svg></svg>
          </div>
        </div>
      </div>
      <!-- end: DISCRETE BAR CHART -->
    </div>
  </div>
@endsection