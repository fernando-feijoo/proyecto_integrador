
<?php

if (!empty($_POST["btn-guardar"]) || !empty($_POST["btn-actualizar"])) {
	if (!empty($_POST["sello_interno1"])) {
		$id_sellos=$_SESSION['numCont'];
		$sellos_internos = $_POST["sello_interno1"].';';
		$sellos_internos .= $_POST["sello_interno2"].';';
		$sellos_internos .= $_POST["sello_interno3"];

		$sellos_externos = $_POST["sello_externo1"].';';
		$sellos_externos .=$_POST["sello_externo2"].';';
		$sellos_externos .=$_POST["sello_externo3"].';';
		$sellos_externos .=$_POST["sello_externo4"].';';
		$sellos_externos .=$_POST["sello_externo5"].';';
		$sellos_externos .=$_POST["sello_externo6"].';';
		$sellos_externos .=$_POST["sello_externo7"].';';
		$sellos_externos .=$_POST["sello_externo8"].';';
		$sellos_externos .=$_POST["sello_externo9"];
		$num_conte=$_SESSION["numCont"];
		$id_registro=$_SESSION["id_regis"];


		// Para visualizar en pantalla de trabajo, prueba.
		$conexion = conexionBd();

		$sql_consulta = "SELECT `InsertarDatosContExport` ($id_sellos,'$sellos_externos','$sellos_internos','$id_registro');";
		
		if (($conexion->query($sql_consulta) === TRUE || !empty($_POST["btn-guardar"])) || ($conexion->query($sql_consulta) === TRUE || !empty($_POST["btn-actualizar"]))) {
			if (!empty($_POST["btn-guardar"])) {
				echo "<div class='alert alert-success text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Datos guardados correctamente!
		
		

    </div >" ;

	echo"<script> window.location.href = ' vista_contenedores_g3.php'</script>";


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

