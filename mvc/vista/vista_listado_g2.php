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
          LISTADO DE EVALUACIONES 
        </div>
      </div>
      <!-- /Titulo o encabezado del escritorio -->
    </div>
    <div id="caja-separacion-escritorio" class="mx-auto"></div>
    <?php
    include_once("./../controlador/Grupo 2/eliminar_registros.php");
    include("./../modelo/Grupo 2/modelo_.php");
    ?>
  
<div class="d-flex justify-content-center flex-row">
<form action="?busqueda=1" method="post">
    <div class="input-group mt-3" style="width: 700px;">
        <input name="g2_txt_busq_eval" type="date" placeholder="Ingrese la fecha de la evaluación" value="" style="width: 550px; border-radius: 5px;">
        <button class="btn btn-outline-primary" type="submit" name="g2_btn_busqueda" value="buscando">Buscar</button>
    </div>
</form>

</div>

    <table class="table table-striped table-hover table-sm table-bordered border-dark align-middle mt-3 mx-auto">
      <thead class="bg-primary bg-gradient bg-opacity-75">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">SEMANA</th>
          <th scope="col">FECHA</th>
          <th scope="col">PERIODO</th>
          <th scope="col">FINCA</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php
        
        while ($datos = $sql->fetch_object()) {
          ?>
          <tr>
            <td>
            <?= $datos->id ?>
            </td>
            <td>
              <?= $datos->semana ?>
            </td>
            <td>
              <?= $datos->fecha ?>
            </td>
            <td>
              <?= $datos->pdo ?>
            </td>
            <td>
              <?= $datos->finca ?>
            </td>
            <td>
              <a class="btn btn-small btn-warning" href="vista_control_calidad_g2.php?g2_id_eva=<?= $datos->id ?>"><i
                  class="fa-regular fa-pen-to-square"></i></a>
              <a id="boton-eliminar" class="btn btn-small btn-danger"
                href="./vista_listado_g2.php?id_delete=<?= $datos->id ?>"><i class="fa-regular fa-trash-can"></i></a>
            </td>
          </tr>
        <?php }
        ?>
      </tbody>
    </table>

    <?php
        if (empty($_GET["busqueda"])) {
        ?>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <?php if ($pagina != 1) { ?>
                        <li class="page-item">
                            <a class="page-link" href="?pagina=<?= $pagina - 1 ?>">Previous</a>
                        </li>
                    <?php } ?>
                    <?php for ($i = 1; $i <= $num_pags; $i++) { ?>
                        <li class="page-item <?= $i == $pagina ? 'active' : '' ?>">
                            <a class="page-link" href="?pagina=<?= $i ?>"><?= $i ?></a>
                        </li>
                    <?php } ?>
                    <?php if ($pagina != $num_pags) { ?>
                        <li class="page-item">
                            <a class="page-link" href="?pagina=<?= $pagina + 1 ?>">Next</a>
                        </li>
                    <?php } ?>
                </ul>
            </nav>
        <?php
        } else {
        ?>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <?php if ($pagina != 1) { ?>
                        <li class="page-item">
                            <a class="page-link" href="?busqueda=1&pagina=<?= $pagina - 1 ?>">Previous</a>
                        </li>
                    <?php } ?>
                    <?php for ($i = 1; $i <= $num_pags; $i++) { ?>
                        <li class="page-item <?= $i == $pagina ? 'active' : '' ?>">
                            <a class="page-link" href="?busqueda=1&pagina=<?= $i ?>"><?= $i ?></a>
                        </li>
                    <?php } ?>
                    <?php if ($pagina != $num_pags) { ?>
                        <li class="page-item">
                            <a class="page-link" href="?busqueda=1&pagina=<?= $pagina + 1 ?>">Next</a>
                        </li>
                    <?php } ?>
                </ul>
            </nav>
        <?php
        }
        ?>
    
  </div>
</div>
<?php
include_once "./../../layout/footer.php";
?>