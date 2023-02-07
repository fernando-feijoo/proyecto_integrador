<?php
function cargar_datos()
{
    if (!empty($_GET["id_eva"])) {
        $id = $_GET["id_eva"];
        $conexion = conexionBd();
        $sql = $conexion->query("SELECT DISTINCT
        eva.*, pi.*
        FROM evaluaciones eva inner join productores_inspectores pi ON
        pi.codigo = eva.cod_prod_insp where eva.id=$id;");
        return $sql;
    } else {   
        $validacion = false;
        return $validacion;
    }
}
?>