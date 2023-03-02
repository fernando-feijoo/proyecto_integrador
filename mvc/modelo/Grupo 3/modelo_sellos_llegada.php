<?php
$conexion = conexionBd();
function carga_datos_sellos()
{
	if (!empty($_GET["id_contExpo"])) {
		$id = $_GET["id_contExpo"];
		global $conexion;
		$sql = $conexion->query("SELECT * FROM cont_export WHERE id = $id;");
		return $sql;
	} else {
		$validacion = false;
		return $validacion;
	}
}

function guardar_sellos_contenedor($id, $num_conte, $sellos_externos, $sellos_internos, $id_registro)
{
	global $conexion;
	$sql_consulta = "SELECT `insertarDatosSellos` ('$id','$num_conte','$sellos_externos','$sellos_internos','$id_registro');";
	$sql = $conexion->query($sql_consulta);

	if (($sql == TRUE || !empty($_POST["btn-guardar-general"])) || ($sql == TRUE || !empty($_POST["btn-actualizar-general"]))) {
		if (!empty($_POST["btn-guardar-general"])) {
			echo "<div class='alert alert-success text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Datos guardados correctamente!
    </div>";
?>
			<script>
				console.log("Guardado Correcto - SELLOS CONTENEDOR")
			</script>
<?php
		} else {
			// LINEA CLAVE PARA CAMBIAR DE VISTA AL GUARDAR CON UN ACTUALIZAR.
			echo '<meta http-equiv="refresh" content="5; url=./vista_listado_contenedores_g3.php">';
			echo "<div class='alert alert-info text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Datos actualizados correctamente! Sera redirigido a la lista...
    </div>";
		}
	} else {
		echo "<div class='alert alert-danger text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Error al guardar los datos, vuelva a intentar y recargue la pagina!
    </div>";
	}
}
