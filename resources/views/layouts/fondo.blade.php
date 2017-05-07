<!DOCTYPE html>
<html lang="en">
	<!-- start: HEAD -->
	<head>
		<title>Sistema Avicola</title>
		<!-- start: META -->
		<meta charset="utf-8" />
    <meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: MAIN CSS -->
    {!!Html::style('plugins/animate.css/animate.min.css')!!}
    {!!Html::style('plugins/bootstrap/css/bootstrap.min.css')!!}
    {!!Html::style('plugins/bootstrap-daterangepicker/daterangepicker-bs3.css')!!}
    {!!Html::style('plugins/bootstrap-fileupload/bootstrap-fileupload.min.css')!!}
    {!!Html::style('plugins/bootstrap-select/bootstrap-select.min.css')!!}
    {!!Html::style('plugins/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css')!!}
    {!!Html::style('plugins/DataTables/media/css/DT_bootstrap.css')!!}
    {!!Html::style('plugins/font-awesome/css/font-awesome.min.css')!!}
    {!!Html::style('plugins/fullcalendar/fullcalendar/fullcalendar.css')!!}
    {!!Html::style('plugins/iCheck/skins/all.css')!!}
    {!!Html::style('plugins/owl-carousel/owl-carousel/owl.carousel.css')!!}
    {!!Html::style('plugins/owl-carousel/owl-carousel/owl.theme.css')!!}
    {!!Html::style('plugins/owl-carousel/owl-carousel/owl.transitions.css')!!}
    {!!Html::style('plugins/perfect-scrollbar/src/perfect-scrollbar.css')!!}
    {!!Html::style('plugins/summernote/dist/summernote.css')!!}
    {!!Html::style('plugins/toastr/toastr.min.css')!!}
    {!!Html::style('css/styles.css')!!}
    {!!Html::style('css/styles-responsive.css')!!}
      <!-- end: MAIN CSS -->
		
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
    {!!Html::style('plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')!!}
    {!!Html::style('plugins/select2/select2.css')!!}
    {!!Html::style('plugins/datepicker/css/datepicker.css')!!}
    {!!Html::style('plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css')!!}
    {!!Html::style('plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css')!!}
    {!!Html::style('plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css')!!}
    {!!Html::style('plugins/jQuery-Tags-Input/jquery.tagsinput.css')!!}
    {!!Html::style('plugins/nvd3/nv.d3.min.css')!!}
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
      <!-- start: CORE CSS -->
    {!!Html::style('css/plugins.css')!!}
    {!!Html::style('css/styles.css')!!}
    {!!Html::style('css/styles-responsive.css')!!}
    <link rel="stylesheet" href={{ asset('css/print.css') }} type="text/css" media="print"/>
    <link rel="stylesheet" href={{ asset('css/themes/theme-default.css') }} type="text/css" id="skin_color">
		<!-- end: CORE CSS -->
    <script>
      window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
      ]); ?>
    </script>
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body>
		<div class="main-wrapper">
			<!-- start: TOPBAR -->
			<header class="topbar navbar navbar-inverse navbar-fixed-top inner">
				<!-- start: TOPBAR CONTAINER -->
				<div class="container">
					<div class="navbar-header">
						<a class="sb-toggle-left hidden-md hidden-lg" href="#main-navbar">
							<i class="fa fa-bars"></i>
						</a>
						<!-- start: LOGO -->
						<a class="navbar-brand" href="index.html">
							<img src={{ asset('images/logo.png')}} alt="Rapido"/>
						</a>
						<!-- end: LOGO -->
					</div>
					<div class="topbar-tools">
						<!-- start: TOP NAVIGATION MENU -->
						<ul class="nav navbar-right">
							<!-- start: USER DROPDOWN -->
							<li class="dropdown current-user">
								<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
									<img src={{ asset('images/avatar-1-small.jpg')}} class="img-circle" alt=""> <span class="username hidden-xs">Peter Clark</span> <i class="fa fa-caret-down "></i>
								</a>
								<ul class="dropdown-menu dropdown-dark">
									<li>
										<a href="pages_user_profile.html">
											MI Perfil
										</a>
									</li>
									<li>
                    <a href="{{ url('/logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
											Cerrar Sesión
										</a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                    </form>
									</li>
								</ul>
							</li>
							<!-- end: USER DROPDOWN -->
							<li class="right-menu-toggle">
								<a href="#" class="sb-toggle-right">
									<i class="fa fa-globe toggle-icon"></i> <i class="fa fa-caret-right"></i>
								</a>
							</li>
						</ul>
						<!-- end: TOP NAVIGATION MENU -->
					</div>
				</div>
				<!-- end: TOPBAR CONTAINER -->
			</header>
			<!-- end: TOPBAR -->
			<!-- start: PAGESLIDE LEFT -->
			<a class="closedbar inner hidden-sm hidden-xs" href="#">
			</a>
			<nav id="pageslide-left" class="pageslide inner">
				<div class="navbar-content">
					<!-- start: SIDEBAR -->
					<div class="main-navigation left-wrapper transition-left">
						<div class="navigation-toggler hidden-sm hidden-xs">
							<a href="#main-navbar" class="sb-toggle-left">
							</a>
						</div>
						<div class="user-profile border-top padding-horizontal-10 block">
							<div class="inline-block">
								<img src={{ asset('images/avatar-1.jpg')}} alt="">
							</div>
							<div class="inline-block">
								<h5 class="no-margin"> Binevenido </h5>
								<h4 class="no-margin"> Peter Clark </h4>
							</div>
						</div>
						<!-- start: MAIN NAVIGATION MENU -->
						<ul class="main-navigation-menu">
							<li>
								<a href="javascript:void(0)">
									<i class="fa fa-desktop"></i>
									<span class="title"> SEGURIDAD </span>
									<i class="icon-arrow"></i>
								</a>
								<ul class="sub-menu">
									<li>
										<a href="{{ url('/cargo')}}">
											<span class="title"> Cargo </span>
										</a>
									</li>
									<li>
										<a href="{{ url('/empleado') }}">
											<span class="title"> Empleado </span>
										</a>
									</li>	
									<li>
										<a href="#">
											<span class="title"> Usuarios </span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="title"> Privilegios </span>
										</a>
									</li>	
									<li>
										<a href="#">
											<span class="title"> Bitacora </span>
										</a>
									</li>	
								</ul>
							</li>
							<li>
								<a href="javascript:void(0)">
									<i class="fa fa-cogs"></i>
									<span class="title"> COMPRA </span>
									<i class="icon-arrow"></i>
								</a>
								<ul class="sub-menu">
									<li>
										<a href="ui_elements.html">
											<span class="title"> Proveedores </span>
										</a>
									</li>
									<li>
										<a href="ui_buttons.html">
											<span class="title"> Insumos </span>
										</a>
									</li>
									<li>
										<a href="ui_icons.html">
											<span class="title"> Adquisición de Parvada </span>
										</a>
									</li>
									<li>
										<a href="ui_animations.html">
											<span class="title"> Unidad de Medidas </span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0)">
									<i class="fa fa-th-large"></i> 
									<span class="title"> VENTA </span>
									<i class="icon-arrow"></i>
								</a>
								<ul class="sub-menu">
									<li>
										<a href="table_basic.html">
											<span class="title">Clientes</span>
										</a>
									</li>
									<li>
										<a href="table_responsive.html">
											<span class="title">Facturas</span>
										</a>
									</li>
									<li>
										<a href="table_data.html">
											<span class="title">Productos</span>
										</a>
									</li>
									<li>
										<a href="table_export.html">
											<span class="title">Categorias</span>
										</a>
									</li>
									<li>
										<a href="table_export.html">
											<span class="title">Tipo de Pollo</span>
										</a>
									</li>
									<li>
										<a href="table_export.html">
											<span class="title">Inventarios</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0)">
									<i class="fa fa-pencil-square-o"></i>
									<span class="title"> INFRAESTRUCTURA </span>
									<i class="icon-arrow"></i> 
								</a>
								<ul class="sub-menu">
									<li>
										<a href="form_elements.html">
											<span class="title">Equipos</span>
										</a>
									</li>
									<li>
										<a href="form_wizard.html">
											<span class="title">Planta de Incubación</span>
										</a>
									</li>
									<li>
										<a href="form_validation.html">
											<span class="title">Galpones</span>
										</a>
									</li>
									<li>
										<a href="form_inline.html">
											<span class="title">Baterias</span>
										</a>
									</li>
									<li>
										<a href="form_x_editable.html">
											<span class="title">Granjas</span>
										</a>
									</li>
									<li>
										<a href="form_image_cropping.html">
											<span class="title">Procesos de Sanitización</span>
										</a>
									</li>
									<li>
										<a href="form_multiple_upload.html">
											<span class="title">Registros Sanitarios</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0)">
									<i class="fa fa-user"></i>
									<span class="title">REPORTE</span>
									<i class="icon-arrow"></i>
								</a>
								<ul class="sub-menu">
									<li>
										<a href="login_login.html">
											<span class="title"> Reportes Diarios </span>
										</a>
									</li>
									<li>
										<a href="login_login.html?box=register">
											<span class="title"> Reportes de Medicación </span>
										</a>
									</li>
									<li>
										<a href="login_login.html?box=forgot">
											<span class="title"> Reportes de Huevos </span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0)">
									<i class="fa fa-code"></i>
									<span class="title">PROCESOS</span>
									<i class="icon-arrow"></i>
								</a>
								<ul class="sub-menu">
									<li>
										<a href="pages_user_profile.html">
											<span class="title">Engorde</span>
										</a>
									</li>
									<li>
										<a href="pages_invoice.html">
											<span class="title">Ponedora</span>
										</a>
									</li>
									<li>
										<a href="pages_gallery.html">
											<span class="title">Roproductora</span>
										</a>
									</li>
									<li>
										<a href="pages_timeline.html">
											<span class="title">Dieta Alimenticia</span>
										</a>
									</li>
									<li>
										<a href="pages_calendar.html">
											<span class="title">Lote de Huevos Incubables</span>
										</a>
									</li>
									<li>
										<a href="pages_messages.html">
											<span class="title">Medicación</span>
										</a>
									</li>
									<li>
										<a href="pages_blank_page.html">
											<span class="title">Produccion de Alimento</span>
										</a>
									</li>
									<li>
										<a href="pages_blank_page.html">
											<span class="title">Traspasos de Parvadas</span>
										</a>
									</li>
									<li>
										<a href="pages_blank_page.html">
											<span class="title">Etapas de Parvada</span>
										</a>
									</li>
									<li>
										<a href="pages_blank_page.html">
											<span class="title">Etapas de Incubación</span>
										</a>
									</li>
									<li>
										<a href="pages_blank_page.html">
											<span class="title">Traspasos de Huevos</span>
										</a>
									</li>
									<li>
										<a href="pages_blank_page.html">
											<span class="title">Orden de Producción</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
						<!-- end: MAIN NAVIGATION MENU -->
					</div>
					<!-- end: SIDEBAR -->
				</div>
				<div class="slide-tools">
					<div class="col-xs-6 text-left no-padding">
						<a class="btn btn-sm status" href="#">
							Status <i class="fa fa-dot-circle-o text-green"></i> <span>Online</span>
						</a>
					</div>
				</div>
			</nav>
			<!-- end: PAGESLIDE LEFT -->
			<!-- start: PAGESLIDE RIGHT -->
			<div id="pageslide-right" class="pageslide slide-fixed inner">
				<div class="right-wrapper">
					<div id="style_selector">
						<div id="style_selector_container">
              <br>
							<div class="pageslide-title">
								Configuracion del Entorno
							</div>
							<div class="box-title">
								Choose Your Layout Style
							</div>
							<div class="input-box">
								<div class="input">
									<select name="layout" class="form-control">
										<option value="default">Wide</option><option value="boxed">Boxed</option>
									</select>
								</div>
							</div>
							<div class="box-title">
								Choose Your Header Style
							</div>
							<div class="input-box">
								<div class="input">
									<select name="header" class="form-control">
										<option value="fixed">Fixed</option><option value="default">Default</option>
									</select>
								</div>
							</div>
							<div class="box-title">
								Choose Your Sidebar Style
							</div>
							<div class="input-box">
								<div class="input">
									<select name="sidebar" class="form-control">
										<option value="fixed">Fixed</option><option value="default">Default</option>
									</select>
								</div>
							</div>
							<div class="box-title">
								Choose Your Footer Style
							</div>
							<div class="input-box">
								<div class="input">
									<select name="footer" class="form-control">
										<option value="default">Default</option><option value="fixed">Fixed</option>
									</select>
								</div>
							</div>
							<div class="box-title">
								10 Predefined Color Schemes
							</div>
							<div class="images icons-color">
								<a href="#" id="default"><img src={{ asset('images/color-1.png') }} alt="" class="active"></a>
								<a href="#" id="style2"><img src={{ asset('images/color-2.png') }} alt=""></a>
								<a href="#" id="style3"><img src={{ asset('images/color-3.png')}} alt=""></a>
								<a href="#" id="style4"><img src={{ asset('images/color-4.png')}} alt=""></a>
								<a href="#" id="style5"><img src={{ asset('images/color-5.png')}} alt=""></a>
								<a href="#" id="style6"><img src={{ asset('images/color-6.png')}} alt=""></a>
								<a href="#" id="style7"><img src={{ asset('images/color-7.png')}} alt=""></a>
								<a href="#" id="style8"><img src={{ asset('images/color-8.png')}} alt=""></a>
								<a href="#" id="style9"><img src={{ asset('images/color-9.png')}} alt=""></a>
								<a href="#" id="style10"><img src={{ asset('images/color-10.png')}} alt=""></a>
							</div>
							<div class="box-title">
								Backgrounds for Boxed Version
							</div>
							<div class="images boxed-patterns">
								<a href="#" id="bg_style_1"><img src={{ asset('images/bg.png')}} alt=""></a>
								<a href="#" id="bg_style_2"><img src={{ asset('images/bg_2.png')}} alt=""></a>
								<a href="#" id="bg_style_3"><img src={{ asset('images/bg_3.png')}} alt=""></a>
								<a href="#" id="bg_style_4"><img src={{ asset('images/bg_4.png')}} alt=""></a>
								<a href="#" id="bg_style_5"><img src={{ asset('images/bg_5.png')}} alt=""></a>
							</div>
							<div class="style-options">
								<a href="#" class="clear_style">
									Clear Styles
								</a>
								<a href="#" class="save_style">
									Save Styles
								</a>
							</div>
						</div>
						<div class="style-toggle open"></div>
					</div>
				</div>
			</div>
			<!-- end: PAGESLIDE RIGHT -->
			<!-- start: MAIN CONTAINER -->
			<div class="main-container inner">
				<!-- start: PAGE -->
				<div class="main-content">
					<div class="container">

            @yield('content')

          </div>
				</div>
				<!-- end: PAGE -->
			</div>
			<!-- end: MAIN CONTAINER -->
			<!-- start: FOOTER -->
			<footer class="inner">
				<div class="footer-inner">
					<div class="pull-left">
						2014 &copy; Rapido by cliptheme.
					</div>
					<div class="pull-right">
						<span class="go-top"><i class="fa fa-chevron-up"></i></span>
					</div>
				</div>
			</footer>
			<!-- end: FOOTER -->
		</div>

    <!-- start: MAIN JAVASCRIPTS -->
    {!!Html::script('plugins/bootbox/bootbox.min.js')!!}
    {!!Html::script('plugins/excanvas.min.js')!!}
    {!!Html::script('plugins/respond.min.js')!!}
    {!!Html::script('plugins/jQuery/jquery-2.1.1.min.js')!!}
    {!!Html::script('plugins/jQuery/jquery-1.11.1.min.js')!!}
    {!!Html::script('plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js')!!}
    {!!Html::script('plugins/jquery.transit/jquery.transit.js')!!}
    {!!Html::script('plugins/jquery.scrollTo/jquery.scrollTo.min.js')!!}

    {!!Html::script('plugins/jquery-cookie/jquery.cookie.js')!!}
    {!!Html::script('plugins/bootstrap/js/bootstrap.min.js')!!}
    {!!Html::script('plugins/blockUI/jquery.blockUI.js')!!}
    {!!Html::script('plugins/iCheck/jquery.icheck.min.js')!!}
    {!!Html::script('plugins/moment/min/moment.min.js')!!}
    {!!Html::script('plugins/perfect-scrollbar/src/jquery.mousewheel.js')!!}
    {!!Html::script('plugins/perfect-scrollbar/src/perfect-scrollbar.js')!!}
    {!!Html::script('plugins/ScrollToFixed/jquery-scrolltofixed-min.js')!!}
    {!!Html::script('plugins/TouchSwipe/jquery.touchSwipe.min.js')!!}
    {!!Html::script('plugins/velocity/jquery.velocity.min.js')!!}
    <!-- end: MAIN JAVASCRIPTS -->
    <!-- start: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
    {!!Html::script('plugins/owl-carousel/owl-carousel/owl.carousel.js')!!}
    {!!Html::script('plugins/jquery-mockjax/jquery.mockjax.js')!!}
    {!!Html::script('plugins/toastr/toastr.js')!!}
    {!!Html::script('plugins/bootstrap-modal/js/bootstrap-modal.js')!!}
    {!!Html::script('plugins/bootstrap-modal/js/bootstrap-modalmanager.js')!!}
    {!!Html::script('plugins/fullcalendar/fullcalendar/fullcalendar.min.js')!!}
    {!!Html::script('plugins/bootstrap-switch/dist/js/bootstrap-switch.min.js')!!}
    {!!Html::script('plugins/bootstrap-select/bootstrap-select.min.js')!!}
    {!!Html::script('plugins/jquery-validation/dist/jquery.validate.min.js')!!}
    {!!Html::script('plugins/bootstrap-fileupload/bootstrap-fileupload.min.js')!!}
    {!!Html::script('plugins/DataTables/media/js/jquery.dataTables.min.js')!!}
    {!!Html::script('plugins/DataTables/media/js/DT_bootstrap.js')!!}
    {!!Html::script('plugins/truncate/jquery.truncate.js')!!}
    {!!Html::script('plugins/summernote/dist/summernote.min.js')!!}
    {!!Html::script('plugins/bootstrap-daterangepicker/daterangepicker.js')!!}
    {!!Html::script('js/subview.js')!!}
    {!!Html::script('js/subview-examples.js')!!}
    <!-- end: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    {!!Html::script('plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js')!!}
    {!!Html::script('plugins/autosize/jquery.autosize.min.js')!!}
    {!!Html::script('plugins/select2/select2.min.js')!!}
    {!!Html::script('plugins/jquery.maskedinput/src/jquery.maskedinput.js')!!}
    {!!Html::script('plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js')!!}
    {!!Html::script('plugins/jquery-maskmoney/jquery.maskMoney.js')!!}
    {!!Html::script('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')!!}
    {!!Html::script('plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js')!!}
    {!!Html::script('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js')!!}
    {!!Html::script('plugins/bootstrap-colorpicker/js/commits.js')!!}
    {!!Html::script('plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js')!!}
    {!!Html::script('plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')!!}
    {!!Html::script('plugins/jQuery-Tags-Input/jquery.tagsinput.js')!!}
    {!!Html::script('plugins/bootstrap-fileupload/bootstrap-fileupload.min.js')!!}
    {!!Html::script('plugins/ckeditor/ckeditor.js')!!}
    {!!Html::script('plugins/ckeditor/adapters/jquery.js')!!}
    {!!Html::script('js/form-elements.js')!!}
    <script src={{ asset('plugins/nvd3/lib/d3.v3.js') }}></script>
    {!!Html::script('plugins/nvd3/nv.d3.min.js')!!}
    {!!Html::script('js/charts.js')!!}
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    {!!Html::script('js/main.js')!!}
		<script>
			jQuery(document).ready(function() {
				Main.init();
        Charts.init();
        FormElements.init();
			});
		</script>
	</body>
	<!-- end: BODY -->
</html>