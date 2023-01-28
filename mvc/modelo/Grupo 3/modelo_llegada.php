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

// function obtener_datos_chofer($id)
// {
//     $conexion = conexionBd();
//     $sql = $conexion->query("SELECT id, cedula FROM chofer;");
//     $resultados = $sql->fetch_all(MYSQLI_ASSOC);

//     $busquedaId = $id;
//     $cedula = "";

//     for ($i = 0; $i < count($resultados); $i++) {
//         if ($resultados[$i]['id'] == $busquedaId) {
//             $cedula = $resultados[$i]['cedula'];
//             break;
//         }
//     }

//     return $cedula;
// }
?>