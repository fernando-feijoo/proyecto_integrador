<?php
if (!empty($_POST["guardar_eva"]) || !empty($_POST["actualizar_eva"])) {

    if (!empty($_POST["guardar_eva"])) {
        $id_eva = $_SESSION["id_conteo"];
        unset($_SESSION["id_eva"]);
    } else if (!empty($_POST["actualizar_eva"])) {
        $id_eva = $_SESSION["id_eva"];
        unset($_SESSION["id_conteo"]);
    }

    $id = $id_eva;

    $name_peso1 = ($_POST["name_peso1"] == 0) ? " " : $_POST["name_peso1"];
    $name_cluster1 = ($_POST["name_cluster1"] == 0) ? " " : $_POST["name_cluster1"];
    $name_ph1 = ($_POST["name_ph1"] == 0) ? " " : $_POST["name_ph1"];
    $name_brs1 = ($_POST["name_brs1"] == 0) ? " " : $_POST["name_brs1"];
    $name_cc1 = ($_POST["name_cc1"] == 0) ? " " : $_POST["name_cc1"];
    $name_ct1 = ($_POST["name_ct1"] == 0) ? " " : $_POST["name_ct1"];
    $name_lf1 = ($_POST["name_lf1"] == 0) ? " " : $_POST["name_lf1"];
    $name_ni1 = ($_POST["name_ni1"] == 0) ? " " : $_POST["name_ni1"];
    $name_ns1 = ($_POST["name_ns1"] == 0) ? " " : $_POST["name_ns1"];
    $name_ps1 = ($_POST["name_ps1"] == 0) ? " " : $_POST["name_ps1"];
    $name_sk1 = ($_POST["name_sk1"] == 0) ? " " : $_POST["name_sk1"];
    $name_sr1 = ($_POST["name_sr1"] == 0) ? " " : $_POST["name_sr1"];
    $name_tc1 = ($_POST["name_tc1"] == 0) ? " " : $_POST["name_tc1"];
    $name_tf1 = ($_POST["name_tf1"] == 0) ? " " : $_POST["name_tf1"];
    $name_yb1 = ($_POST["name_yb1"] == 0) ? " " : $_POST["name_yb1"];
    $name_sc1 = ($_POST["name_sc1"] == 0) ? " " : $_POST["name_sc1"];
    $name_dp1 = ($_POST["name_dp1"] == 0) ? " " : $_POST["name_dp1"];
    $name_bre1 = ($_POST["name_bre1"] == 0) ? " " : $_POST["name_bre1"];
    $name_sre1 = ($_POST["name_sre1"] == 0) ? " " : $_POST["name_sre1"];
    $name_srf1 = ($_POST["name_srf1"] == 0) ? " " : $_POST["name_srf1"];
    $name_dpe1 = ($_POST["name_dpe1"] == 0) ? " " : $_POST["name_dpe1"];
    $total_def1 = $_POST["name_totald1"];

    $name_peso2 = ($_POST["name_peso2"] == 0) ? " " : $_POST["name_peso2"];
    $name_cluster2 = ($_POST["name_cluster2"] == 0) ? " " : $_POST["name_cluster2"];
    $name_ph2 = ($_POST["name_ph2"] == 0) ? " " : $_POST["name_ph2"];
    $name_brs2 = ($_POST["name_brs2"] == 0) ? " " : $_POST["name_brs2"];
    $name_cc2 = ($_POST["name_cc2"] == 0) ? " " : $_POST["name_cc2"];
    $name_ct2 = ($_POST["name_ct2"] == 0) ? " " : $_POST["name_ct2"];
    $name_lf2 = ($_POST["name_lf2"] == 0) ? " " : $_POST["name_lf2"];
    $name_ni2 = ($_POST["name_ni2"] == 0) ? " " : $_POST["name_ni2"];
    $name_ns2 = ($_POST["name_ns2"] == 0) ? " " : $_POST["name_ns2"];
    $name_ps2 = ($_POST["name_ps2"] == 0) ? " " : $_POST["name_ps2"];
    $name_sk2 = ($_POST["name_sk2"] == 0) ? " " : $_POST["name_sk2"];
    $name_sr2 = ($_POST["name_sr2"] == 0) ? " " : $_POST["name_sr2"];
    $name_tc2 = ($_POST["name_tc2"] == 0) ? " " : $_POST["name_tc2"];
    $name_tf2 = ($_POST["name_tf2"] == 0) ? " " : $_POST["name_tf2"];
    $name_yb2 = ($_POST["name_yb2"] == 0) ? " " : $_POST["name_yb2"];
    $name_sc2 = ($_POST["name_sc2"] == 0) ? " " : $_POST["name_sc2"];
    $name_dp2 = ($_POST["name_dp2"] == 0) ? " " : $_POST["name_dp2"];
    $name_bre2 = ($_POST["name_bre2"] == 0) ? " " : $_POST["name_bre2"];
    $name_sre2 = ($_POST["name_sre2"] == 0) ? " " : $_POST["name_sre2"];
    $name_srf2 = ($_POST["name_srf2"] == 0) ? " " : $_POST["name_srf2"];
    $name_dpe2 = ($_POST["name_dpe2"] == 0) ? " " : $_POST["name_dpe2"];
    $total_def2 = $_POST["name_totald2"];

    $name_peso3 = ($_POST["name_peso3"] == 0) ? " " : $_POST["name_peso3"];
    $name_cluster3 = ($_POST["name_cluster3"] == 0) ? " " : $_POST["name_cluster3"];
    $name_ph3 = ($_POST["name_ph3"] == 0) ? " " : $_POST["name_ph3"];
    $name_brs3 = ($_POST["name_brs3"] == 0) ? " " : $_POST["name_brs3"];
    $name_cc3 = ($_POST["name_cc3"] == 0) ? " " : $_POST["name_cc3"];
    $name_ct3 = ($_POST["name_ct3"] == 0) ? " " : $_POST["name_ct3"];
    $name_lf3 = ($_POST["name_lf3"] == 0) ? " " : $_POST["name_lf3"];
    $name_ni3 = ($_POST["name_ni3"] == 0) ? " " : $_POST["name_ni3"];
    $name_ns3 = ($_POST["name_ns3"] == 0) ? " " : $_POST["name_ns3"];
    $name_ps3 = ($_POST["name_ps3"] == 0) ? " " : $_POST["name_ps3"];
    $name_sk3 = ($_POST["name_sk3"] == 0) ? " " : $_POST["name_sk3"];
    $name_sr3 = ($_POST["name_sr3"] == 0) ? " " : $_POST["name_sr3"];
    $name_tc3 = ($_POST["name_tc3"] == 0) ? " " : $_POST["name_tc3"];
    $name_tf3 = ($_POST["name_tf3"] == 0) ? " " : $_POST["name_tf3"];
    $name_yb3 = ($_POST["name_yb3"] == 0) ? " " : $_POST["name_yb3"];
    $name_sc3 = ($_POST["name_sc3"] == 0) ? " " : $_POST["name_sc3"];
    $name_dp3 = ($_POST["name_dp3"] == 0) ? " " : $_POST["name_dp3"];
    $name_bre3 = ($_POST["name_bre3"] == 0) ? " " : $_POST["name_bre3"];
    $name_sre3 = ($_POST["name_sre3"] == 0) ? " " : $_POST["name_sre3"];
    $name_srf3 = ($_POST["name_srf3"] == 0) ? " " : $_POST["name_srf3"];
    $name_dpe3 = ($_POST["name_dpe3"] == 0) ? " " : $_POST["name_dpe3"];
    $total_def3 = $_POST["name_totald3"];

    $total_cluster= ($_POST["total_cluster"] == 0) ? " " : $_POST["total_cluster"];
    $total_ph=($_POST["total_ph"] == 0) ? " " : $_POST["total_ph"];
    $total_defectos=($_POST["total_defectos"] == 0) ? " " : $_POST["total_defectos"];
    $promedio=round($_POST["porcentaje"],2);
    $observacion=strtoupper($_POST["name_observaciones_empaque"]);
    $conexion = conexionBd();

    if (!empty($_POST["guardar_eva"])) {
        $sql1=$conexion->query("INSERT INTO `seleccion_empaque`(`peso_neto_caja`,`cluster_caja`, `ph`, `sel_br`, `sel_cc`, `sel_ct`, `sel_lf`, `sel_ni`, `sel_ns`, `sel_ps`, `sel_sk`, `sel_sr`, `sel_tc`, `sel_tf`, `sel_yb`, `sel_sc`, `sel_dp`, `emp_br`, `emp_sr`, `emp_srf`, `emp_dp`,tot_fila, `id_eva`) 
        VALUES ('$name_peso1','$name_cluster1','$name_ph1','$name_brs1','$name_cc1','$name_ct1','$name_lf1','$name_ni1','$name_ns1','$name_ps1','$name_sk1','$name_sr1','$name_tc1','$name_tf1','$name_yb1','$name_sc1','$name_dp1','$name_bre1','$name_sre1','$name_srf1','$name_dpe1','$total_def1',$id_eva)");
    
        $sql2=$conexion->query("INSERT INTO `seleccion_empaque`(`peso_neto_caja`, `cluster_caja`, `ph`, `sel_br`, `sel_cc`, `sel_ct`, `sel_lf`, `sel_ni`, `sel_ns`, `sel_ps`, `sel_sk`, `sel_sr`, `sel_tc`, `sel_tf`, `sel_yb`, `sel_sc`, `sel_dp`, `emp_br`, `emp_sr`, `emp_srf`, `emp_dp`,tot_fila, `id_eva`) 
        VALUES ('$name_peso2','$name_cluster2','$name_ph2','$name_brs2','$name_cc2','$name_ct2','$name_lf2','$name_ni2','$name_ns2','$name_ps2','$name_sk2','$name_sr2','$name_tc2','$name_tf2','$name_yb2','$name_sc2','$name_dp2','$name_bre2','$name_sre2','$name_srf2','$name_dpe2','$total_def2',$id_eva)");
    
        $sql3=$conexion->query("INSERT INTO `seleccion_empaque`(`peso_neto_caja`, `cluster_caja`, `ph`, `sel_br`, `sel_cc`, `sel_ct`, `sel_lf`, `sel_ni`, `sel_ns`, `sel_ps`, `sel_sk`, `sel_sr`, `sel_tc`, `sel_tf`, `sel_yb`, `sel_sc`, `sel_dp`, `emp_br`, `emp_sr`, `emp_srf`, `emp_dp`,tot_fila, `id_eva`) 
        VALUES ('$name_peso3','$name_cluster3','$name_ph3','$name_brs3','$name_cc3','$name_ct3','$name_lf3','$name_ni3','$name_ns3','$name_ps3','$name_sk3','$name_sr3','$name_tc3','$name_tf3','$name_yb3','$name_sc3','$name_dp3','$name_bre3','$name_sre3','$name_srf3','$name_dpe3','$total_def3',$id_eva)");
    
        $sql4=$conexion->query("INSERT INTO datos_se(id, total_cluster, total_ph, total_defectos, promedio_tot, observacion, id_eva) 
        VALUES ($id,$total_cluster,$total_ph,$total_defectos,$promedio,'$observacion',$id_eva)");   
    }elseif (!empty($_POST["actualizar_eva"])) {
        $id_act1=($id_eva*3)-3+1;
        $id_act2=($id_eva*3)-3+2;
        $id_act3=($id_eva*3)-3+3;
        
        //echo $id_act1. "<br>".$id_act2. "<br>".$id_act3. "<br>";

        $sql5=$conexion->query("UPDATE seleccion_empaque SET peso_neto_caja='$name_peso1',cluster_caja='$name_cluster1',
        ph='$name_ph1',sel_br='$name_brs1',sel_cc='$name_cc1',sel_ct='$name_ct1',sel_lf='$name_lf1',sel_ni='$name_ni1',
        sel_ns='$name_ns1',sel_ps='$name_ps1',sel_sk='$name_sk1',sel_sr='$name_sr1',sel_tc='$name_tc1',sel_tf='$name_tf1',
        sel_yb='$name_yb1',sel_sc='$name_sc1',sel_dp='$name_dp1',emp_br='$name_bre1',emp_sr='$name_sre1',emp_srf='$name_srf1',emp_dp='$name_dpe1',tot_fila='$total_def1' WHERE id=$id_act1;");

        $sql6=$conexion->query("UPDATE seleccion_empaque SET peso_neto_caja='$name_peso2',cluster_caja='$name_cluster2',
        ph='$name_ph2',sel_br='$name_brs2',sel_cc='$name_cc2',sel_ct='$name_ct2',sel_lf='$name_lf2',sel_ni='$name_ni2',
        sel_ns='$name_ns2',sel_ps='$name_ps2',sel_sk='$name_sk2',sel_sr='$name_sr2',sel_tc='$name_tc2',sel_tf='$name_tf2',
        sel_yb='$name_yb2',sel_sc='$name_sc2',sel_dp='$name_dp2',emp_br='$name_bre2',emp_sr='$name_sre2',emp_srf='$name_srf2',emp_dp='$name_dpe2',tot_fila='$total_def2' WHERE id=$id_act2;");

        $sql7=$conexion->query("UPDATE seleccion_empaque SET peso_neto_caja='$name_peso3',cluster_caja='$name_cluster3',
        ph='$name_ph3',sel_br='$name_brs3',sel_cc='$name_cc3',sel_ct='$name_ct3',sel_lf='$name_lf3',sel_ni='$name_ni3',
        sel_ns='$name_ns3',sel_ps='$name_ps3',sel_sk='$name_sk3',sel_sr='$name_sr3',sel_tc='$name_tc3',sel_tf='$name_tf3',
        sel_yb='$name_yb3',sel_sc='$name_sc3',sel_dp='$name_dp3',emp_br='$name_bre3',emp_sr='$name_sre3',emp_srf='$name_srf3',emp_dp='$name_dpe3',tot_fila='$total_def3' WHERE id=$id_act3;");

        $sql8=$conexion->query("UPDATE datos_se SET total_cluster='$total_cluster',total_ph='$total_ph',total_defectos='$total_defectos',promedio_tot=$promedio,observacion='$observacion' WHERE id_eva=$id_eva");
    }

    if (!empty($_POST["guardar_eva"]) and $sql_eva==true and $sql_asepcias==true and $sql_gc_1==true and $sql_ld1==true and $sql1==true and $sql4==true) {
        echo "<div class='alert alert-success text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Datos guardados correctamente!</div>";
    } else if(!empty($_POST["actualizar_eva"])) {
        echo "<div class='alert alert-success text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Datos actualizados correctamente!</div>";
       // echo"<script> window.location.href = ' vista_listado_eva_g1.php'</script>";
    }else{
        echo "<div class='alert alert-danger text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Error al guardar los datos! </div>";
    }
}
?>