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
                    <th scope="col">NOMBRE</th>
                    <th scope="col">APELLIDO</th>
                    <th scope="col">CEDULA</th>
                    <th scope="col">CIUDAD</th>
                    <th scope="col">DIRECCION</th>
                    <th scope="col">TELEFONO</th>
                    <th scope="col" style="width: 160px;"></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                include_once "./../modelo/conexion_bd.php";
                $conexion = conexionBd();
                $sql = $conexion->query("SELECT id, cedula, nombre, apellido, ciudad, direccion, telefono FROM chofer;");
                while ($datos = $sql->fetch_object()) {
                ?>
                    <tr>
                        <td><?= $datos->id?></td>
                        <td><?= $datos->nombre?></td>
                        <td><?= $datos->apellido?></td>
                        <td><?= $datos->cedula?></td>
                        <td><?= $datos->ciudad?></td>
                        <td><?= $datos->direccion?></td>
                        <td><?= $datos->telefono?></td>
                        <td>
                            <a href="" class="btn btn-small btn-warning" style="width: 70px;"><i class="fa-regular fa-pen-to-square"></i></a>
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