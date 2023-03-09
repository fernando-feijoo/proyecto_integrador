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

    //Primera tabla:
    //Largo dedo 6:

    $ld_6_0 = ($_POST["cm-6-0"] == 0) ? " " : $_POST["cm-6-0"];
    $ld_6_2 = ($_POST["cm-6-2"] == 0) ? " " : $_POST["cm-6-2"];
    $ld_6_4 = ($_POST["cm-6-4"] == 0) ? " " : $_POST["cm-6-4"];
    $ld_6_6 = ($_POST["cm-6-6"] == 0) ? " " : $_POST["cm-6-6"];
    $ld_6_8 = ($_POST["cm-6-8"] == 0) ? " " : $_POST["cm-6-8"];

    //Largo dedo 7:

    $ld_7_0 = ($_POST["cm-7-0"] == 0) ? " " : $_POST["cm-7-0"];
    $ld_7_2 = ($_POST["cm-7-2"] == 0) ? " " : $_POST["cm-7-2"];
    $ld_7_4 = ($_POST["cm-7-4"] == 0) ? " " : $_POST["cm-7-4"];
    $ld_7_6 = ($_POST["cm-7-6"] == 0) ? " " : $_POST["cm-7-6"];
    $ld_7_8 = ($_POST["cm-7-8"] == 0) ? " " : $_POST["cm-7-8"];

    //Largo dedo 8:

    $ld_8_0 = ($_POST["cm-8-0"] == 0) ? " " : $_POST["cm-8-0"];
    $ld_8_2 = ($_POST["cm-8-2"] == 0) ? " " : $_POST["cm-8-2"];
    $ld_8_4 = ($_POST["cm-8-4"] == 0) ? " " : $_POST["cm-8-4"];
    $ld_8_6 = ($_POST["cm-8-6"] == 0) ? " " : $_POST["cm-8-6"];
    $ld_8_8 = ($_POST["cm-8-8"] == 0) ? " " : $_POST["cm-8-8"];

    //Largo dedo 9:

    $ld_9_0 = ($_POST["cm-9-0"] == 0) ? " " : $_POST["cm-9-0"];
    $ld_9_2 = ($_POST["cm-9-2"] == 0) ? " " : $_POST["cm-9-2"];
    $ld_9_4 = ($_POST["cm-9-4"] == 0) ? " " : $_POST["cm-9-4"];
    $ld_9_6 = ($_POST["cm-9-6"] == 0) ? " " : $_POST["cm-9-6"];
    $ld_9_8 = ($_POST["cm-9-8"] == 0) ? " " : $_POST["cm-9-8"];

    //Largo dedo 10:

    $ld_10_0 = ($_POST["cm-10-0"] == 0) ? " " : $_POST["cm-10-0"];
    $ld_10_2 = ($_POST["cm-10-2"] == 0) ? " " : $_POST["cm-10-2"];
    $ld_10_4 = ($_POST["cm-10-4"] == 0) ? " " : $_POST["cm-10-4"];
    $ld_10_6 = ($_POST["cm-10-6"] == 0) ? " " : $_POST["cm-10-6"];
    $ld_10_8 = ($_POST["cm-10-8"] == 0) ? " " : $_POST["cm-10-8"];

    $total_ld_sup=$_POST["total-sup"];
    //Largo dedo 11:

    $ld_11_0 = ($_POST["cm-11-0"] == 0) ? " " : $_POST["cm-11-0"];
    $ld_11_2 = ($_POST["cm-11-2"] == 0) ? " " : $_POST["cm-11-2"];
    $ld_11_4 = ($_POST["cm-11-4"] == 0) ? " " : $_POST["cm-11-4"];
    $ld_11_6 = ($_POST["cm-11-6"] == 0) ? " " : $_POST["cm-11-6"];
    $ld_11_8 = ($_POST["cm-11-8"] == 0) ? " " : $_POST["cm-11-8"];

    //Totales y promedios:

    //Segunda Tabla:

    //Largo dedo 6:

   //if (isset($ld_6_0_inf)) {
        if ($_POST["cm-6-0-inf"] == " ") {
            $ld_6_0_inf = " ";
        }else {
            $ld_6_0_inf = ($_POST["cm-6-0-inf"] == 0) ? " " : round($_POST["cm-6-0-inf"],1);
        }

        if ($_POST["cm-6-2-inf"] ==" ") {
            $ld_6_2_inf =" ";    
        }else{
            $ld_6_2_inf = ($_POST["cm-6-2-inf"] == 0) ? " " : round($_POST["cm-6-2-inf"],1);
        }
        
        if ($_POST["cm-6-4-inf"] == " ") {
            $ld_6_4_inf = " ";
        }else {
            $ld_6_4_inf = ($_POST["cm-6-4-inf"] == 0) ? " " : round($_POST["cm-6-4-inf"],1);
        }
        
        if ($_POST["cm-6-6-inf"] ==" ") {
            $ld_6_6_inf = " ";
        }else {
            $ld_6_6_inf = ($_POST["cm-6-6-inf"] == 0) ? " " : round($_POST["cm-6-6-inf"],1);            
        }

        if ($_POST["cm-6-8-inf"] ==" ") {
            $ld_6_8_inf = " ";
        }else{
            $ld_6_8_inf = ($_POST["cm-6-8-inf"] == 0) ? " " : round($_POST["cm-6-8-inf"],1);
        }
        
        //Largo dedo 7:
        if ($_POST["cm-7-0-inf"] == " ") {
            $ld_7_0_inf=" ";    
        }else{
            $ld_7_0_inf = ($_POST["cm-7-0-inf"] == 0) ? " " : round($_POST["cm-7-0-inf"],1);
        }
        
        if ($_POST["cm-7-2-inf"] == " ") {
            $ld_7_2_inf = " ";
        }else {
            $ld_7_2_inf = ($_POST["cm-7-2-inf"] == 0) ? " " : round($_POST["cm-7-2-inf"],1);            
        }

        if ($_POST["cm-7-4-inf"] == " ") {
            $ld_7_4_inf = " ";    
        }else {
            $ld_7_4_inf = ($_POST["cm-7-4-inf"] == 0) ? " " : round($_POST["cm-7-4-inf"],1);
        }

        if ($_POST["cm-7-6-inf"] == " ") {
            $ld_7_6_inf = " ";    
        }else {
            $ld_7_6_inf = ($_POST["cm-7-6-inf"] == 0) ? " " : round($_POST["cm-7-6-inf"],1);

        }
       
        if ($_POST["cm-7-8-inf"] == " ") {
            $ld_7_8_inf = " ";    
        }else {
            $ld_7_8_inf = ($_POST["cm-7-8-inf"] == 0) ? " " : round($_POST["cm-7-8-inf"],1);
        }

        //Largo dedo 8:
        if ($_POST["cm-8-0-inf"] == " ") {
            $ld_8_0_inf = " ";
        }else{
            $ld_8_0_inf = ($_POST["cm-8-0-inf"] == 0) ? " " : round($_POST["cm-8-0-inf"],1);
        }

        if ($_POST["cm-8-2-inf"] == " ") {
            $ld_8_2_inf = " ";
        }else{
            $ld_8_2_inf = ($_POST["cm-8-2-inf"] == 0) ? " " : round($_POST["cm-8-2-inf"],1);
        }
        
        if ($_POST["cm-8-4-inf"] == " ") {
            $ld_8_4_inf = " ";
        }else {
            $ld_8_4_inf = ($_POST["cm-8-4-inf"] == 0) ? " " : round($_POST["cm-8-4-inf"],1);
        }

        if ($_POST["cm-8-6-inf"] == " ") {
            $ld_8_6_inf = " ";
        }else {
            $ld_8_6_inf = ($_POST["cm-8-6-inf"] == 0) ? " " : round($_POST["cm-8-6-inf"],1);    
        }
        
        if ($_POST["cm-8-8-inf"] == " ") {
            $ld_8_8_inf = " ";
        }else{
            $ld_8_8_inf = ($_POST["cm-8-8-inf"] == 0) ? " " : round($_POST["cm-8-8-inf"],1);
        }

        //Largo dedo 9:
        if ($_POST["cm-9-0-inf"] == " ") {
            $ld_9_0_inf = " ";    
        }else {
            $ld_9_0_inf = ($_POST["cm-9-0-inf"] == 0) ? " " : round($_POST["cm-9-0-inf"],1);    
        }
        
        if ($_POST["cm-9-2-inf"] == " ") {
            $ld_9_2_inf = " ";    
        }else {
            $ld_9_2_inf = ($_POST["cm-9-2-inf"] == 0) ? " " : round($_POST["cm-9-2-inf"],1);    
        }

        if ($_POST["cm-9-4-inf"] == " ") {
            $ld_9_4_inf = " ";
        }else {
            $ld_9_4_inf = ($_POST["cm-9-4-inf"] == 0) ? " " : round($_POST["cm-9-4-inf"],1);            
        }
        
        if ($_POST["cm-9-6-inf"] == " ") {
            $ld_9_6_inf = " ";    
        }else {
            $ld_9_6_inf = ($_POST["cm-9-6-inf"] == 0) ? " " : round($_POST["cm-9-6-inf"],1);            
        }

        if ($_POST["cm-9-8-inf"] == " ") {
            $ld_9_8_inf = " ";
        }else {
            $ld_9_8_inf = ($_POST["cm-9-8-inf"] == 0) ? " " : round($_POST["cm-9-8-inf"],1);
        }

        //Largo dedo 10:
        if ($_POST["cm-10-0-inf"] == " ") {
            $ld_10_0_inf = " ";
        }else {
            $ld_10_0_inf = ($_POST["cm-10-0-inf"] == 0) ? " " : round($_POST["cm-10-0-inf"],1);    
        }
        
        if ($_POST["cm-10-2-inf"] == " ") {
            $ld_10_2_inf = " ";
        }else {
            $ld_10_2_inf = ($_POST["cm-10-2-inf"] == 0) ? " " : round($_POST["cm-10-2-inf"],1);    
        }
        
        if ($_POST["cm-10-4-inf"] == " ") {
            $ld_10_4_inf = " ";    
        }else{
            $ld_10_4_inf = ($_POST["cm-10-4-inf"] == 0) ? " " : round($_POST["cm-10-4-inf"],1);
        }

        if ($_POST["cm-10-6-inf"] == " ") {
            $ld_10_6_inf = " ";    
        }else {
            $ld_10_6_inf = ($_POST["cm-10-6-inf"] == 0) ? " " : round($_POST["cm-10-6-inf"],1);
        }

        if ($_POST["cm-10-8-inf"] ==  " ") {
            $ld_10_8_inf = " ";    
        }else {
            $ld_10_8_inf = ($_POST["cm-10-8-inf"] == 0) ? " " : round($_POST["cm-10-8-inf"],1);
        }

        //Largo dedo 11:
        if ($_POST["cm-11-0-inf"] == " ") {
            $ld_11_0_inf = " ";    
        }else {
            $ld_11_0_inf = ($_POST["cm-11-0-inf"] == 0) ? " " : round($_POST["cm-11-0-inf"],1);    
        }
        
        if ($_POST["cm-11-2-inf"] == " ") {
            $ld_11_2_inf = " ";
        }else {
            $ld_11_2_inf = ($_POST["cm-11-2-inf"] == 0) ? " " : round($_POST["cm-11-2-inf"],1);   
        }

        if ($_POST["cm-11-4-inf"] == " ") {
            $ld_11_4_inf = " ";    
        }else{
            $ld_11_4_inf = ($_POST["cm-11-4-inf"] == 0) ? " " : round($_POST["cm-11-4-inf"],1);
        }
        
        if ($_POST["cm-11-6-inf"] == " ") {
            $ld_11_6_inf = " ";
        }else {
            $ld_11_6_inf = ($_POST["cm-11-6-inf"] == 0) ? " " : round($_POST["cm-11-6-inf"],1);
        }

        if ($_POST["cm-11-8-inf"] == " ") {
            $ld_11_8_inf = " ";
        }else {
            $ld_11_8_inf = ($_POST["cm-11-8-inf"] == 0) ? " " : round($_POST["cm-11-8-inf"],1);
        }

        //Promedio y total:
        $ld_total_inf = ($_POST["total-inf"] == 0) ? " " : round($_POST["total-inf"],2);
        $ld_promedio = ($_POST["promedio-ld"] == 0) ? " " : round($_POST["promedio-ld"],2);

