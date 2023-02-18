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
                }
                break;

            case 2:
                if (isset($_POST['le'])) {
                    $valor = $_POST['le'];
                }
                break;

            case 3:
                if (isset($_POST['acal'])) {
                    $valor = $_POST['acal'];
                }
                break;

            case 4:
                if (isset($_POST['cpi'])) {
                    $valor = $_POST['cpi'];
                }
                break;

            case 5:
                if (isset($_POST['ucobp'])) {
                    $valor = $_POST['ucobp'];
                }
                break;

            case 6:
                if (isset($_POST['upc'])) {
                    $valor = $_POST['upc'];
                }
                break;

            case 7:
                if (isset($_POST['urpc'])) {
                    $valor = $_POST['urpc'];
                }
                break;

            case 8:
                if (isset($_POST['bcb'])) {
                    $valor = $_POST['bcb'];
                }
                break;

            case 9:
                if (isset($_POST['fcab'])) {
                    $valor = $_POST['fcab'];
                }
                break;

            case 10:
                if (isset($_POST['megld'])) {
                    $valor = $_POST['megld'];
                }
                break;

            case 11:
                if (isset($_POST['cemz'])) {
                    $valor = $_POST['cemz'];
                }
                break;

            case 12:
                if (isset($_POST['acbp'])) {
                    $valor = $_POST['acbp'];
                }
                break;

            case 13:
                if (isset($_POST['lh'])) {
                    $valor = $_POST['lh'];
                }
                break;

            case 14:
                if (isset($_POST['cbc'])) {
                    $valor = $_POST['cbc'];
                }
                break;

            case 15:
                if (isset($_POST['pep'])) {
                    $valor = $_POST['pep'];
                }
                break;

            case 16:
                if (isset($_POST['ra'])) {
                    $valor = $_POST['ra'];
                }
                break;

            case 17:
                if (isset($_POST['meoa'])) {
                    $valor = $_POST['meoa'];
                }
                break;

            case 18:
                if (isset($_POST['csp'])) {
                    $valor = $_POST['csp'];
                }
                break;

            case 19:
                if (isset($_POST['lmie'])) {
                    $valor = $_POST['lmie'];
                }
                break;

            case 20:
                if (isset($_POST['buh'])) {
                    $valor = $_POST['buh'];
                }
                break;

            case 21:
                if (isset($_POST['ctlm'])) {
                    $valor = $_POST['ctlm'];
                }
                break;

            case 22:
                if (isset($_POST['lrcbp'])) {
                    $valor = $_POST['lrcbp'];
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

     if ($sql_asepcias==true and $sql_eva==true) {
        echo "<div class='alert alert-success text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
            ¡Datos guardados correctamente!</div>";
        } else {
            echo "<div class='alert alert-danger text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
            ¡Error al guardar los datos! </div>";
        }

}

?>