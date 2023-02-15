

<?php

function guardar_asepcia()
{
    // Recoger los valores de los inputs tipo radio
    if (isset($_POST['submit']))
$ep = (int)$_POST['ep'];
$le = (int)$_POST['le'];
$acal = (int)$_POST['acal'];
$cpi = (int)$_POST['cpi'];
$ucobp = (int)$_POST['ucobp'];


    // Conectarse a la base de datos
    $host = "localhost";
    $username = "root";
    $password = "";
    $bdnombre = "bd_tierra_fertil_web";


    // Crear conexión
    $conn = new mysqli($host, $username, $password, $bdnombre);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Ejecutar consulta SQL para insertar datos en la tabla
    $sql = "INSERT INTO asepcia (ep, le, acal, cpi, ucobp)
VALUES ('$ep', '$le', '$acal', '$cpi', '$ucobp')";

    if ($conn->query($sql) === TRUE) {
        echo "Los datos se han guardado con éxito.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}


?>





    