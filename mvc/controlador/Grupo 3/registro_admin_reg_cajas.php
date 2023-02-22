<?php
if (!empty($_POST["btn-guardar-cajas"]) || !empty($_POST["btn-actualizar-cajas"])) {

  if (isset($_POST["nombre_caja"])) {

    $nombre = strtoupper($_POST["nombre_caja"]);

    if (!empty($_SESSION["id_listado"])) {
      $id = $_SESSION["id_listado"];
    } else if(!empty($_SESSION["id_max"])) {
      $id = '';
    }

    actualizar_guardar_tipo_caja($id, $nombre);
  }
}
