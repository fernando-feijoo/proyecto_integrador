<?php
date_default_timezone_set('America/Guayaquil');
if (!empty($_POST["btn-guardar-general"]) || !empty($_POST["btn-actualizar-general"])) {
  if (!empty($_SESSION["id_contExpo"])) {
    $id_contenedor_export = $_SESSION['id_contExpo'];
?>
    <script>
      console.log("Ingreso a controlador pallet - actualizar")
    </script>
  <?php
  } else if (!empty($_SESSION["numCont"])) {
    $id_contenedor_export = $_SESSION['numCont'];
  ?>
    <script>
      console.log("Ingreso a controlador pallet - nuevo registro")
    </script>
    <?php
  }

  $id_cantidad_cajas = $_POST["cantidad_cajas"];

  $maxDato = (($id_contenedor_export * 20) - 20);
  for ($i = 1; $i < 21; $i++) {
    $id = $maxDato + $i;
    switch ($i) {
      case 1:
        $valor = isset($_POST["caja_1"]) ? $_POST["caja_1"] : '';
        break;
      case 2:
        $valor = isset($_POST["caja_2"]) ? $_POST["caja_2"] : '';
        break;
      case 3:
        $valor = isset($_POST["caja_3"]) ? $_POST["caja_3"] : '';
        break;
      case 4:
        $valor = isset($_POST["caja_4"]) ? $_POST["caja_4"] : '';
        break;
      case 5:
        $valor = isset($_POST["caja_5"]) ? $_POST["caja_5"] : '';
        break;
      case 6:
        $valor = isset($_POST["caja_6"]) ? $_POST["caja_6"] : '';
        break;
      case 7:
        $valor = isset($_POST["caja_7"]) ? $_POST["caja_7"] : '';
        break;
      case 8:
        $valor = isset($_POST["caja_8"]) ? $_POST["caja_8"] : '';
        break;
      case 9:
        $valor = isset($_POST["caja_9"]) ? $_POST["caja_9"] : '';
        break;
      case 10:
        $valor = isset($_POST["caja_10"]) ? $_POST["caja_10"] : '';
        break;
      case 11:
        $valor = isset($_POST["caja_11"]) ? $_POST["caja_11"] : '';
        break;
      case 12:
        $valor = isset($_POST["caja_12"]) ? $_POST["caja_12"] : '';
        break;
      case 13:
        $valor = isset($_POST["caja_13"]) ? $_POST["caja_13"] : '';
        break;
      case 14:
        $valor = isset($_POST["caja_14"]) ? $_POST["caja_14"] : '';
        break;
      case 15:
        $valor = isset($_POST["caja_15"]) ? $_POST["caja_15"] : '';
        break;
      case 16:
        $valor = isset($_POST["caja_16"]) ? $_POST["caja_16"] : '';
        break;
      case 17:
        $valor = isset($_POST["caja_17"]) ? $_POST["caja_17"] : '';
        break;
      case 18:
        $valor = isset($_POST["caja_18"]) ? $_POST["caja_18"] : '';
        break;
      case 19:
        $valor = isset($_POST["caja_19"]) ? $_POST["caja_19"] : '';
        break;
      case 20:
        $valor = isset($_POST["caja_20"]) ? $_POST["caja_20"] : '';
        break;
    }
    guardar_datos_pallet($id, $valor, $id_contenedor_export, $id_cantidad_cajas);
  }

  if (!empty($_POST["obs_general"])) {
    $obs_general = strtoupper($_POST["obs_general"]);
    if (!empty($_SESSION["id_contExpo"])) {
      $id = $_SESSION["id_contExpo"];
    } else if (!empty($_SESSION["numCont"])) {
      $id = $_SESSION["numCont"];
    }
    insertar_comentario_general($obs_general, $id);
  }

  date_default_timezone_set('America/Guayaquil');

  if (!empty($_POST["firmante1"])) {
    $firmante1 = isset($_POST["firmante1"]) ? $_POST["firmante1"] : 0;
    $id_firma = $firmante1 == 'Seleccione' ? 0 : $firmante1;
    $fecha = date('Y-m-d H:i:s');
    if (!empty($_SESSION["id_contExpo"])) {
      $id = $_SESSION["id_contExpo"];
    } else if (!empty($_SESSION["numCont"])) {
      $id = $_SESSION["numCont"];
    }
    guardar_firmas_uno($id, $fecha, $id_firma);
  }

  if (!empty($_POST["firmante2"])) {
    $firmante2 = isset($_POST["firmante2"]) ? $_POST["firmante2"] : 0;
    $id_firma = $firmante2 == 'Seleccione' ? 0 : $firmante2;
    $fecha = date('Y-m-d H:i:s');
    if (!empty($_SESSION["id_contExpo"])) {
      $id = $_SESSION["id_contExpo"];
    } else if (!empty($_SESSION["numCont"])) {
      $id = $_SESSION["numCont"];
    }
    guardar_firmas_dos($id, $fecha, $id_firma);
  }

  if (!empty($_POST["firmante3"])) {
    $firmante3 = isset($_POST["firmante3"]) ? $_POST["firmante3"] : 0;
    $id_firma = $firmante3 == 'Seleccione' ? 0 : $firmante3;
    $fecha = date('Y-m-d H:i:s');
    if (!empty($_SESSION["id_contExpo"])) {
      $id = $_SESSION["id_contExpo"];
    } else if (!empty($_SESSION["numCont"])) {
      $id = $_SESSION["numCont"];
    }
    guardar_firmas_tres($id, $fecha, $id_firma);
  }

  if (!empty($_POST["firmante4"])) {
    $firmante4 = isset($_POST["firmante4"]) ? $_POST["firmante4"] : 0;
    $id_firma = $firmante4 == 'Seleccione' ? 0 : $firmante4;
    if (!empty($_SESSION["id_contExpo"])) {
      $id = $_SESSION["id_contExpo"];
    } else if (!empty($_SESSION["numCont"])) {
      $id = $_SESSION["numCont"];
    }
    guardar_firmas_chofer($id, $id_firma);
  }
}
