<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link class="icon-inicio" rel="shortcut icon" href="./img/icon_credencial.svg">
	<title>Login Aso. Tierra Fertil</title>
	<!-- Importacion de librerias de Bootstrap 5.2 -->
	<link rel="stylesheet" type="text/css" href="./librery_code/css/bootstrap.min.css" />
	<!-- /Importacion de librerias de Bootstrap 5.2 -->
	<!-- Otras importaciones -->
	<link rel="stylesheet" type="text/css" href="./owner_code/css/style-login.css" />
	<!-- /Otras importaciones -->

</head>

<body class="d-flex justify-content-center align-items-center vh-100">
	<div id="contenedor-login" class="p-5 rounded-5 text-secondary shadow" style="width: 45rem">
		<div class="d-flex justify-content-center">
			<img src="./img/logo-empresa-login.png" alt="login-icon" style="height: 10rem" />
		</div>
		<div class="text-center fs-3 fw-bold" style="-webkit-text-fill-color: rgb(118, 255, 34); -webkit-text-stroke: 1px rgb(112,39,1); text-shadow: 2px 4px 5px rgb(112,39,1);">ASO. TIERRA FÉRTIL</div>
		<div class="text-center fs-5 fw-bold" style="color: rgb(112,39,1);">BANANO ORGÁNICO</div>
		<?php
		include "./mvc/modelo/conexion_bd.php";
		?>
		<!-- Formulario de inicio de sesion. -->
		<form method="post" action="">
			<div id="box-imput" class="input-group mt-4" style="margin: 0 auto;">
				<div class="input-group-text bg-dark">
					<img src="./img/username-icon.svg" alt="username-icon" style="height: 1rem" />
				</div>

				<input class="form-control bg-light" type="text" placeholder="Usuario" name="usuario" style="height: 3rem;" />
			</div>

			<div id="box-imput" class="input-group mt-4" style="margin: 0 auto;">
				<div class="input-group-text bg-dark">
					<img src="./img/password-icon.svg" alt="password-icon" style="height: 1rem" />
				</div>

				<input class="form-control bg-light" type="password" placeholder="Password" id="password-input" name="password" style="height: 3rem;" />
				<div class="input-group-text bg-light">
					<img class="show-password" src="./img/eye-login.png" data-toggle="hide">
				</div>
			</div>
			<?php
			include "./mvc/controlador/controlador_login_bd.php";
			?>

			<div class="d-flex justify-content-around mt-2">
				<div class="d-flex align-items-center gap-1">
					<input class="form-check-input" type="checkbox" />
					<div class="pt-1" style="font-size: 0.9rem; color: #99d98c">Recordarme</div>
				</div>
				<div class="pt-1">
					<a id="password-forget" href="#" class="text-decoration-none text-info fw-semibold fst-italic">¿Olvidó su contraseña?</a>
				</div>
			</div>
			<!-- Boton de Inicio de Sesion -->
			<input id="boton-inicio" class="btn text-white fs-5 mt-4 fw-semibold shadow-sm rounded-4" type="submit" name="btningresar" value="Iniciar Sesión">
			<!-- /Boton de Inicio de Sesion -->
		</form>
		<!-- /Formulario de inicio de sesion. -->
	</div>

	<!-- Script Bootstrap 5.2 -->
	<script src="./librery_code/js/bootstrap.bundle.min.js"></script>
	<!-- /Script Bootstrap 5.2 -->
	<!-- Otros Script -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="./owner_code/js/funciones-login.js"></script>
	<!-- /Otros Script -->

</body>

</html>