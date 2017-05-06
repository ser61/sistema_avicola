<!DOCTYPE html>
<html lang="en" class="no-js">
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
    {!!Html::style('plugins/bootstrap/css/bootstrap.min.css')!!}
    {!!Html::style('plugins/font-awesome/css/font-awesome.min.css')!!}
    {!!Html::style('plugins/animate.css/animate.min.css')!!}
    {!!Html::style('plugins/iCheck/skins/all.css')!!}
    {!!Html::style('plugins/font-awesome/css/font-awesome-ie7.min.css')!!}
    {!!Html::style('css/styles.css')!!}
    {!!Html::style('css/styles-responsive.css')!!}
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body class="login">
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo">
					<img src="images/logo_sistema.png">
				</div>
				<!-- start: LOGIN BOX -->
				<div class="box-login">
					<h3>Inicia Sesión con tu Cuenta</h3>
					<p>
						Ingresa el nombre y contraseña de tu cuenta.
					</p>
					<form class="form-login" action="home.html">
						<div class="errorHandler alert alert-danger no-display">
							<i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
						</div>
						<fieldset>
							<div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="username" placeholder="Nombre de Usuario">
									<i class="fa fa-user"></i> </span>
							</div>
							<div class="form-group form-actions">
								<span class="input-icon">
									<input type="password" class="form-control password" name="password" placeholder="Contraseña de Usuario">
									<i class="fa fa-lock"></i>
									<a class="forgot" href="#">
										Olvide mi contraseña
									</a> </span>
							</div>
							<div class="form-actions">
								<label for="remember" class="checkbox-inline">
									<input type="checkbox" class="grey remember" id="remember" name="remember">
									Mantener la conexión
								</label>
								<button type="submit" class="btn btn-green pull-right">
									Iniciar Sesión <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
						</fieldset>
					</form>
					<!-- start: COPYRIGHT -->
					<div class="copyright">
						2014 &copy; Rapido by cliptheme.
					</div>
					<!-- end: COPYRIGHT -->
				</div>
				<!-- end: LOGIN BOX -->

				<!-- start: FORGOT BOX -->
				<div class="box-forgot">
					<h3>¿Olvidesta tu Contraseña?</h3>
					<p>
						Ingresa tu email para reiniciar tu contraseña.
					</p>
					<form class="form-forgot">
						<div class="errorHandler alert alert-danger no-display">
							<i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
						</div>
						<fieldset>
							<div class="form-group">
								<span class="input-icon">
									<input type="email" class="form-control" name="email" placeholder="Ingresa tu email aqui...">
									<i class="fa fa-envelope"></i> </span>
							</div>
							<div class="form-actions">
								<a class="btn btn-light-grey go-back">
									<i class="fa fa-chevron-circle-left"></i> Iniciar Sesión
								</a>
								<button type="submit" class="btn btn-green pull-right">
									Aceptar <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
						</fieldset>
					</form>
					<!-- start: COPYRIGHT -->
					<div class="copyright">
						2014 &copy; Rapido by cliptheme.
					</div>
					<!-- end: COPYRIGHT -->
				</div>
				<!-- end: FORGOT BOX -->
			</div>
		</div>

		<!-- start: MAIN JAVASCRIPTS -->
    {!!Html::script('plugins/respond.min.js')!!}
    {!!Html::script('plugins/excanvas.min.js')!!}
    {!!Html::script('plugins/jQuery/jquery-2.1.1.min.js')!!}
    {!!Html::script('plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js')!!}
    {!!Html::script('plugins/bootstrap/js/bootstrap.min.js')!!}
    {!!Html::script('plugins/iCheck/jquery.icheck.min.js')!!}
    {!!Html::script('plugins/jquery.transit/jquery.transit.js')!!}
    {!!Html::script('plugins/TouchSwipe/jquery.touchSwipe.min.js')!!}
    {!!Html::script('js/main.js')!!}
		<!-- end: MAIN JAVASCRIPTS -->
    <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    {!!Html::script('plugins/jquery-validation/dist/jquery.validate.min.js')!!}
    {!!Html::script('js/login.js')!!}
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
	</body>
	<!-- end: BODY -->
</html>