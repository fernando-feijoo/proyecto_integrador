<?php
function consultaContenedores()
{
	$conexion = conexionBd();
	$sql = $conexion->query("SELECT * FROM vista_seleccion_contenedor WHERE registrados IS NULL;");
	return $sql;
}
