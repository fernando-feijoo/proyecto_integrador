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

function cargar_observacion_inspeccion()
{
	$id = $_GET["id_contExpo"];
	$obs_inspeccion = $_POST["obs_inspeccion"];
	$conexion = conexionBd();
	$sql = $conexion->query("UPDATE cont_export SET obser_ins_contenedor = $obs_inspeccion;");
}
