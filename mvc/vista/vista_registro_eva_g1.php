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

    <button class="nav-link active" id="nav-dg-tab" data-bs-toggle="tab" data-bs-target="#nav-dg" type="button" role="tab" aria-controls="nav-dg" aria-selected="true">Detalles Generales</button>
    <button class="nav-link" id="nav-gc-tab" data-bs-toggle="tab" data-bs-target="#nav-gc" type="button" role="tab" aria-controls="nav-gc" aria-selected="false">Grado Calibre</button>
    <button class="nav-link" id="nav-ld-tab" data-bs-toggle="tab" data-bs-target="#nav-ld" type="button" role="tab" aria-controls="nav-ld" aria-selected="false">Largo Dedo</button>
    <button class="nav-link" id="nav-asepsias-tab" data-bs-toggle="tab" data-bs-target="#nav-asepsias" type="button" role="tab" aria-controls="nav-asepsias" aria-selected="false">Asepcias</button>
    <button class="nav-link" id="nav-se-tab" data-bs-toggle="tab" data-bs-target="#nav-se" type="button" role="tab" aria-controls="nav-se" aria-selected="false">Seleccion Empaque</button>
    
  </div>
</nav> 
 <div class="tab-content" id="nav-tabContent">
    
  <div class="tab-pane fade show active" id="nav-dg" role="tabpanel" aria-labelledby="nav-dg-tab"><?php 
  include_once("./../modelo/conexion_bd.php");
  include("./../modelo/Grupo 1/modelo_rellenar_dg_g1.php");
  include("./vista_detalles_generales_g1.php");?></div>
  
  <div class="tab-pane fade" id="nav-gc" role="tabpanel" aria-labelledby="nav-gc-tab"><?php 
  include("./vista_gc_g1.php")?></div>

  <div class="tab-pane fade" id="nav-ld" role="tabpanel" aria-labelledby="nav-ld-tab"><?php 
  include("./vista_ld_g1.php")?></div>

<div class="tab-pane fade" id="nav-asepsias" role="tabpanel" aria-labelledby="nav-asepsias-tab"><?php 
  include("./vista_asepsias_g1.php")?></div>

<div class="tab-pane fade" id="nav-se" role="tabpanel" aria-labelledby="nav-se-tab"><?php 
  include("./vista_se_g1.php")?></div>
</div> 


  </div>
</div>
<?php 
include_once "./../../layout/footer.php";
?>