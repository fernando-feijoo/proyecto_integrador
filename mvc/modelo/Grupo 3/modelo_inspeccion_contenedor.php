<?php
function cargar_dato_inpeccion()
{

	if (!empty($_GET["id_contExpo"])) {
		$id = $_GET["id_contExpo"];
		$conexion = conexionBd();
		$sql = $conexion->query("SELECT * FROM inspeccion_contenedor WHERE id_cont_export = $id;");
		return $sql;
	} else {
		$validacion = false;
		return $validacion;
	}
}
?>