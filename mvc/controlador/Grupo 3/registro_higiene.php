<?php
if (!empty($_POST["btn-guardar-general"]) || !empty($_POST["btn-actualizar-general"])) {
?>
    <script>
        console.log("Ingreso al controlador HIGIENE")
    </script>
    <?php
    // Se coloca esta validacion para saber si es un insert o un update, ya que si es 
    // guardado por primera vez seria con numCont, pero caso contrario seria con id_contExpo para actualizar.
    if (!empty($_SESSION["id_contExpo"])) {
        $id_contenedor_export = $_SESSION["id_contExpo"];
    ?>
        <script>
            console.log("Ingreso a controlador higiene - id_contExpo")
        </script>
    <?php
    } else if (!empty($_SESSION["numCont"])) {
        $id_contenedor_export = $_SESSION["numCont"];
    ?>
        <script>
            console.log("Ingreso a controlador higiene - numCont")
        </script>
    <?php
    }

    $maxDato = (($id_contenedor_export * 8) - 8);
    for ($i = 1; $i < 9; $i++) {
        $id = $maxDato + $i;
        $id_verificar_lugar = $i;
        switch ($i) {
            case 1:
                $opcion_uno = isset($_POST["inlineRadioOptions_hc1"]) ? $_POST["inlineRadioOptions_hc1"] : 0;
                $opcion = $opcion_uno == 1 ? 1 : 0;
                break;
            case 2:
                $opcion_dos = isset($_POST["inlineRadioOptions_hc2"]) ? $_POST["inlineRadioOptions_hc2"] : 0;
                $opcion = $opcion_dos == 1 ? 1 : 0;
                break;
            case 3:
                $opcion_tres = isset($_POST["inlineRadioOptions_hc3"]) ? $_POST["inlineRadioOptions_hc3"] : 0;
                $opcion = $opcion_tres == 1 ? 1 : 0;
                break;
            case 4:
                $opcion_cuatro = isset($_POST["inlineRadioOptions_hc4"]) ? $_POST["inlineRadioOptions_hc4"] : 0;
                $opcion = $opcion_cuatro == 1 ? 1 : 0;
                break;
            case 5:
                $opcion_cinco = isset($_POST["inlineRadioOptions_hc5"]) ? $_POST["inlineRadioOptions_hc5"] : 0;
                $opcion = $opcion_cinco == 1 ? 1 : 0;
                break;
            case 6:
                $opcion_seis = isset($_POST["inlineRadioOptions_hc6"]) ? $_POST["inlineRadioOptions_hc6"] : 0;
                $opcion = $opcion_seis == 1 ? 1 : 0;
                break;
            case 7:
                $opcion_siete = isset($_POST["inlineRadioOptions_hc7"]) ? $_POST["inlineRadioOptions_hc7"] : 0;
                $opcion = $opcion_siete == 1 ? 1 : 0;
                break;
            case 8:
                $opcion_ocho = isset($_POST["inlineRadioOptions_hc8"]) ? $_POST["inlineRadioOptions_hc8"] : 0;
                $opcion = $opcion_ocho == 1 ? 1 : 0;
                break;
        }
        guardar_datos_higiene($id, $opcion, $id_contenedor_export, $id_verificar_lugar);
    }
    if (!empty($_POST["obs_higiene"])) {
        $obs_higiene = strtoupper($_POST["obs_higiene"]);
        if (!empty($_SESSION["id_contExpo"])) {
            $id = $_SESSION["id_contExpo"];
        } else if (!empty($_SESSION["numCont"])) {
            $id = $_SESSION["numCont"];
        }
        insertar_comentario_higiene($obs_higiene, $id);
    }
}
