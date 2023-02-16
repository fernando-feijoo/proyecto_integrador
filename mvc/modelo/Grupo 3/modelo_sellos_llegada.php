<?php
function carga_datos_sellos(){
  if (!empty($_GET["id_contExpo"])) {
		$id = $_GET["id_contExpo"];
		$conexion = conexionBd();
		$sql = $conexion->query("SELECT * FROM cont_export WHERE id = $id;");
		return $sql;
	} else {
		$validacion = false;
		return $validacion;
	}
}
?>