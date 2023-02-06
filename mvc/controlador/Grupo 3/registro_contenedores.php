<?php
if (!empty($_POST["btn-guardar"]) || !empty($_POST["btn-actualizar"])) {
	if (!empty($_POST["sellos_internos"])) {
		$id_sellos = $_SESSION["id_sellos"];
		$sellos_internos = $_POST["sellos_internos"];
		$sellos_externos = $_POST["sellos_externos"];

		

		// Para visualizar en pantalla de trabajo, prueba.
		// echo $fecha_insp. ' <br> ' .$semana. ' <br> ' .$fecha_hora_salida. ' <br> ' .$hora_llegada. ' <br> ' .$cupo. ' <br> ' .$contenedor. ' <br> ' .$nombre_acopio. ' <br> ' .$candados_llegada. ' <br> ' .$tipo_contenedor_eleccion. ' <br> ' .$id_tipo_caja. ' <br> ' .$id_vehiculo. ' <br> ' .$id_chofer;
		$conexion = conexionBd();

		$sql_consulta = "SELECT `insertarDatosSellos` ($id_listado,'$sellos_internos','$sellos_externos');";

		$sql = $conexion->query($sql_consulta);

		if (($conexion->query($sql_consulta) === TRUE || !empty($_POST["btn-guardar"])) || ($conexion->query($sql_consulta) === TRUE || !empty($_POST["btn-actualizar"]))) {
			if (!empty($_POST["btn-guardar"])) {
				echo "<div class='alert alert-success text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Datos guardados correctamente!
    </div>";
			} else {
				echo "<div class='alert alert-success text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Datos actualizados correctamente!
    </div>";
			}
		} else {
			echo "<div class='alert alert-danger text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Error al guardar los datos, vuelva a intentar y recargue la pagina!
    </div>";
		}
	} else {
		echo "<div class='alert alert-danger text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Registre todos los datos necesarios, verifique!
    </div>";
	}
}
