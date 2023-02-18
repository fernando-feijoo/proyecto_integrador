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
                <a id="ico-home" href="./dashboard.php"><img src="./../../img/home_32x32-escritorio.png"
                        alt="icono-home" /></a>
            </div>
            <div class="col-10 me-3 ms-3 mt-4">
                <div id="titulo-escritorio-listado">
                    LISTADO DE REPORTES
                </div>
            </div>
            <!-- /Titulo o encabezado del escritorio -->
        </div>
        <div id="caja-separacion-escritorio" class="mx-auto"></div>
        <?php
        include_once("./../controlador/Grupo 1/eliminar_registros_eva.php");
        include("./../modelo/Grupo 1/modelo_listado_eva.php");
        ?>

        <div class="d-flex justify-content-center flex-row">
            <form action="?busqueda=1" method="post">
                <div class="input-group mt-3" style="width: 700px;">
                    <input class="text-uppercase" name="busqueda_evaluaciones" type="text" class="form-control"
                        placeholder="Ingrese el código de la evaluación" value=""
                        style="width: 550px; border-radius: 5px;">
                    <button class="btn btn-outline-primary" type="submit" name="button-busqueda" value="buscando">Buscar
                        registro</button>
                </div>
            </form>

        </div>

        <table class="table table-striped table-hover table-sm table-bordered border-dark align-middle mt-3 mx-auto">
            <thead class="bg-primary bg-gradient bg-opacity-75">
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
                        <td>
                            <?= $datos->id ?>
                        </td>
                        <td>
                            <?= $datos->cod_eva ?>
                        </td>
                        <td>
                            <?= $datos->nombre_p ?>
                        </td>
                        <td>
                            <?= $datos->apellido_p ?>
                        </td>
                        <td>
                            <?= $datos->finca ?>
                        </td>
                        <td>
                            <a href="./../controlador//Grupo 1/reporte_eva.php?id_reportes=<?= $datos->id ?>"><i
                                class="btn btn-outline-danger fa-regular fa-file-pdf"></i></a>
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