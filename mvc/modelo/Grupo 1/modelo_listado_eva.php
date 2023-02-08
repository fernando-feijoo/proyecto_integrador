<?php
include_once "./../modelo/conexion_bd.php";
$conexion = conexionBd();

$sql = $conexion->query("SELECT eva.id, eva.cod_evaluacion, pi.nombre_p, pi.apellido_p,pi.finca FROM evaluaciones eva inner join productores_inspectores pi ON pi.codigo=eva.cod_prod_insp WHERE estado='ACTIVO';");
?>

<?php 
include_once "./../modelo/conexion_bd.php";

$cantidad = 7;
if (!empty($_POST["busqueda_evaluaciones"])) {
    $valor_busqueda = $_POST["busqueda_evaluaciones"];
}
?>