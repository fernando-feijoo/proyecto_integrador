<?php
include_once("./../modelo/conexion_bd.php");

if (!empty($_GET["id_eliminar"])) {
	$id_eliminar = $_GET["id_eliminar"];
	$conexion = conexionBd();
	$sql_delete = $conexion->query("UPDATE registro_llegada SET estado = 'INACTIVO' WHERE id = '$id_eliminar';");
	if ($sql_delete == 1) {
		echo "<div class='alert alert-success text-center' id='alerta-guardado-garita' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Datos eliminado correctamente!
    </div>";
	} else {
		echo "<div class='alert alert-danger text-center' id='error-guardado-garita' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Error al eliminar los datos, vuelva a intentar y recargue la pagina!
    </div>";
	}
}
