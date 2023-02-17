
<?php
function cargar_dg()
{
    if (!empty($_GET["id_eva"])) {
        $id = $_GET["id_eva"];
        $conexion = conexionBd();
        $sql = $conexion->query("SELECT DISTINCT *
        FROM evaluaciones  where id=$id;");
        return $sql;
    } else {   
        $validacion = false;
        return $validacion;
    }
}

function id_max()
{
	$conexion = conexionBd();
	$sql = $conexion->query("SELECT MAX(id) AS id FROM evaluaciones;");
	return $sql;
}
?>