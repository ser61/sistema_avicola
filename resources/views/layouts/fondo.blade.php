<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistema Avicola</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  {!!Html::style('bootstrap/css/bootstrap.min.css')!!}
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  {!!Html::style('css/jquery.dataTables.min.css')!!}
  {!!Html::style('plugins/jvectormap/jquery-jvectormap-1.2.2.css')!!}
  {!!Html::style('plugins/iCheck/all.css')!!}
  {!!Html::style('plugins/select2/select2.min.css')!!}
  <!-- Theme style -->
  {!!Html::style('dist/css/AdminLTE.min.css')!!}
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  {!!Html::style('dist/css/skins/_all-skins.min.css')!!}
  {!!Html::style('css/fileinput.css')!!}
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  {!!Html::script('js/fileinput.min.js')!!}
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

      <!-- Logo -->
      <a href="{{  url('/home') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>S</b>AVI</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">Sistema<b>Avicola</b></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{ asset('usuarios/'.Auth::user()->foto)}}" class="user-image" alt="User Image">
                <span class="hidden-xs">{{Auth::user()->name}}</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="{{ asset('usuarios/'.Auth::user()->foto)}}" class="img-circle" alt="User Image">
                  <p>
                    {{Auth::user()->name}}
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="{{ url('/logout') }}" class="btn btn-default btn-flat"
                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                      Sign out
                    </a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                    </form>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{ asset('usuarios/'.Auth::user()->foto) }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{Auth::user()->name}}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">MENU PRINCIPAL</li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>SEGURIDAD</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li>
                <a href="{{ url('/cargo')}}"><i class="fa fa-circle-o"></i>
                  <span class="title"> Cargo </span>
                </a>
              </li>
              <li>
                <a href="{{ url('/empleado') }}"><i class="fa fa-circle-o"></i>
                  <span class="title"> Empleado </span>
                </a>
              </li>
              <li>
                <a href="{{ url('/admin') }}"><i class="fa fa-circle-o"></i>
                  <span class="title"> Usuarios </span>
                </a>
              </li>
              <li>
                <a href="{{ url('/privilegio') }}"><i class="fa fa-circle-o"></i>
                  <span class="title"> Privilegios </span>
                </a>
              </li>
              <li>
                <a href="{{ url('/bitacora') }}"><i class="fa fa-circle-o"></i>
                  <span class="title"> Bitacora </span>
                </a>
              </li>
              <li>
                <a href="{{ url('/backup') }}"><i class="fa fa-circle-o"></i>
                  <span class="title"> BackUp </span>
                </a>
              </li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>COMPRA</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li>
                <a href="{{ url("/proveedor") }}"><i class="fa fa-circle-o"></i>
                  <span class="title"> Proveedores </span>
                </a>
              </li>
              <li>
                <a href="{{ url("/insumo") }}"><i class="fa fa-circle-o"></i>
                  <span class="title"> Insumos </span>
                </a>
              </li>
              <li>
                <a href="{{ url("/factura_compra") }}"><i class="fa fa-circle-o"></i>
                  <span class="title"> Facturas </span>
                </a>
              </li>
              <li>
                <a href="{{ url("/inventario") }}"><i class="fa fa-circle-o"></i>
                  <span class="title"> Inventario </span>
                </a>
              </li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>VENTA</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li>
                <a href="{{asset('venta/cliente')}}"><i class="fa fa-circle-o"></i>
                  <span class="title">Clientes</span>
                </a>
              </li>
              <li>
                <a href="{{asset('venta/factura')}}"><i class="fa fa-circle-o"></i>
                  <span class="title">Facturas</span>
                </a>
              </li>
              <li>
                <a href="{{asset('venta/reporteventa')}}"><i class="fa fa-circle-o"></i>
                  <span class="title">Reportes de Venta</span>
                </a>
              </li>
              
              <li>
                <a href="{{asset('venta/tipo')}}"><i class="fa fa-circle-o"></i>
                  <span class="title">Tipos de Pollo</span>
                </a>
              </li>
              <li>
                <a href="{{asset('venta/pollo')}}"><i class="fa fa-circle-o"></i>
                  <span class="title">Producto Pollo</span>
                </a>
              </li>
              <li>
                <a href="{{asset('venta/categoria')}}"><i class="fa fa-circle-o"></i>
                  <span class="title">Categorias de Huevos</span>
                </a>
              </li>
              <li>
                <a href="{{asset('venta/huevo')}}"><i class="fa fa-circle-o"></i>
                  <span class="title">Producto Huevo</span>
                </a>
              </li>
              <li>
                <a href="{{asset('venta/inventario')}}"><i class="fa fa-circle-o"></i>
                  <span class="title">Inventarios</span>
                </a>
              </li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>INFRAESTRUCTURA</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
	            <li>
		            <a href="{{ url('infraestructura/infraestructura') }}"><i class="fa fa-circle-o"></i>
			            <span class="title">Infraestructura</span>
		            </a>
	            </li>
              <li>
                <a href="{{ url('infraestructura/equipo') }}"><i class="fa fa-circle-o"></i>
                  <span class="title">Equipos</span>
                </a>
              </li>

              <li>
                <a href="{{ url('infraestructura/bateria') }}"><i class="fa fa-circle-o"></i>
                  <span class="title">Baterias</span>
                </a>
              </li>
              <li>
                <a href="{{ url('infraestructura/granja') }}"><i class="fa fa-circle-o"></i>
                  <span class="title">Granjas</span>
                </a>
              </li>
              <li>
                <a href="{{ url('infraestructura/proceso_sanitario') }}"><i class="fa fa-circle-o"></i>
                  <span class="title">Procesos Sanitarios</span>
                </a>
              </li>
              <li>
                <a href="{{ url('infraestructura/registro_sanitizacion') }}"><i class="fa fa-circle-o"></i>
                  <span class="title">Registros de Sanitización</span>
                </a>
              </li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>REPORTE</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li>
                <a href="{{ url('reportes/reporte_diario') }}"><i class="fa fa-circle-o"></i>
                  <span class="title"> Reportes Diarios </span>
                </a>
              </li>
              <li>
                <a href="{{ url('reportes/reporte_medicacion') }}"><i class="fa fa-circle-o"></i>
                  <span class="title"> Reportes de Medicación </span>
                </a>
              </li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>PROCESOS</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li>
                <a href="{{ url('/proceso/etapa')}}"><i class="fa fa-circle-o"></i>
                  <span class="title">Etapas de Parvada</span>
                </a>
              </li>
              <li>
                <a href="{{ url('/proceso/etapaincubacion')}}"><i class="fa fa-circle-o"></i>
                  <span class="title">Etapas de Lote de Huevos</span>
                </a>
              </li>
              <li>
                <a href="{{ url('/proceso/parvadaengorde')}}"><i class="fa fa-circle-o"></i>
                  <span class="title">Parvadas de Engorde</span>
                </a>
              </li>
              <li>
                <a href="{{ url('/proceso/parvadaponedora')}}"><i class="fa fa-circle-o"></i>
                  <span class="title">Parvadas de Ponedora</span>
                </a>
              </li>
              <li>
                <a href="{{ url('/proceso/parvadareproductora')}}"><i class="fa fa-circle-o"></i>
                  <span class="title">Parvadas de Roproductora</span>
                </a>
              </li>

              <li>
                <a href="{{ url('/proceso/traspasoparvada')}}"><i class="fa fa-circle-o"></i>
                  <span class="title">Traspaso de Parvada</span>
                </a>
              </li>
              
              <li>
                <a href="{{ url('/proceso/ordenproduccion')}}"><i class="fa fa-circle-o"></i>
                  <span class="title">Orden de Produccion</span>
                </a>
              </li>
              
              <li>
                <a href="{{ url('/proceso/traspasolotehuevo')}}"><i class="fa fa-circle-o"></i>
                  <span class="title">Traspasos Lote de Huevos</span>
                </a>
              </li>
              <li>
                <a href="{{ url('/proceso/lotehuevoincubable')}}"><i class="fa fa-circle-o"></i>
                  <span class="title">Lote de Huevos Incubables</span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">

      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
{!!Html::script('plugins/jQuery/jquery-2.2.3.min.js')!!}
<!-- Bootstrap 3.3.6 -->
{!!Html::script('bootstrap/js/bootstrap.min.js')!!}
  <!-- Select2 -->
{!!Html::script('plugins/select2/select2.full.min.js')!!}
  <!-- InputMask -->
{!!Html::script('plugins/input-mask/jquery.inputmask.js')!!}
{!!Html::script('plugins/input-mask/jquery.inputmask.date.extensions.js')!!}
{!!Html::script('plugins/input-mask/jquery.inputmask.extensions.js')!!}
{!!Html::script('js/jquery.dataTables.min.js')!!}
{!!Html::script('js/fileinput.min.js')!!}
{!!Html::script('plugins/slimScroll/jquery.slimscroll.min.js')!!}
{!!Html::script('plugins/iCheck/icheck.min.js')!!}
{!!Html::script('plugins/fastclick/fastclick.js')!!}
  <!-- AdminLTE App -->
{!!Html::script('dist/js/app.min.js')!!}
  <!-- Sparkline -->
{!!Html::script('plugins/sparkline/jquery.sparkline.min.js')!!}
  <!-- jvectormap -->
{!!Html::script('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')!!}
{!!Html::script('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')!!}


  <!-- ChartJS 1.0.1 -->
{!!Html::script('plugins/chartjs/Chart.min.js')!!}
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{!!Html::script('dist/js/pages/dashboard2.js')!!}
  <!-- AdminLTE for demo purposes -->
{!!Html::script('dist/js/demo.js')!!}
@stack('scripts')
</body>
</html>
