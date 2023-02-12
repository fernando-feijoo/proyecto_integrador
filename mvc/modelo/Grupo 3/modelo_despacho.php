<?php
function datos_lista_paletizador()
{
	$conexion = conexionBd();
	$sql = $conexion->query("SELECT id, cedula, CONCAT(nombre,' ',apellido) AS nombres FROM paletizador;");
	return $sql;
}
?>