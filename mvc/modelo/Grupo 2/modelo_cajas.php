<?php
include_once "./../modelo/conexion_bd.php";
$conexion = conexionBd();
$id_cnt_calida = $_SESSION["g2_id_caj"];
$sql_caj = $conexion->query("SELECT * FROM evaluacion_empacadora WHERE id_cont_cal= $id_cnt_calida ;");
?>

<?php 
include_once "./../modelo/conexion_bd.php";

$conexion = conexionBd();

$cantidad_por_pagina = 4;


    $sql_total = $conexion->query("SELECT COUNT(*) AS total FROM evaluacion_empacadora WHERE id_cont_cal= $id_cnt_calida;");
    $total = $sql_total->fetch_assoc()['total'];
	$num_pags = ceil($total / $cantidad_por_pagina);

    $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
	$inicio = ($pagina - 1) * $cantidad_por_pagina;

    $sql = $conexion->query("SELECT * FROM evaluacion_empacadora where id_cont_cal= $id_cnt_calida LIMIT $inicio, $cantidad_por_pagina;");

?>