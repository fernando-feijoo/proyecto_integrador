<?php
function datos_lista_paletizador()
{
	$conexion = conexionBd();
	$sql = $conexion->query("SELECT id, cedula, CONCAT(nombre,' ',apellido) AS nombres FROM paletizadores;");
	return $sql;
}

function carga_datos_despacho()
{
	if (!empty($_GET["id_contExpo"])) {
		$id = $_GET["id_contExpo"];
		$conexion = conexionBd();
		$sql = $conexion->query("SELECT * FROM datos_despacho WHERE id_cont_export = $id;");
		return $sql;
	} else {
		$validacion = false;
		return $validacion;
	}
}
