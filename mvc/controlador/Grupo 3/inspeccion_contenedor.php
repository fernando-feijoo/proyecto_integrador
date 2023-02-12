<?php
if (!empty($_POST["btn-guardar-inspeccion"]) || !empty($_POST["btn-actualizar"])) {
    // $id_inpeccion = $_SESSION['id_conExpo'];
?>
    <script>
        console.log("Ingreso al controlador")
    </script>
    <?php

    $id_contenedor_export = $_GET["numCont"];

    // Para visualizar en pantalla de trabajo, prueba.
    $conexion = conexionBd();

    $maxDato = (($id_contenedor_export * 11) - 11);
    for ($i = 1; $i < 12; $i++) {
        $id = $maxDato + $i;
        $id_verificar_lugar = $i;
        switch ($i) {
            case 1:
                $lugar_uno = isset($_POST["uno"]) ? $_POST["uno"] : 0;
                $lugar = $lugar_uno == 1 ? 1 : 0;
                break;
            case 2:
                $lugar_dos = isset($_POST["dos"]) ? $_POST["dos"] : 0;
                $lugar = $lugar_dos == 1 ? 1 : 0;
                break;
            case 3:
                $lugar_tres = isset($_POST["tres"]) ? $_POST["tres"] : 0;
                $lugar = $lugar_tres == 1 ? 1 : 0;
                break;
            case 4:
                $lugar_cuatro = isset($_POST["cuatro"]) ? $_POST["cuatro"] : 0;
                $lugar = $lugar_cuatro == 1 ? 1 : 0;
                break;
            case 5:
                $lugar_cinco = isset($_POST["cinco"]) ? $_POST["cinco"] : 0;
                $lugar = $lugar_cinco == 1 ? 1 : 0;
                break;
            case 6:
                $lugar_seis = isset($_POST["seis"]) ? $_POST["seis"] : 0;
                $lugar = $lugar_seis == 1 ? 1 : 0;
                break;
            case 7:
                $lugar_siete = isset($_POST["siete"]) ? $_POST["siete"] : 0;
                $lugar = $lugar_siete == 1 ? 1 : 0;
                break;
            case 8:
                $lugar_ocho = isset($_POST["ocho"]) ? $_POST["ocho"] : 0;
                $lugar = $lugar_ocho == 1 ? 1 : 0;
                break;
            case 9:
                $lugar_nueve = isset($_POST["nueve"]) ? $_POST["nueve"] : 0;
                $lugar = $lugar_nueve == 1 ? 1 : 0;
                break;
            case 10:
                $lugar_diez = isset($_POST["diez"]) ? $_POST["diez"] : 0;
                $lugar = $lugar_diez == 1 ? 1 : 0;
                break;
            case 11:
                $lugar_once = isset($_POST["once"]) ? $_POST["once"] : 0;
                $lugar = $lugar_once == 1 ? 1 : 0;
                break;
        }
        $sql_guardado_inspeccion = "INSERT INTO inspeccion_contenedor 
    (id, verificacion, id_cont_export, id_verificar_lugar) 
    VALUES
    ('$id','$lugar','$id_contenedor_export','$id_verificar_lugar');";
        $sql = $conexion->query($sql_guardado_inspeccion);
    ?>
        <script>
            console.log("Ingreso")
        </script>
<?php
    }
}
