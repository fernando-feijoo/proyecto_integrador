<?php
$conexion = conexionBd();
function listado_vehiculos()
{
  global $conexion;
  $sql = $conexion->query("SELECT * FROM vehiculo WHERE estado = 'ACTIVO';");
  return $sql;
}

function id_max_vehi()
{
  global $conexion;
  $sql = $conexion->query("SELECT MAX(id) AS id_max FROM vehiculo;");
  return $sql;
}

function cargar_dato_actualizar_vehi()
{
  $id = $_GET["id_listado"];
  global $conexion;
  $sql_actualizar = $conexion->query("SELECT * FROM vehiculo WHERE id = '$id';");
  return $sql_actualizar;
}

function actualizar_guardar_vehiculo($id, $chasis, $placa, $marca)
{
  global $conexion;
  $sql_guardar = $conexion->query("SELECT insertarVehiculo('$id','$chasis','$placa','$marca');");
  if (($sql_guardar == TRUE || !empty($_POST["btn-guardar-vehiculo"])) || ($sql_guardar == TRUE || !empty($_POST["btn-actualizar-vehiculo"]))) {
    if (!empty($_POST["btn-guardar-vehiculo"])) {
      // echo '<meta http-equiv="refresh" content="5; url=./vista_admin_reg_cajas_g3.php">';
      echo "<div class='alert alert-success text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Datos guardados correctamente!
    </div>";
    } else {
      echo "<div class='alert alert-info text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Datos actualizados correctamente!
    </div>";
    }
  } else {
    echo "<div class='alert alert-danger text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Error al guardar los datos, vuelva a intentar y recargue la pagina!
    </div>";
  }
}

function eliminado_reg_vehi()
{
  if (!empty($_GET["id_eliminar_vehi"])) {
    $id_eliminar = $_GET["id_eliminar_vehi"];
    global $conexion;
    $sql_delete = $conexion->query("UPDATE vehiculo SET estado = 'INACTIVO' WHERE id = '$id_eliminar';");
    if ($sql_delete == 1) {
      echo "<div class='alert alert-success text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Datos eliminado correctamente!
    </div>";
    } else {
      echo "<div class='alert alert-danger text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Error al eliminar los datos, vuelva a intentar y recargue la pagina!
    </div>";
    }
  }
}
