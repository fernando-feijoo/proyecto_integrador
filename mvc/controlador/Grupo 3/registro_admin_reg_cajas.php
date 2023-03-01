<?php
if (!empty($_POST["btn-guardar-cajas"]) || !empty($_POST["btn-actualizar-cajas"])) {

  if (!empty($_POST["nombre_caja"])) {

    $nombre = mb_strtoupper($_POST["nombre_caja"], 'UTF-8');

    if (!empty($_SESSION["id_listado"])) {
      $id = $_SESSION["id_listado"];
    } else if (!empty($_SESSION["id_max"])) {
      $id = '';
    }

    actualizar_guardar_tipo_caja($id, $nombre);
  } else {
    echo "<div class='alert alert-danger text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Ingrese los datos, debe ingresar todos los datos!
    </div>";
  }
}
