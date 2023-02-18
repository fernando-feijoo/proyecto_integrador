<?php
function datos_lista_cajas()
{
	$conexion = conexionBd();
	$sql = $conexion->query("SELECT * FROM cantidad_cajas;");
	return $sql;
}

function datos_lista_firmantes(){
  $conexion = conexionBd();
	$sql = $conexion->query("SELECT id, CONCAT(nombre,' ',apellido) AS nombres FROM firmantes;");
	return $sql;
}

function datos_lista_chofer(){
	$conexion = conexionBd();
	$sql = $conexion->query("SELECT id, CONCAT(nombre,' ',apellido) AS nombres FROM chofer;");
	return $sql;
}

function cargar_datos_paletizado()
{
	if (!empty($_GET["id_contExpo"])) {
		$id = $_GET["id_contExpo"];
		$conexion = conexionBd();
		$sql = $conexion->query("SELECT * FROM control_pallet WHERE id_cont_export = $id;");
		return $sql;
	} else {
		$validacion = false;
		return $validacion;
	}
}

function cargar_observacion_general()
{
	if (!empty($_GET["id_contExpo"])) {
		$id = $_GET["id_contExpo"];
		$conexion = conexionBd();
		$sql = $conexion->query("SELECT obser_general FROM cont_export WHERE id = $id;");
		return $sql;
	} else {
		$validacion = false;
		return $validacion;
	}
}