
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Comercializacion de Maquinarias | Inicio</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
  <link rel="shortcut icon" href="/maquinarias/images/favicon.ico" type="image/x-icon">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <link rel="stylesheet" href="/maquinarias/css/style.css" />
  <link rel="stylesheet" href="/maquinarias/css/login.css" />

  <nav class="navbar" role="navigation" id="header">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="http://localhost/maquinarias/"><img src="/maquinarias/images/logo.png" title="Agencia de maquinarias" /></a>
      </div>
    <!-- Agrupar los enlaces de navegación, los formularios y cualquier otro elemento que se pueda ocultar al minimizar la barra -->
    </div>
  </nav>

  <div class="container">
        <div class="row">
			<div class="col-md-6 col-md-offset-3">
            {if isset($mensaje)}
               <div id="alert" class="alert alert-danger fade in">{$mensaje}</div>
             {/if}
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Ingresar</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Registrarse</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="http://localhost/maquinarias/admin/" action="ingresar" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Usuario" value="" required="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Contraseña" required="">
									</div>

									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Ingresar">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="olvido" tabindex="5" class="forgot-password">¿Olvido la contraseña?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								<form id="register-form" action="registrar" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="email" name="user_name" id="user_name" tabindex="1" class="form-control" placeholder="Usuario Email" value="" required="">
									</div>
									<div class="form-group">
										<input type="password" name="user_pass" id="user_pass" tabindex="2" class="form-control" placeholder="Contraseña" required="">
									</div>
									<div class="form-group">
										<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirmar Contrseña" required="">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="buttom" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Registrarse">
											</div>
										</div>
									</div>
								</form>
                        <form id="remember-form" action="enviar" method="post" role="form" autocomplete="off" style="display: none;">
										<div class="form-group">
											<label for="email">Recuperar Datos</label>
											<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="" autocomplete="off" required="">
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
													<input type="submit" name="recover-submit" id="recover-submit" tabindex="2" class="form-control btn btn-success" value="Recuperar Contraseña">
												</div>
											</div>
										</div>
										<input type="hidden" class="hide" name="token" id="token" value="0e4d9a3fabd8a5844a9d929234358f39">
									</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
   <script src="/maquinarias/js/jsAdmin.js"></script>
