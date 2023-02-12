<?php
function cargar_dato_inpeccion()
{
	if (!empty($_GET["numCont"])) {
		$id = $_GET["numCont"];
		$conexion = conexionBd();
		$sql = $conexion->query("SELECT * FROM inspeccion_contenedor WHERE id = $id;");
		return $sql;
	} else {
		$validacion = false;
		return $validacion;
	}
}
?>