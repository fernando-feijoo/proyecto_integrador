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
          LISTADO DE EVALUACIONES
        </div>
      </div>
      <!-- /Titulo o encabezado del escritorio -->
    </div>
    <div id="caja-separacion-escritorio" class="mx-auto"></div>
    <?php
    include_once("./../controlador/Grupo 1/eliminar_registros_eva.php");
    include("./../modelo/Grupo 1/modelo_listado_eva.php");
    ?>
    <table class="table mt-2">
      <thead style="background-color: greenyellow;">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">COD</th>
          <th scope="col">NOMBRE_PROD</th>
          <th scope="col">APELLIDO_PROD</th>
          <th scope="col">FINCA_PROD</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php
        // include_once("./../modelo/Grupo 3/modelo_listado_garita.php");
        while ($datos = $sql->fetch_object()) {
          ?>
          <tr>
            <td><?= $datos->id ?></td>
            <td><?= $datos->cod_evaluacion ?></td>
            <td><?= $datos->nombre_p ?></td>
            <td><?= $datos->apellido_p ?></td>
            <td><?= $datos->finca ?></td>
            <td>
              <a class="btn btn-small btn-warning" href="vista_registro_eva_g1.php?id_eva=<?= $datos->id ?>"><i
                  class="fa-regular fa-pen-to-square"></i></a>
              <a class="btn btn-small btn-danger" href="./vista_listado_eva_g1.php?id_delete=<?= $datos->id ?>"><i class="fa-regular fa-trash-can"></i></a>
            </td>
          </tr>
        <?php }
        ?>
      </tbody>
    </table>
  </div>
</div>
<?php
include_once "./../../layout/footer.php";
?>