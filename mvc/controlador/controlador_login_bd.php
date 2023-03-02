<?php
session_start();
if (!empty($_POST["btningresar"])) {
	if (!empty($_POST["usuario"]) and !empty($_POST["password"])) {
		$usuario = $_POST["usuario"];
		$password = $_POST["password"];
		$conexion = conexionBd();
		$sql = $conexion->query("SELECT * FROM roles where usuario ='$usuario' and contrasena='$password' AND estado = 'ACTIVO';");
		if ($datos = $sql->fetch_object()) {
			$_SESSION["id"] = $datos->id;
			$_SESSION["nombre"] = $datos->nombre;
			$_SESSION["usuario"] = $datos->usuario;
			$_SESSION["rol"] = $datos->rol;

			header("location: ./mvc/vista/dashboard.php");
		} else {
			echo "<div class='alert alert-danger mt-4 mb-4 text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Usuario o contraseña incorrectos, verifique!
    </div>";
		}
	} else {
		echo "<div class='alert alert-danger mt-4 mb-4 text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Usuario o contraseña incorrectos, verifique!
    </div>";
	}
}
