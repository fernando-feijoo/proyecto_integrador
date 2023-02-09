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
                    LISTADO DE DATOS LLEGADA
                </div>
            </div>
            <!-- /Titulo o encabezado del escritorio -->
        </div>
        <div id="caja-separacion-escritorio" class="mx-auto"></div>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
    </div>
</div>


<?php 
include_once "./../../layout/footer.php";
?>