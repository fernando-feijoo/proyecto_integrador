<?php
if (!empty($_POST["g2_btn_guar"]) || !empty($_POST["g2_btn_act"])) {

        $g2_fecha = date("Y-m-d ", strtotime($_POST["g2_txt_fecha"]));
        $g2_semana = $_POST["g2_txt_sem"];
        $g2_pdo = $_POST["g2_txt_pdo"];
        $g2_vapor = $_POST["g2_txt_vap"];
        $g2_tipo_caj = $_POST["g2_txt_tip_caj"];
        $g2_destino = $_POST["g2_txt_dest"];
        $g2_peso = $_POST["g2_txt_peso"];
        $g2_ldedos = $_POST["g2_txt_l_dedos"];
        $g2_calibracion = $_POST["g2_txt_calib"];
        $g2_fumigacion = $_POST["g2_txt_fumig"];
        $g2_transporte = $_POST["g2_txt_trans"];
        $g2_codigo = $_POST["g2_txt_codig"];
        $g2_finca = $_POST["g2_txt_finc"];
        $g2_obsebacion = $_POST["g2_txt_obser"];

        $conexion = conexionBd();

    if (!empty($_POST["g2_btn_guar"])) {

        
        $g2_id_cntr = $_SESSION['id_g2_eva_ins'];

        $sql_g2 = $conexion->query("INSERT INTO control_calidad(semana, fecha, pdo, vapor, tipo_caj, peso, destino, ldedos, calibracion, fumigacion, transporte, codigo, finca, observaciones, estado) 
        VALUES ($g2_semana,'$g2_fecha',$g2_pdo,'$g2_vapor','$g2_tipo_caj',$g2_peso,'$g2_destino','$g2_ldedos','$g2_calibracion','$g2_fumigacion','$g2_transporte','$g2_codigo','$g2_finca','$g2_obsebacion',1);");
        
        $sql_g2_ =$conexion->query("INSERT INTO evaluacion_empacadora(id_cont_cal, num_eva, pcmd_total, estado_caja)
		VALUES ($g2_id_cntr, 1, '--', 'incompleto');");

        if ($sql_g2 == 1) {
        echo "<div class='alert alert-success text-center' id='alerta-guardado-garita' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Datos gurdado correctamente !
         </div>";
        } else {
        echo "<div class='alert alert-danger text-center' id='error-guardado-garita' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Error al guardar los datos, vuelva a intentar y recargue la pagina!
        </div>";
        }
    } else if (!empty($_POST["g2_btn_act"])) {

        
        $g2_id_cntr = $_SESSION['id_g2_eva_act'];

        $sql_g2 = $conexion->query("UPDATE control_calidad SET 
        semana='$g2_semana',pdo=$g2_pdo,vapor='$g2_vapor',tipo_caj='$g2_tipo_caj',peso=$g2_peso,destino='$g2_destino',ldedos='$g2_ldedos',calibracion='$g2_calibracion',fumigacion='$g2_fumigacion',transporte='$g2_transporte',codigo='$g2_codigo',finca='$g2_finca',observaciones='$g2_obsebacion'
        WHERE id='$g2_id_cntr';"); 
        
        if ($sql_g2 == 1) {
        ?>
		    <script>
				console.log("Datos Actualizado correctamente")
			</script>
		<?php
        echo "<div class='alert alert-success text-center' id='alerta-guardado-garita' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Datos Actualizado correctamente!
         </div>";
        } else {
        echo "<div class='alert alert-danger text-center' id='error-guardado-garita' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Error al guardar los datos, vuelva a intentar y recargue la pagina!
        </div>";
        }
    }   
}
