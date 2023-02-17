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