//         //Guardar superior:

         $conexion = conexionBd();
        
         $sql_ld1 = $conexion->query("SELECT insertarLargoDedo($id,'$ld_6_0','$ld_6_2','$ld_6_4','$ld_6_6','$ld_6_8','$ld_7_0','$ld_7_2',
         '$ld_7_4','$ld_7_6','$ld_7_8','$ld_8_0','$ld_8_2','$ld_8_4','$ld_8_6','$ld_8_8','$ld_9_0','$ld_9_2','$ld_9_4','$ld_9_6','$ld_9_8',
         '$ld_10_0','$ld_10_2','$ld_10_4','$ld_10_6','$ld_10_8','$ld_11_0','$ld_11_2','$ld_11_4','$ld_11_6','$ld_11_8',$total_ld_sup,$id_eva);");


         $sql_ld2 = $conexion->query("SELECT insertarLargoDedoOp($id,'$ld_6_0_inf','$ld_6_2_inf','$ld_6_4_inf','$ld_6_6_inf','$ld_6_8_inf',
         '$ld_7_0_inf','$ld_7_2_inf','$ld_7_4_inf','$ld_7_6_inf','$ld_7_8_inf','$ld_8_0_inf','$ld_8_2_inf','$ld_8_4_inf','$ld_8_6_inf',
         '$ld_8_8_inf','$ld_9_0_inf','$ld_9_2_inf','$ld_9_4_inf','$ld_9_6_inf','$ld_9_8_inf','$ld_10_0_inf','$ld_10_2_inf','$ld_10_4_inf',
         '$ld_10_6_inf','$ld_10_8_inf','$ld_11_0_inf','$ld_11_2_inf','$ld_11_4_inf','$ld_11_6_inf','$ld_11_8_inf',$ld_total_inf,$ld_promedio,$id_eva);");

}

?>