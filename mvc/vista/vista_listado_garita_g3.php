<?php
include_once "./../../layout/header.php";
include_once "./Grupo 3/menu_garita.php";
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

        <table class="table table-striped table-hover table-sm table-bordered border-dark align-middle mt-5 mx-auto">
            <thead class="bg-primary bg-gradient bg-opacity-75">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">FECHA INSPECCION</th>
                    <th scope="col">SEMANA</th>
                    <th scope="col">HORA LLEGADA</th>
                    <th scope="col">CONTENEDOR</th>
                    <th scope="col">CHOFER</th>
                    <th scope="col">ACOPIO</th>
                    <th scope="col">TP CAJA</th>
                    <th scope="col">TP CONTENEDOR</th>
                    <th scope="col" style="width: 160px;"></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                include_once ("./../modelo/Grupo 3/modelo_listado_garita.php");
                while ($datos = $sql->fetch_object()) {
                ?>
                    <tr>
                        <td><?= $datos->id ?></td>
                        <td><?= $datos->fecha_inspeccion ?></td>
                        <td><?= $datos->semana ?></td>
                        <td><?= $datos->hora_llegada ?></td>
                        <td><?= $datos->contenedor ?></td>
                        <td><?= $datos->chofer_nombres ?></td>
                        <td><?= $datos->nombre_acopio ?></td>
                        <td><?= $datos->tipo_de_caja ?></td>
                        <td><?= $datos->tipo_de_contenedor ?></td>
                        <td>
                            <a id="boton-editar-garita" href="./vista_llegada_g3.php?id=<?= $datos->id?>" class="btn btn-small btn-warning" style="width: 70px;"><i class="fa-regular fa-pen-to-square"></i></a>
                            <a href="" class="btn btn-small btn-danger" style="width: 70px;"><i class="fa-regular fa-trash-can"></i></a>
                        </td>
                    </tr>
                <?php }
                ?>

            </tbody>
        </table>

    </div>
</div>
<?php
include_once "./../../layout/footer.php"
?>