<?php
function cargar_datos()
{
    if (!empty($_GET["id_eva"])) {
        $id = $_GET["id_eva"];
        $conexion = conexionBd();
        $sql = $conexion->query("SELECT DISTINCT rl.id,rl.fecha_inspeccion,rl.semana,rl.contenedor,rl.nombre_acopio,dp.vapor FROM datos_despacho dp inner JOIN cont_export ce ON (ce.id=dp.id_cont_export) INNER JOIN registro_llegada rl on (ce.id_registro_llegada=rl.id);");
        return $sql;
    } else {
        $validacion = false;
        return $validacion;
    }
}
