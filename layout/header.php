<header>
        <div id="header" class="container-fluid pt-1 pb-1">
            <div class="row d-flex align-items-center mx-2">
                <div class="col">
                    <img class="img-fluid" src="../../img/LogoTierraFertil_305px_75px-dashboard.png" alt="logo-empresa" />
                </div>
                <div class="col d-flex align-items-end flex-column">

                    <nav class="navbar navbar-expand">
                        <div class="container">

                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">

                                    <li class="nav-item dropdown">
                                        <a id="texto-usuario" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="../../img/ProfileUser_32px-dashboard.png" alt="icono-usuario" />
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
                                            <li><a class="dropdown-item text-center" href="./../controlador/controlador_cerrar_sesion.php"><img src="../../img/log_out_24px-dashboard.png" alt="icono-logout" style="margin-right: 12px;" />Cerrar Sesion</a></li>
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