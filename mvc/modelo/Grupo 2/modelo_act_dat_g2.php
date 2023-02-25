<?php
function cargar_datos_g2()
{
    if (!empty($_GET["g2_id_eva"])) {
        $id = $_GET["g2_id_eva"];
        $conexion = conexionBd();
        $sql = $conexion->query("SELECT DISTINCT *
        FROM control_calidad  where id=$id;");
        return $sql;
    } else {   
        $validacion = false;
        return $validacion;
    }
}

function id_max_g2()
{
	$conexion = conexionBd();
	$sql = $conexion->query("SELECT MAX(id) AS id FROM control_calidad;");
	return $sql;
}
?>