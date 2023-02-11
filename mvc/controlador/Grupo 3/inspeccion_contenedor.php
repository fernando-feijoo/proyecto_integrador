<?php
if (!empty($_POST["btn-guardar"]) || !empty($_POST["btn-actualizar"])) {
	if (!empty($_POST['id_conExpo'])) {
		$id_inpeccion = $_SESSION['id_conExpo'];
        $verificar_lugar=$_POST['puertas'];
        $verificar_lugar=$_POST['pared_izquierda'];
        $verificar_lugar=$_POST['espaciadores'];
        $verificar_lugar=$_POST['pared_frontal'];
        $verificar_lugar=$_POST['pared_derecha'];
        $verificar_lugar=$_POST['techo'];
        $verificar_lugar=$_POST['piso_interior'];  
        $verificar_lugar=$_POST['piso_exterior'];
        $verificar_lugar=$_POST['eva'];
        $verificar_lugar=$_POST['torinillo'];
        $verificar_lugar=$_POST['delefactor'];
      


		// Para visualizar en pantalla de trabajo, prueba.
		$conexion = conexionBd();

		$sql_consulta = "SELECT `InsertarDatosInspeccion` ( $id_cont_export, $id_verificar_lugar, $verificacion)";
        $maxDato = (($idContenedor * 11) - 11);
for ($i = 1; $i < 12; $i++) {
    $id_contenedor = $idContenedor;
    $id = $maxDato + $i;
    $id_verificar_lugar = $i;
    switch ($i) {
        case 1:
            $verificar_lugar =['puertas'];
            break;
        case 2:
            $verificar_lugar =['pared_izquierda'];
            break;
        case 3:
            $verificar_lugar = ['espaciadores'];
            break;
        case 4:
            $verificar_lugar = ['pared_frontal'];
            break;
        case 5:
            $verificar_lugar = ['pared_derecha'];
            break;
        case 6:
            $verificar_lugar = ['techo'];
            break;
        case 7:
            $verificar_lugar = ['piso_interior'];
            break;
        case 8:
            $verificar_lugar = ['piso_exterior'];
            break;
        case 9:
            $verificar_lugar = ['eva'];
            break;
        case 10:
            $verificar_lugar = ['tornillo'];
            break;
        case 11:
            $verificar_lugar = ['delefactor'];
            break;
    }
}
		
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



