<?php
function conexionBd()
{
    // Local
    $host = "localhost";
    $username = "root";
    $password = "";
    $bdnombre = "bd_tierra_fertil_web";

    // Host
    // $host = "sql205.epizy.com";
    // $username = "epiz_33384699";
    // $password = "3gTfVUVUyglIt";
    // $bdnombre = "epiz_33384699_bd_tierra_fertil_web";
    // $portbd = "3306";

    // Creacion de conexion.

    // Local
    $conn = mysqli_connect($host, $username, $password, $bdnombre);

    // Host
    // $conn = mysqli_connect($host, $username, $password, $bdnombre, $portbd);

    $conn -> set_charset('utf8');

    // Verificar la conexion.
    if (!$conn) {
        die("La conexion fallo: " . mysqli_connect_error());
    }
    return $conn;
}

// Para cerrar la conexion de la base de datos.
function cerrarBd($conn)
{
    mysqli_close($conn);
}
// * Para usar mas adelante como metodo de cerrar sesion.
// closeDb($conn);
?>
