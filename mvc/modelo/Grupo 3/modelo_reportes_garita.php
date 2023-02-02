<?php
include_once "./../modelo/conexion_bd.php";
// Coloque algunas en mayusculas con UCASE(), pero luego deberia ser controlado desde el ingreso de datos y asi tener 
// una BD limpiar con caracteres iguales en todos ellos.
$conexion = conexionBd();

$cantidad_por_pagina = 5;

if ((empty($_POST["button-busqueda-reportes"]) && empty($_SESSION["sesion_busqueda_reportes"])) || empty($_GET["busqueda"])) {
    $sql_total = $conexion->query("SELECT COUNT(*) AS total FROM vista_registro_llegada;");
    $total = $sql_total->fetch_assoc()['total'];
    $num_pags = ceil($total / $cantidad_por_pagina);

    $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
    $inicio = ($pagina - 1) * $cantidad_por_pagina;

    $sql = $conexion->query("SELECT * FROM vista_registro_llegada LIMIT $inicio, $cantidad_por_pagina;");
    unset($_SESSION["sesion_busqueda_reportes"]);
} else {
    if (!empty($_POST["seleccionBusquedaGarita"]) && !empty($_POST["busqueda_garita"])) {
        $filtro_busqueda = $_POST["seleccionBusquedaGarita"];
        $valor_busqueda = $_POST["busqueda_garita"];
    } elseif (!empty($_SESSION["sesion_busqueda_reportes"])) {
        $filtro_busqueda = $_SESSION["sesion_filtro"];
        $valor_busqueda = $_SESSION["sesion_busqueda_reportes"];
    }

    $_SESSION["sesion_filtro"] = $filtro_busqueda;
    $_SESSION["sesion_busqueda_reportes"] = $valor_busqueda;

    $sql_total = $conexion->query("SELECT COUNT(*) AS total FROM vista_registro_llegada WHERE $filtro_busqueda = '$valor_busqueda';");
    $total = $sql_total->fetch_assoc()['total'];
    $num_pags = ceil($total / $cantidad_por_pagina);

    $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
    $inicio = ($pagina - 1) * $cantidad_por_pagina;

    $sql = $conexion->query("SELECT * FROM vista_registro_llegada WHERE fecha_inspeccion >= '2023-01-25' && fecha_inspeccion <= '2023-01-28' LIMIT $inicio, $cantidad_por_pagina;");
}
