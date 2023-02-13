<?php
include_once "./../../layout/header.php";
include_once "./Grupo 3/menu.php";
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
          LISTADO DE DATOS LLEGADA
        </div>
      </div>
      <!-- /Titulo o encabezado del escritorio -->
    </div>
    <div id="caja-separacion-escritorio" class="mx-auto"></div>

    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-sellos" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Sellos llegada</button>
        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-inspeccion" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Inspeccion de Contenedor</button>
        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-higiene" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Higiene de Contenedor</button>
        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-despacho" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Despacho</button>
        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-paletizado" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Paletizado</button>
      </div>
    </nav>

    <?php
    include("./../modelo/conexion_bd.php");
    include_once("./../controlador/Grupo 3/registro_sellos.php");
    include_once("./../controlador/Grupo 3/inspeccion_contenedor.php");
    include_once("./../modelo/Grupo 3/modelo_inspeccion_contenedor.php");
    include_once("./../modelo/Grupo 3/modelo_despacho.php");
    include_once("./../controlador/Grupo 3/registro_despacho.php");
    ?>

    <?php
    // Este de aqui es para cuando se va a actualizar.
    if (!empty($_GET["id_contExpo"])) {
    ?>
      <script>
        console.log("Ingreso al SESSION id_contExpo")
      </script>
    <?php
      $_SESSION["id_contExpo"] = $_GET["id_contExpo"];
      unset($_SESSION["numCont"]);
      unset($_SESSION["id_regis"]);
      // Este de aqui es cuando se va a guardar por primera vez, puedes agregar el id de la tabla 
      // datos llegada para que lo almacene y luego borrarlo arriba.
    } else if (!empty($_GET["id_regis"])) {
    ?>
      <script>
        console.log("Ingreso al SESSION numCont && id_regis")
      </script>
    <?php
      $_SESSION["numCont"] = $_GET["numCont"];
      $_SESSION["id_regis"] = $_GET["id_regis"];
      unset($_SESSION["id_contExpo"]);
    }
    ?>

    <form action="./vista_listado_registro_g3.php" method="post">
      <div class="tab-content" id="nav-tabContent">

        <div class="tab-pane fade show active" id="nav-sellos" role="tabpanel" aria-labelledby="nav-home-tab">
          <?php
          include("./vista_sellos_contenedor_g3.php");
          ?>
        </div>

        <div class="tab-pane fade" id="nav-inspeccion" role="tabpanel" aria-labelledby="nav-profile-tab">
          <?php
          include_once("./vista_inspeccion_contenedor_g3.php");
          ?>
        </div>

        <div class="tab-pane fade" id="nav-higiene" role="tabpanel" aria-labelledby="nav-contact-tab">
          <?php
          include("./vista_higiene_contenedor_g3.php");
          ?>
        </div>

        <div class="tab-pane fade" id="nav-despacho" role="tabpanel" aria-labelledby="nav-contact-tab">
          <?php
          include("./vista_despacho_g3.php");
          ?>
        </div>
        <div class="tab-pane fade" id="nav-paletizado" role="tabpanel" aria-labelledby="nav-contact-tab">
          <?php
          include("./vista_paletizado_g3.php");
          ?>
        </div>
      </div>
    </form>
  </div>
</div>

<?php
include_once "./../../layout/footer.php";
?>