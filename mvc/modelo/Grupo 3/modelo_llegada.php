<?php
// Esta ruta de conexion es desde donde se esta usando el codigo de modelo
// En este caso es cista_llegada_g3.php
include_once("./../modelo/conexion_bd.php");

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
    if (!empty($_GET["id"])) {
        $id = $_GET["id"];
        $conexion = conexionBd();
        $sql = $conexion->query("SELECT * FROM registro_llegada WHERE id = $id;");
        return $sql;
    } else {
        $validacion = false;
        return $validacion;
    }
}
?>