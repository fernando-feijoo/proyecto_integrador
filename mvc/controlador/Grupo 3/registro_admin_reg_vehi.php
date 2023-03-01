<?php
if (!empty($_POST["btn-guardar-vehiculo"]) || !empty($_POST["btn-actualizar-vehiculo"])) {

  if (!empty($_POST["nombre_chasis"]) && !empty($_POST["nombre_placa"]) && !empty($_POST["nombre_marca"])) {

    $chasis = strtoupper($_POST["nombre_chasis"]);
    $placa = strtoupper($_POST["nombre_placa"]);
    $marca = mb_strtoupper($_POST["nombre_marca"], 'UTF-8');

    if (!empty($_SESSION["id_listado"])) {
      $id = $_SESSION["id_listado"];
    } else if (!empty($_SESSION["id_max"])) {
      $id = '';
    }

    actualizar_guardar_vehiculo($id, $chasis, $placa, $marca);
  } else {
    echo "<div class='alert alert-danger text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Ingrese los datos, debe ingresar todos los datos!
    </div>";
  }
}
