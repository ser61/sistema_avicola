<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Granja Avícola</title>

    <!-- Bootstrap -->
    <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress
    <link href="{{asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck 
    <link href="{{asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
	
    <!-- bootstrap-progressbar 
    <link href="{{asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap 
    <link href="{{asset('vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker 
    <link href="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">-->

    <!-- Custom Theme Style -->
    <link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="http://127.0.0.1:8000" class="site_title"><i class="fa fa-laptop"></i> <span>Avícola</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('images/img.jpg')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido</span>
                <h2>ING. ELIOT</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> SEGURIDAD <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{asset('seguridad/privilegios')}}">Administrar Privilegios</a></li>
                      <li><a href="{{asset('administracion/cargo')}}">Gestionar Cargos</a></li>
                      <li><a href="{{asset('administracion/cliente')}}">Gestionar Clientes</a></li>
                      <li><a href="{{asset('administracion/user')}}">Gestionar Usuarios</a></li>
                      <li><a href="{{asset('administracion/caso')}}">Administrar Casos de Uso</a></li>
                      <li><a href="{{asset('administracion/empleado')}}">Gestionar Empleados</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> BITÁCORA <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{asset('pedidos/pedido')}}">Administrar Pedidos</a></li>
                      <li><a href="{{asset('pedidos/producto')}}">Gestionar Productos</a></li>
                      <li><a href="{{asset('pedidos/factura')}}">Administrar Facturas</a></li>
                      <li><a href="{{asset('pedidos/zona')}}">Gestionar Zonas</a></li>
                      <li><a href="{{asset('pedidos/estado')}}">Gestionar Estados</a></li>


                    </ul>
                  </li>

                  <li><a><i class="fa fa-edit"></i> COMPRA <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{asset('pedidos/pedido')}}">Administrar Pedidos</a></li>
                      <li><a href="{{asset('pedidos/producto')}}">Gestionar Productos</a></li>
                      <li><a href="{{asset('pedidos/factura')}}">Administrar Facturas</a></li>
                      <li><a href="{{asset('pedidos/zona')}}">Gestionar Zonas</a></li>
                      <li><a href="{{asset('pedidos/estado')}}">Gestionar Estados</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-edit"></i> VENTA <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{asset('pedidos/pedido')}}">Administrar Pedidos</a></li>
                      <li><a href="{{asset('pedidos/producto')}}">Gestionar Productos</a></li>
                      <li><a href="{{asset('pedidos/factura')}}">Administrar Facturas</a></li>
                      <li><a href="{{asset('pedidos/zona')}}">Gestionar Zonas</a></li>
                      <li><a href="{{asset('pedidos/estado')}}">Gestionar Estados</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-edit"></i> INVENTARIO <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{asset('pedidos/pedido')}}">Administrar Pedidos</a></li>
                      <li><a href="{{asset('pedidos/producto')}}">Gestionar Productos</a></li>
                      <li><a href="{{asset('pedidos/factura')}}">Administrar Facturas</a></li>
                      <li><a href="{{asset('pedidos/zona')}}">Gestionar Zonas</a></li>
                      <li><a href="{{asset('pedidos/estado')}}">Gestionar Estados</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-desktop"></i> REPORTES <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{asset('pedidos/zona')}}">Zona</a></li>

                    </ul>
                  </li>
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                     <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>

                    </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">
                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Avícola System</h3>
                  </div>
                </div>
                <div class="box-body">
                    <div class="row">
                      <div class="col-md-12">
                              <!--Contenido-->
                              @yield('contenido')
                              <!--Fin Contenido-->
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.box-body -->
                <div class="clearfix"></div>
              </div>
            </div>

          </div>

        </div>

       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Sistema de Informacion II Primer Parcial 
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
    @stack('scripts')
    <!-- Bootstrap -->
    <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap/dist/js/bootstrap-select.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- Chart.js')}} -->
    <script src="{{asset('vendors/Chart.js/dist/Chart.min.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('build/js/custom.min.js')}}"></script>
	
  </body>
</html>
