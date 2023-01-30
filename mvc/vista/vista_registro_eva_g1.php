<?php
include_once "./../../layout/header.php";
include_once "./Grupo 1/menu.php";
?>
<div id="contenedor-escritorio-contenido" class="container-fluid col text-center pe-2 ps-0">
    <!-- Contenedor de escritorio *interno -->
    <div id="escritorio-contenido" class="container-fluid mt-1 mb-1 rounded-4">
        <div class="row">
            <!-- Titulo o encabezado del escritorio -->
            <div class="col-1 d-flex align-items-end mb-1">
                <a id="ico-home" href="./dashboard.php"><img src="./../../img/home_32x32-escritorio.png" alt="icono-home" /></a>
            </div>
            <div class="col-10 me-3 ms-3 mt-4">
                <div id="titulo-escritorio-listado">
                    REGISTRO DE EVALUACIONES
                </div>
            </div>
            <!-- /Titulo o encabezado del escritorio -->
        </div>
        <div id="caja-separacion-escritorio" class="mx-auto"></div>
        <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Detalles Generales</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Grado Calibre</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Largo Dedo</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Asepcias</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Seleccion Empaque</button>
    
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><?php include("./vista_detalles_generales_g1.php")?></div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"><?php include("./vista_gc_g1.php")?></div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"><?php include("./vista_detalles_generales_g1.php")?></div>
</div>
    </div>
</div>
<?php 
include_once "./../../layout/footer.php";
?>