<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link class="icon-inicio" rel="shortcut icon" href="../img/globe-dashboard.svg">
    <title>Dashboard Aso. Tierra Fértil</title>
    <!-- Importacion de librerias de Bootstrap 5.2 -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
    <!-- /Importacion de librerias de Bootstrap 5.2 -->
    <!-- Otras importaciones -->
    <link rel="stylesheet" type="text/css" href="../css/style-dashboard.css" />
    <!-- /Otras importaciones -->
</head>

<body>
    <header>
        <div id="header" class="container-fluid pt-1 pb-1">
            <div class="row d-flex align-items-center mx-2">
                <div class="col">
                    <img class="img-fluid" src="../img/LogoTierraFertil_305px_75px-dashboard.png" alt="logo-empresa" />
                </div>
                <div class="col d-flex align-items-end flex-column">

                    <nav class="navbar navbar-expand">
                        <div class="container">

                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">

                                    <li class="nav-item dropdown">
                                        <a id="texto-usuario" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="../img/ProfileUser_32px-dashboard.png" alt="icono-usuario" /> grupo3
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item text-center" href="#" role="switch">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                                        <label class="form-check-label" for="flexSwitchCheckDefault">Modo Ocuro</label>
                                                    </div>
                                                </a></li>
                                            <li><a class="dropdown-item text-center" href="../index.php"><img src="../img/log_out_24px-dashboard.png" alt="icono-logout" style="margin-right: 12px;" />Cerrar Sesion</a></li>
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
                <!-- Contenedor de menu lateral -->
                <div class="col-5 col-sm-4 col-md-3 col-lg-3 col-xl-3 text-center">
                    <section>
                        <div id="menu-navegacion" class="container-fluid mt-1 mb-1 rounded-4 text-center">
                            <div class="row mx-auto">
                                <div class="col">
                                    <!-- Seccion de hora y fecha menu lateral -->
                                    
                                    <div id="contenedor-img" class="row pt-5 mx-auto">
                                        <div class="col text-end">
                                            <img id="img-section" src="../img/clock_32px-dashboard.png" alt="icono-reloj" />
                                        </div>
                                        <div class="col-7 text-start">
                                            <div id="clock"></div>
                                        </div>
                                    </div>

                                    <div id="contenedor-img" class="row pt-3 mx-auto pb-4">
                                        <div id="img-section" class="col text-end">
                                            <img id="img-section" src="../img/calendar_32px-dashboard.png" alt="icono-calendario" />
                                        </div>
                                        <div class="col-7 text-start">
                                            <div id="date"></div>
                                        </div>
                                    </div>

                                    <div id="caja-separacion"></div>
                                    <!-- /Seccion de hora y fecha menu lateral -->

                                    <!-- Seccion de primer menu de Acopio y sub menus -->
                                    <div class="row pt-5">
                                        <div class="col-1 text-end">
                                            <img id="img-submenu" src="../img/ico_acopio_32px-dashboard.png" alt="icono-contenedor" />
                                        </div>
                                        <div id="titulo-menu" class="col text-start ms-1">
                                            Acopio
                                        </div>
                                    </div>
                                    <section class="botones-menu">
                                        <div class="row pt-3">
                                            <div class="col-md-10 offset-md-2 text-start">
                                                <button type="button" name="opcion-registro">Registro contenedores</button>
                                            </div>
                                        </div>

                                        <div class="row pt-3">
                                            <div class="col-md-10 offset-md-2 text-start">
                                                <button type="button" name="opcion-listado">Listado contenedores</button>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- /Seccion de primer menu de Acopio y sub menus -->

                                    <!-- Seccion de segundo menu de Acopio y sub menus -->
                                    <div class="row pt-5">
                                        <div class="col-1 text-end">
                                            <img id="img-submenu" src="../img/playlist_32px-dashboard.png" alt="icono-contenedor" />
                                        </div>
                                        <div id="titulo-menu" class="col text-start ms-2">
                                            Reportes
                                        </div>
                                    </div>

                                    <section class="botones-menu">
                                        <div class="row pt-3">
                                            <div class="col-xs-12 col-md-10 offset-md-2 text-start">
                                                <button type="button" name="opcion-reporte">Obtener reportes</button>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- /Seccion de segundo menu de Acopio y sub menus -->

                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- /Contenedor de menu lateral -->
                <div class="col text-center">
                    <!-- Contenedor de escritorio *interno -->
                    <section>
                        <div id="contenedor-escritorio-contenido" class="container-fluid mt-1 mb-1 rounded-4 bg-secondary">
                            <div class="row">
                                <div class="col">
                                    1 de 1
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /Contenedor de escritorio *interno -->

                </div>
            </div>
        </div>
    </main>

    <!-- Script Bootstrap 5.2 -->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <!-- /Script Bootstrap 5.2 -->
    <!-- Otros Script -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/funciones-dashboard.js"></script>
    <!-- /Otros Script -->
</body>

</html>