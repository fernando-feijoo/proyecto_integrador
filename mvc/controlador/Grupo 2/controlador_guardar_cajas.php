<?php
    if (!empty($_POST["g2_btn_nuev_caj"]) ){
        $g2_embal = $_POST["g2_txt_embal"];
        $g2_pes_net = $_POST["g2_txt_pes_net"];
        $g2_par_4 = $_POST["g2_txt_par_4"];
        $g2_par_6 = $_POST["g2_txt_par_6"];
        $g2_par_8 = $_POST["g2_txt_par_8"];
        $g2_imp_5 = $_POST["g2_txt_imp_5"];
        $g2_imp_7 = $_POST["g2_txt_imp_7"];
        $g2_defect = strtoupper($_POST["g2_txt_def_enc"]);
        $g2_tot_def = $_POST["g2_txt_tot_def"];
        
        $g2_id_cajs = $_SESSION['g2_id_caj'];

        $g2_tot_gaj= $g2_par_4 + $g2_par_6 + $g2_par_8 + $g2_imp_5 + $g2_imp_7;    
        $g2_pcmd = (($g2_tot_def/$g2_tot_gaj ) - 1 )*-100;

        $conexion = conexionBd();

        $sql_caj_g2 = $conexion->query("select insert_caj($g2_id_cajs,$g2_embal,$g2_pes_net,$g2_par_4,$g2_par_6,$g2_par_8,$g2_imp_5,$g2_imp_7,'$g2_defect',$g2_tot_def,$g2_tot_gaj,$g2_pcmd);");
        if ($sql_caj_g2 == 0) {
        echo "<div class='alert alert-success text-center' id='alerta-guardado-garita' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Datos gurdado correctamente!
         </div>";
        } else {
        echo "<div class='alert alert-danger text-center' id='error-guardado-garita' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Error al guardar los datos, vuelva a intentar y recargue la pagina!
        </div>";
        }
    }
