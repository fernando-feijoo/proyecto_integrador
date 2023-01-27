<?php
    
    if (!empty($_POST["btn-guardar"])) {
        // echo "Boton presionado <br>";

        $fecha_insp = $_POST["fecha_inspeccion_gg3"];
        $semana = $_POST["semana_gg3"];
        $fecha_hora_salida = $_POST["fecha_hora_salida_gg3"];
        $hora_llegada = $_POST["hora_llegada_gg3"];
        $cupo = $_POST["cupo_gg3"];
        $contenedor = $_POST["contenedor_gg3"];
        $nombre_acopio = $_POST["nombre_copio_gg3"];
        $candados_llegada = $_POST["candados_llegada_gg3"];
        $tipo_contenedor_eleccion = $_POST["inlineRadioOptions_gg3"];
        $id_tipo_caja = $_POST["tipo_caja_gg3"];
        $id_vehiculo = $_POST["placa_gg3"];
        $id_chofer = $_POST["chofer_gg3"];

        // Para visualizar en pantalla de trabajo, prueba.
        // echo $fecha_insp. ' <br> ' .$semana. ' <br> ' .$fecha_hora_salida. ' <br> ' .$hora_llegada. ' <br> ' .$cupo. ' <br> ' .$contenedor. ' <br> ' .$nombre_acopio. ' <br> ' .$candados_llegada. ' <br> ' .$tipo_contenedor_eleccion. ' <br> ' .$id_tipo_caja. ' <br> ' .$id_vehiculo. ' <br> ' .$id_chofer;
    }
