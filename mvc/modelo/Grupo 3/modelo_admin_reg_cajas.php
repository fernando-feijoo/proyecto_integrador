<?php
$conexion = conexionBd();
function listado_cajas()
{
  global $conexion;
  $sql = $conexion->query("SELECT * FROM tipo_cajas WHERE estado = 'ACTIVO';");
  return $sql;
}

function id_max()
{
  global $conexion;
  $sql = $conexion->query("SELECT MAX(id) AS id_max FROM tipo_cajas;");
  return $sql;
}

function cargar_dato_actualizar()
{
  $id = $_GET["id_listado"];
  global $conexion;
  $sql_actualizar = $conexion->query("SELECT * FROM tipo_cajas WHERE id = '$id';");
  return $sql_actualizar;
}

function actualizar_guardar_tipo_caja($id, $nombre)
{
  global $conexion;
  $sql_guardar = $conexion->query("SELECT insertarTipoCaja('$id','$nombre');");
  if (($sql_guardar == TRUE || !empty($_POST["btn-guardar-vehiculo"])) || ($sql_guardar == TRUE || !empty($_POST["btn-actualizar-vehiculo"]))) {
    if (!empty($_POST["btn-guardar-cajas"])) {
      // echo '<meta http-equiv="refresh" content="5; url=./vista_admin_reg_cajas_g3.php">';
      echo "<div class='alert alert-success text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Datos guardados correctamente!
    </div>";
    } else {
      // LINEA CLAVE PARA CAMBIAR DE VISTA AL GUARDAR CON UN ACTUALIZAR.
      // echo '<meta http-equiv="refresh" content="5; url=./vista_admin_reg_cajas_g3.php">';
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

function eliminado_reg_cajas()
{
  if (!empty($_GET["id_eliminar_caja"])) {
    $id_eliminar = $_GET["id_eliminar_caja"];
    global $conexion;
    $sql_delete = $conexion->query("UPDATE tipo_cajas SET estado = 'INACTIVO' WHERE id = '$id_eliminar';");
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
