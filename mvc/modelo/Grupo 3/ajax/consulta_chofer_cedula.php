<?php
include ("./../../conexion_bd.php");
// la función recibe el id del chofer seleccionado
function obtener_datos_chofer($id) {
    // realizamos la consulta a la base de datos para obtener los datos del chofer
    $conn = conexionBd();
    $sql = "SELECT cedula FROM chofer WHERE id = $id;";
    $result = mysqli_query($conn, $sql);
    $chofer = mysqli_fetch_assoc($result);
    // retornamos la cedula del chofer
    return $chofer['cedula'];
}

if (isset($_POST['id'])) {
    // obtenemos el id del chofer seleccionado
    $id = $_POST['id'];
    // obtenemos los datos del chofer
    $cedula = obtener_datos_chofer($id);
    // retornamos la cedula
    echo $cedula;
}
?>