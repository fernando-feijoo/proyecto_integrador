<?php
session_start();
if (empty($_SESSION["id"])) {
    header("location: ./../../../index.php");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link class="icon-inicio" rel="shortcut icon" href="./../../img/globe-dashboard.svg">
    <title>Dashboard Aso. Tierra Fértil</title>
    <!-- Importacion de librerias de Bootstrap 5.2 -->
    <link rel="stylesheet" type="text/css" href="./../../librery_code/css/bootstrap.min.css" />
    <!-- /Importacion de librerias de Bootstrap 5.2 -->
    <!-- Otras importaciones -->
    <link rel="stylesheet" type="text/css" href="./../../owner_code/css/style-dashboard.css" />
    <link rel="stylesheet" type="text/css" href="./../../owner_code/css/Grupo 3/style-garita.css" />
    <!-- /Otras importaciones -->
</head>

<body>
    <header>
        <div id="header" class="container-fluid pt-1 pb-1">
            <div class="row d-flex align-items-center mx-2">
                <div class="col">
                    <img class="img-fluid" src="./../../img/LogoTierraFertil_305px_75px-dashboard.png" alt="logo-empresa" />
                </div>
                <div class="col d-flex align-items-end flex-column">

                    <nav class="navbar navbar-expand">
                        <div class="container">

                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">

                                    <li class="nav-item dropdown">
                                        <a id="texto-usuario" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="./../../img/ProfileUser_32px-dashboard.png" alt="icono-usuario" />
                                            <?php
                                            echo $_SESSION["nombre"];
                                            ?>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item text-center" href="#" role="switch">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                                        <label class="form-check-label" for="flexSwitchCheckDefault">Modo Ocuro</label>
                                                    </div>
                                                </a></li>
                                            <li><a class="dropdown-item text-center" href="./../controlador/controlador_cerrar_sesion.php"><img src="./../../img/log_out_24px-dashboard.png" alt="icono-logout" style="margin-right: 12px;" />Cerrar Sesion</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>

                </div>
            </div>
        </div>
    </header>
    <main>
        <div id="escritorio-contenedor" class="container-fluid pt-2">
            <div class="row">