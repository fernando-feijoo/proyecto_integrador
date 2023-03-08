<?php

if (!empty($_POST["guardar_se"])) {

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

    $conexion = conexionBd();

    if (!$conexion) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    $sql1 = "INSERT INTO `seleccion_empaque_prueba`(`id`,`peso_neto_caja`,`cluster_caja`, `ph`, `sel_br`, `sel_cc`, `sel_ct`, `sel_lf`, `sel_ni`, `sel_ns`, `sel_ps`, `sel_sk`, `sel_sr`, `sel_tc`, `sel_tf`, `sel_yb`, `sel_sc`, `sel_dp`, `emp_br`, `emp_sr`, `emp_srf`, `emp_dp`, `id_eva`) 
    VALUES (20,'$name_peso1','$name_cluster1','$name_ph1','$name_brs1','$name_cc1','$name_ct1','$name_lf1','$name_ni1','$name_ns1','$name_ps1','$name_sk1','$name_sr1','$name_tc1','$name_tf1','$name_yb1','$name_sc1','$name_dp1','$name_bre1','$name_sre1','$name_srf1','$name_dpe1',20)";

    $sql2 = "INSERT INTO `seleccion_empaque_prueba`(`id`,`peso_neto_caja`, `cluster_caja`, `ph`, `sel_br`, `sel_cc`, `sel_ct`, `sel_lf`, `sel_ni`, `sel_ns`, `sel_ps`, `sel_sk`, `sel_sr`, `sel_tc`, `sel_tf`, `sel_yb`, `sel_sc`, `sel_dp`, `emp_br`, `emp_sr`, `emp_srf`, `emp_dp`, `id_eva`) 
    VALUES (20,'$name_peso2','$name_cluster2','$name_ph2','$name_brs2','$name_cc2','$name_ct2','$name_lf2','$name_ni2','$name_ns2','$name_ps2','$name_sk2','$name_sr2','$name_tc2','$name_tf2','$name_yb2','$name_sc2','$name_dp2','$name_bre2','$name_sre2','$name_srf2','$name_dpe2',20)";

    $sql3 = "INSERT INTO `seleccion_empaque_prueba`(`id`,`peso_neto_caja`, `cluster_caja`, `ph`, `sel_br`, `sel_cc`, `sel_ct`, `sel_lf`, `sel_ni`, `sel_ns`, `sel_ps`, `sel_sk`, `sel_sr`, `sel_tc`, `sel_tf`, `sel_yb`, `sel_sc`, `sel_dp`, `emp_br`, `emp_sr`, `emp_srf`, `emp_dp`, `id_eva`) 
    VALUES (20,'$name_peso3','$name_cluster3','$name_ph3','$name_brs3','$name_cc3','$name_ct3','$name_lf3','$name_ni3','$name_ns3','$name_ps3','$name_sk3','$name_sr3','$name_tc3','$name_tf3','$name_yb3','$name_sc3','$name_dp3','$name_bre3','$name_sre3','$name_srf3','$name_dpe3',20)";

    if ($conexion->query($sql1) === TRUE) {

        if($conexion->query($sql2) === TRUE){
            
            if($conexion->query($sql3) === TRUE){
                echo "Exito";
            }else{
                echo "Error al insertar: " . $conn->error;
            }
        }else{
            echo "Error al insertar: " . $conn->error;
        }
    } else {
        echo "Error al insertar: " . $conn->error;
    }

}
?>