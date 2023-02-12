<?php
function cargar_dato_inpeccion()
{
	if (!empty($_GET["id_conExpo"])) {
		$id = $_GET["id_conExpo"];
		$conexion = conexionBd();
		$sql = $conexion->query("SELECT * FROM inspeccion_contenedor WHERE id_cont_export = $id;");
		return $sql;
	} else {
		$validacion = false;
		return $validacion;
	}
}
?>