<?php
function listado_cajas()
{
  $conexion = conexionBd();
  $sql = $conexion->query("SELECT * FROM tipo_cajas;");
  return $sql;
}

function id_max()
{
  $conexion = conexionBd();
  $sql = $conexion->query("SELECT MAX(id) AS id_max FROM tipo_cajas;");
  return $sql;
}

function cargar_dato_actualizar()
{
  $id = $_GET["id_listado"];
  $conexion = conexionBd();
  $sql_actualizar = $conexion->query("SELECT * FROM tipo_cajas WHERE id = '$id';");
  return $sql_actualizar;
}

function actualizar_guardar_tipo_caja($id, $nombre)
{
  $conexion = conexionBd();
  $sql_guardar = $conexion->query("SELECT insertarTipoCaja('$id','$nombre');");
  if (($sql_guardar == TRUE || !empty($_POST["btn-guardar-cajas"])) || ($sql_guardar == TRUE || !empty($_POST["btn-actualizar-cajas"]))) {
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
