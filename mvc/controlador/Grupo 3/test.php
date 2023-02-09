<?php
require('./../../modelo/conexion_bd.php');
$conexion = conexionBd();
$sql = $conexion->query("SELECT * FROM vista_registro_llegada;");
$data = mysqli_fetch_assoc($sql);
var_dump($data);

// if ($sql === false) {
//     echo "Error en la preparación de la consulta";
//     exit();
// }else{
//   echo "Funciona 1";
// }

// if ($result === false) {
//     echo "Error al ejecutar la consulta";
//     exit();
// }else{
//   echo "Funciona 2";
// }
