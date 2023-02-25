<?php
include_once "./../../layout/header.php";
include_once "./Grupo 2/menu.php";
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
            Control de Calidad
          </div>
        </div>
        <!-- /Titulo o encabezado del escritorio -->
    </div>
      <div id="caja-separacion-escritorio" class="mx-auto"></div>
      <?php
      include_once("./../modelo/conexion_bd.php");
      include("./../modelo/Grupo 2/modelo_act_dat_g2.php");
      include_once ("./../controlador/Grupo 2/controlador_guardar_inicio.php");
      require("./vista_pest_inicial_g2.php");
      ?>
  </div>
</div>
<?php 
include_once "./../../layout/footer.php";
?>