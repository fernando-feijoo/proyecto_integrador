<?php
include_once("./../modelo/conexion_bd.php");

if (!empty($_GET["id_delete"])) {
    $id_delete = $_GET["id_delete"];
    $conexion = conexionBd();
    $sql_delete = $conexion->query("UPDATE evaluaciones SET estado = 'INACTIVO' WHERE id = '$id_delete';");
    if ($sql_delete == 1) {
		echo "<div class='alert alert-success text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
            ¡Datos eliminados correctamente!</div>";
	} else {
		echo "<div class='alert alert-success text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
            ¡No se ha eliminado los datos!</div>";
	}
}
?>