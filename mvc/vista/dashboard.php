<?php
session_start();
if (empty($_SESSION["id"])) {
    header("location: ./../../index.php");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link class="icon-inicio" rel="shortcut icon" href="../../img/globe-dashboard.svg">
    <title>Dashboard Aso. Tierra Fértil</title>
    <!-- Importacion de librerias de Bootstrap 5.2 -->
    <link rel="stylesheet" type="text/css" href="../../librery_code/css/bootstrap.min.css" />
    <!-- /Importacion de librerias de Bootstrap 5.2 -->
    <!-- Otras importaciones -->
    <link rel="stylesheet" type="text/css" href="../../owner_code/css/style-dashboard.css" />
    <link rel="stylesheet" type="text/css" href="../../owner_code/css/Grupo 3/style-garita.css" />
    <!-- /Otras importaciones -->
</head>

<body>
    <?php require "./layout/header.php"?>

    <main>
        <div id="escritorio-contenedor" class="container-fluid pt-2">
            <div class="row">
                <!-- Contenedor de menu lateral -->
                <?php
                if ($_SESSION["rol"] == "grupo1") {
                    require "./Grupo 1/menu_grupo1.php";
                } elseif ($_SESSION["rol"] == "grupo2") {
                    require "./Grupo 2/menu_grupo2.php";
                } elseif ($_SESSION["rol"] == "grupo3") {
                    require "./Grupo 3/menu_grupo3.php";
                }
                ?>
                <!-- /Contenedor de menu lateral -->

                <!-- Contenedor de escritorio -->
                <?php
                if ($_SESSION["rol"] == "grupo1") {
                    require "./Grupo 1/escritorio_grupo1.php";
                } elseif ($_SESSION["rol"] == "grupo2") {
                    require "./Grupo 2/escritorio_grupo2.php";
                } elseif ($_SESSION["rol"] == "grupo3") {
                    require "./Grupo 3/escritorio_grupo3.php";
                }
                ?>
                <!-- /Contenedor de escritorio -->

            </div>
        </div>
    </main>

    <!-- Script Bootstrap 5.2 -->
    <script src="../../librery_code/js/bootstrap.bundle.min.js"></script>
    <!-- /Script Bootstrap 5.2 -->
    <!-- Otros Script -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../../owner_code/js/funciones-dashboard.js"></script>
    <!-- /Otros Script -->
</body>

</html>