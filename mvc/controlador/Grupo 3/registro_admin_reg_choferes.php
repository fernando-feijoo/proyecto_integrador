<?php
if (!empty($_POST["btn-guardar-chofer"]) || !empty($_POST["btn-actualizar-chofer"])) {

  if (!empty($_POST["cedula_chofer"]) && !empty($_POST["nombre_chofer"]) && !empty($_POST["apellido_chofer"]) && !empty($_POST["ciudad_chofer"]) && !empty($_POST["direccion_chofer"]) && !empty($_POST["telefono_chofer"])) {

    $cedula = strtoupper($_POST["cedula_chofer"]);
    $nombre = mb_strtoupper($_POST["nombre_chofer"], 'UTF-8');
    $apellido = mb_strtoupper($_POST["apellido_chofer"], 'UTF-8');
    $ciudad = mb_strtoupper($_POST["ciudad_chofer"], 'UTF-8');
    $direccion = mb_strtoupper($_POST["direccion_chofer"], 'UTF-8');
    $telefono = strtoupper($_POST["telefono_chofer"]);

    if (!empty($_SESSION["id_listado"])) {
      $id = $_SESSION["id_listado"];
    } else if (!empty($_SESSION["id_max"])) {
      $id = '';
    }

    actualizar_guardar_chofer($id, $cedula, $nombre, $apellido, $ciudad, $direccion, $telefono);
  } else {
    echo "<div class='alert alert-danger text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Ingrese los datos, debe ingresar todos los datos!
    </div>";
  }
}
