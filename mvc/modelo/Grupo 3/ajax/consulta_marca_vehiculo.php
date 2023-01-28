<?php
include ("./../../conexion_bd.php");
// la función recibe el id del marca seleccionado
function obtener_marca_vehiculo($id) {
    // realizamos la consulta a la base de datos para obtener los datos del vehiculo
    $conn = conexionBd();
    $sql = "SELECT marca FROM vehiculo WHERE id = $id;";
    $result = mysqli_query($conn, $sql);
    $vehiculo = mysqli_fetch_assoc($result);
    // retornamos la marca del vehiculo
    return $vehiculo['marca'];
}

if (isset($_POST['id'])) {
    // obtenemos el id del marca seleccionado
    $id = $_POST['id'];
    // obtenemos los datos del vehiculo
    $marca = obtener_marca_vehiculo($id);
    // retornamos la marca
    echo $marca;
}
?>