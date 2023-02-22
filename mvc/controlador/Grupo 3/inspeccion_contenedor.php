<?php
if (!empty($_POST["btn-guardar-general"]) || !empty($_POST["btn-actualizar-general"])) {
?>
    <script>
        console.log("Ingreso al controlador INSPECCION")
    </script>
    <?php

    // Se coloca esta validacion para saber si es un insert o un update, ya que si es 
    // guardado por primera vez seria con numCont, pero caso contrario seria con id_contExpo para actualizar.
    if (!empty($_SESSION["id_contExpo"])) {
        $id_contenedor_export = $_SESSION["id_contExpo"];
    ?>
        <script>
            console.log("Ingreso a controlador inspeccion - id_contExpo")
        </script>
    <?php
    } else if (!empty($_SESSION["numCont"])) {
        $id_contenedor_export = $_SESSION["numCont"];
    ?>
        <script>
            console.log("Ingreso a controlador inspeccion - numCont")
        </script>
    <?php
    }

    $maxDato = (($id_contenedor_export * 11) - 11);
    for ($i = 1; $i < 12; $i++) {
        $id = $maxDato + $i;
        $id_verificar_lugar = $i;
        switch ($i) {
            case 1:
                $verificacion_uno = isset($_POST["uno"]) ? $_POST["uno"] : 0;
                $verificacion = $verificacion_uno == 1 ? 1 : 0;
                break;
            case 2:
                $verificacion_dos = isset($_POST["dos"]) ? $_POST["dos"] : 0;
                $verificacion = $verificacion_dos == 1 ? 1 : 0;
                break;
            case 3:
                $verificacion_tres = isset($_POST["tres"]) ? $_POST["tres"] : 0;
                $verificacion = $verificacion_tres == 1 ? 1 : 0;
                break;
            case 4:
                $verificacion_cuatro = isset($_POST["cuatro"]) ? $_POST["cuatro"] : 0;
                $verificacion = $verificacion_cuatro == 1 ? 1 : 0;
                break;
            case 5:
                $verificacion_cinco = isset($_POST["cinco"]) ? $_POST["cinco"] : 0;
                $verificacion = $verificacion_cinco == 1 ? 1 : 0;
                break;
            case 6:
                $verificacion_seis = isset($_POST["seis"]) ? $_POST["seis"] : 0;
                $verificacion = $verificacion_seis == 1 ? 1 : 0;
                break;
            case 7:
                $verificacion_siete = isset($_POST["siete"]) ? $_POST["siete"] : 0;
                $verificacion = $verificacion_siete == 1 ? 1 : 0;
                break;
            case 8:
                $verificacion_ocho = isset($_POST["ocho"]) ? $_POST["ocho"] : 0;
                $verificacion = $verificacion_ocho == 1 ? 1 : 0;
                break;
            case 9:
                $verificacion_nueve = isset($_POST["nueve"]) ? $_POST["nueve"] : 0;
                $verificacion = $verificacion_nueve == 1 ? 1 : 0;
                break;
            case 10:
                $verificacion_diez = isset($_POST["diez"]) ? $_POST["diez"] : 0;
                $verificacion = $verificacion_diez == 1 ? 1 : 0;
                break;
            case 11:
                $verificacion_once = isset($_POST["once"]) ? $_POST["once"] : 0;
                $verificacion = $verificacion_once == 1 ? 1 : 0;
                break;
        }
        guardar_datos_inspeccion($id, $verificacion, $id_contenedor_export, $id_verificar_lugar);
    }
    if (!empty($_POST["obs_inspeccion"])) {
        $obs_inspeccion = strtoupper($_POST["obs_inspeccion"]);
        if (!empty($_SESSION["id_contExpo"])) {
            $id = $_SESSION["id_contExpo"];
        } else if (!empty($_SESSION["numCont"])) {
            $id = $_SESSION["numCont"];
        }
        insertar_comentario_contenedor($obs_inspeccion, $id);
    }
}
