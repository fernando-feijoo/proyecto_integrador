<?php
if (!empty($_POST["guardar_eva"]) || !empty($_POST["actualizar_eva"])) {

    if (!empty($_POST["guardar_eva"])) {
        $id_eva = $_SESSION["id_conteo"];
        unset($_SESSION["id_eva"]);
    } else if (!empty($_POST["actualizar_eva"])) {
        $id_eva = $_SESSION["id_eva"];
        unset($_SESSION["id_conteo"]);
    }

    $asepciasMax = ($id_eva * 22) - 22;

    for ($i = 1; $i < 23; $i++) {
        $id = $asepciasMax + $i;
        $num = $i;

        switch ($i) {
            case 1:
                if (isset($_POST['ep'])) {
                    $valor = $_POST['ep'];
                }else{
                    $valor ='';
                }
                break;

            case 2:
                if (isset($_POST['le'])) {
                    $valor = $_POST['le'];
                }else{
                    $valor ='';
                }
                break;

            case 3:
                if (isset($_POST['acal'])) {
                    $valor = $_POST['acal'];
                }else{
                    $valor ='';
                }
                break;

            case 4:
                if (isset($_POST['cpi'])) {
                    $valor = $_POST['cpi'];
                }else{
                    $valor ='';
                }
                break;

            case 5:
                if (isset($_POST['ucobp'])) {
                    $valor = $_POST['ucobp'];
                }else{
                    $valor ='';
                }
                break;

            case 6:
                if (isset($_POST['upc'])) {
                    $valor = $_POST['upc'];
                }else{
                    $valor ='';
                }
                break;

            case 7:
                if (isset($_POST['urpc'])) {
                    $valor = $_POST['urpc'];
                }else{
                    $valor ='';
                }
                break;

            case 8:
                if (isset($_POST['bcb'])) {
                    $valor = $_POST['bcb'];
                }else{
                    $valor ='';
                }
                break;

            case 9:
                if (isset($_POST['fcab'])) {
                    $valor = $_POST['fcab'];
                }else{
                    $valor ='';
                }
                break;

            case 10:
                if (isset($_POST['megld'])) {
                    $valor = $_POST['megld'];
                }else{
                    $valor ='';
                }
                break;

            case 11:
                if (isset($_POST['cemz'])) {
                    $valor = $_POST['cemz'];
                }else{
                    $valor ='';
                }
                break;

            case 12:
                if (isset($_POST['acbp'])) {
                    $valor = $_POST['acbp'];
                }else{
                    $valor ='';
                }
                break;

            case 13:
                if (isset($_POST['lh'])) {
                    $valor = $_POST['lh'];
                }else{
                    $valor ='';
                }
                break;

            case 14:
                if (isset($_POST['cbc'])) {
                    $valor = $_POST['cbc'];
                }else{
                    $valor ='';
                }
                break;

            case 15:
                if (isset($_POST['pep'])) {
                    $valor = $_POST['pep'];
                }else{
                    $valor ='';
                }
                break;

            case 16:
                if (isset($_POST['ra'])) {
                    $valor = $_POST['ra'];
                }else{
                    $valor ='';
                }
                break;

            case 17:
                if (isset($_POST['meoa'])) {
                    $valor = $_POST['meoa'];
                }else{
                    $valor ='';
                }
                break;

            case 18:
                if (isset($_POST['csp'])) {
                    $valor = $_POST['csp'];
                }else{
                    $valor ='';
                }
                break;

            case 19:
                if (isset($_POST['lmie'])) {
                    $valor = $_POST['lmie'];
                }else{
                    $valor ='';
                }
                break;

            case 20:
                if (isset($_POST['buh'])) {
                    $valor = $_POST['buh'];
                }else{
                    $valor ='';
                }
                break;

            case 21:
                if (isset($_POST['ctlm'])) {
                    $valor = $_POST['ctlm'];
                }else{
                    $valor ='';
                }
                break;

            case 22:
                if (isset($_POST['lrcbp'])) {
                    $valor = $_POST['lrcbp'];
                }else{
                    $valor ='';
                }
                break;
        }

        $conexion = conexionBd();

        if (!empty($_POST["guardar_eva"])) {
            $sql_asepcias = $conexion->query("INSERT INTO asepcias(id, tipo, id_eva, id_datos_asepcias) VALUES ($id,'$valor',$id_eva,$num);");
        }elseif (!empty($_POST["actualizar_eva"])) {
            //echo $id_eva. "<br>";
            //echo $valor. "<br>";
            //echo $num. "<br>";
            
            $sql_asepcias = $conexion->query("UPDATE asepcias SET tipo='$valor' WHERE id=$id;");
        }
    }

     if (!empty($_POST["guardar_eva"]) and $sql_eva==true and $sql_asepcias==true and $sql_gc_1==true) {
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