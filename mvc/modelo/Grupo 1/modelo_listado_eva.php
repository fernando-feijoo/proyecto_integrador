<?php
include_once "./../modelo/conexion_bd.php";
$conexion = conexionBd();

$sql = $conexion->query("SELECT * FROM evaluaciones WHERE estado='ACTIVO';");
?>

<?php 
include_once "./../modelo/conexion_bd.php";

$conexion = conexionBd();

$cantidad_por_pagina = 5;

if (empty($_POST["busqueda_evaluaciones"]) ||empty($_POST["button-busqueda"]) || empty($_GET["busqueda"])) {

    $sql_total = $conexion->query("SELECT COUNT(*) AS total FROM evaluaciones WHERE estado='ACTIVO';");
    $total = $sql_total->fetch_assoc()['total'];
	$num_pags = ceil($total / $cantidad_por_pagina);

    $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
	$inicio = ($pagina - 1) * $cantidad_por_pagina;

    $sql = $conexion->query("SELECT * FROM evaluaciones where estado='ACTIVO' LIMIT $inicio, $cantidad_por_pagina;");
    unset($_SESSION["busqueda_evaluaciones"]);

}else if(!empty($_POST["button-busqueda"]) && !empty($_POST["busqueda_evaluaciones"]) ){

    $busqueda = $_POST["busqueda_evaluaciones"];

    $sql_total = $conexion->query("SELECT COUNT(*) AS total FROM evaluaciones WHERE estado='ACTIVO';");
	$total = $sql_total->fetch_assoc()['total'];
	$num_pags = ceil($total / $cantidad_por_pagina);

	$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
	$inicio = ($pagina - 1) * $cantidad_por_pagina;

    $sql = $conexion->query("SELECT * FROM evaluaciones WHERE estado = 'ACTIVO' and cod_eva= '$busqueda' LIMIT $inicio, $cantidad_por_pagina;");
}
?>
