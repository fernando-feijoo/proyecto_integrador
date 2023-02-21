<?php

function datos_lista_caja()
{
	$conexion = conexionBd();
	$sql = $conexion->query("SELECT * FROM tipo_cajas;");
	return $sql;
}

function datos_lista_vehiculo()
{
	$conexion = conexionBd();
	$sql = $conexion->query("SELECT id, placa, marca FROM vehiculo;");
	return $sql;
}

function datos_lista_chofer()
{
	$conexion = conexionBd();
	$sql = $conexion->query("SELECT id, cedula, CONCAT(nombre,' ',apellido) AS nombres FROM chofer;");
	return $sql;
}

function cargar_datos()
{
	if (!empty($_GET["id_listado"])) {
		$id = $_GET["id_listado"];
		$conexion = conexionBd();
		$sql = $conexion->query("SELECT * FROM registro_llegada WHERE id = $id;");
		return $sql;
	} else {
		$validacion = false;
		return $validacion;
	}
}

function numero_dato_garita()
{
	$conexion = conexionBd();
	$sql = $conexion->query("SELECT MAX(id) AS id FROM registro_llegada;");
	return $sql;
}
