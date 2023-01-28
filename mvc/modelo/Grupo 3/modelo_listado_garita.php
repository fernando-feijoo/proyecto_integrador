<?php
include_once "./../modelo/conexion_bd.php";
// Coloque algunas en mayusculas con UCASE(), pero luego deberia ser controlado desde el ingreso de datos y asi tener 
// una BD limpiar con caracteres iguales en todos ellos.
$conexion = conexionBd();
$sql = $conexion->query("SELECT DISTINCT
dll.id,
dll.fecha_inspeccion,
dll.semana,
dll.hora_llegada,
dll.contenedor,
CONCAT(UCASE(ch.nombre), ' ', UCASE(ch.apellido)) AS chofer_nombres,
UCASE(dll.nombre_acopio) AS nombre_acopio,
tc.tipo_de_caja,
dll.tipo_de_contenedor
FROM
registro_llegada AS dll
INNER JOIN tipo_cajas tc ON tc.id = dll.id_tipo_caja
INNER JOIN chofer ch ON ch.id = dll.id_chofer
ORDER BY
dll.fecha_inspeccion DESC;");
?>
