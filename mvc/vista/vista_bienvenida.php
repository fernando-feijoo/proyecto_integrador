<?php
include_once "./../../layout/header.php";
if ($_SESSION["rol"] == "grupo1") {
    include_once "./Grupo 1/menu.php";
} elseif ($_SESSION["rol"] == "grupo2") {
    include_once "./Grupo 2/menu.php";
} elseif ($_SESSION["rol"] == "grupo3") {
    include_once "./Grupo 3/menu.php";
} elseif ($_SESSION["rol"] == "garita") {
    include_once "./Grupo 3/menu_garita.php";
}

?>
<div id="contenedor-escritorio-contenido" class="container-fluid col text-center pe-2 ps-0">
    <!-- Contenedor de escritorio *interno -->
    <div id="escritorio-contenido" class="container-fluid mt-1 mb-1 rounded-4" style="background-image: url('./../../img/FondoHome 954px_598px.png'); background-size: cover; background-position: center;">
        <!-- <div class="d-flex flex-row justify-content-center"> -->
            <!-- Titulo o encabezado del escritorio -->
            <!-- <div class="col-10 me-3 ms-3 mt-4"> -->
                <!-- <div id="titulo-escritorio"> -->
                    <!-- <img class="img-fluid" src="./../../img/FondoHome 954px_598px.png" alt="Fondo de Bienvenida"> -->
                <!-- </div> -->
            <!-- </div> -->
            <!-- /Titulo o encabezado del escritorio -->
        <!-- </div> -->
    </div>
</div>
<?php
include_once "./../../layout/footer.php"    
?>