<?php
include_once "./../modelo/conexion_bd.php";
$conexion = conexionBd();

$sql = $conexion->query("SELECT * FROM control_calidad WHERE estado=1;");
?>

<?php 
include_once "./../modelo/conexion_bd.php";

$conexion = conexionBd();

$cantidad_por_pagina = 5;

if (empty($_POST["g2_txt_busq_eval"]) ||empty($_POST["g2_btn_busqueda"]) || empty($_GET["busqueda"])) {

    $sql_total = $conexion->query("SELECT COUNT(*) AS total FROM control_calidad WHERE estado=1;");
    $total = $sql_total->fetch_assoc()['total'];
	$num_pags = ceil($total / $cantidad_por_pagina);

    $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
	$inicio = ($pagina - 1) * $cantidad_por_pagina;

    $sql = $conexion->query("SELECT * FROM control_calidad where estado=1 LIMIT $inicio, $cantidad_por_pagina;");
    unset($_SESSION["g2_txt_busq_eval"]);
    
}else if(!empty($_POST["g2_btn_busqueda"]) && !empty($_POST["g2_txt_busq_eval"]) ){

    $busqueda = date("Y-m-d ", strtotime($_POST["g2_txt_busq_eval"]));

    $sql_total = $conexion->query("SELECT COUNT(*) AS total FROM control_calidad WHERE estado=1;");
	$total = $sql_total->fetch_assoc()['total'];
	$num_pags = ceil($total / $cantidad_por_pagina);

	$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
	$inicio = ($pagina - 1) * $cantidad_por_pagina;

    $sql = $conexion->query("SELECT * FROM control_calidad WHERE estado = 1 and fecha ='$busqueda' LIMIT $inicio, $cantidad_por_pagina;");
}
?>