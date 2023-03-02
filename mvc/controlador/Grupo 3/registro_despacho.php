<?php
if (!empty($_POST["btn-guardar-general"]) || !empty($_POST["btn-actualizar-general"])) {
?>
  <script>
    console.log("Ingreso al controlador DESPACHO")
  </script>
  <?php

  $filtro_rb = $_POST["inlineRadioOptions_fg3"];
  $termografo_rb = $_POST["inlineRadioOptions_tg3"];
  $termografo_num = strtoupper($_POST["termografo_num"]);
  $sello_adhesivo = strtoupper($_POST["sello_adhesivo"]);
  $sello_verificador = strtoupper($_POST["sello_vericador"]);
  $sello_exp_cand = strtoupper($_POST["sello_expotador_candado"]);
  $fecha_hora_salida = date("Y-m-d H:i:s", strtotime($_POST["fecha_hora_salida"]));
  $sello_exp_cable = strtoupper($_POST["sello_cable"]);
  $compania_transporte = mb_strtoupper($_POST["trasnportista"], 'UTF-8');
  $sello_nave = strtoupper($_POST["sello_nave"]);
  $vapor = mb_strtoupper($_POST["vapor"], 'UTF-8');
  $destino = mb_strtoupper($_POST["destino"], 'UTF-8');
  // $paletizadores = $_POST["paletizador1"].';'.$_POST["paletizador2"].';'.$_POST["paletizador3"].';'.$_POST["paletizador4"];
  // Solo para concatenar plaetizadores en caso de no ser igual a Seleccione.
  $paletizadores = '';
  $paletizadoresArray = array($_POST["paletizador1"], $_POST["paletizador2"], $_POST["paletizador3"], $_POST["paletizador4"]);
  foreach ($paletizadoresArray as $paletizador) {
    if ($paletizador != "Seleccione") {
      $paletizadores .= $paletizador . ';';
    }
  }
  // Esta parte borra el ultimo ; del arreglo.
  $paletizadores = rtrim($paletizadores, ';');
  // FIN DE PALETIZADORES.
  $total_viajar = $_POST["total_viajar"];
  $cajas = $_POST["cajas"];
  $cantidad_pallet = $_POST["cantidad_pallet"];
  $observaciones = mb_strtoupper($_POST["observacion_despacho"], 'UTF-8');

  // Validar cuando sea un actualizar e ingreso por primera vez
  if (!empty($_SESSION["id_contExpo"])) {
    $id = $_SESSION["id_contExpo"];
  ?>
    <script>
      console.log("Ingreso a controlador despacho - id_contExpo")
    </script>
  <?php
  } else if (!empty($_SESSION["numCont"])) {
    $id = $_SESSION["numCont"];
  ?>
    <script>
      console.log("Ingreso a controlador despacho - numCont")
    </script>
  <?php
  }

  $id_cont_export = $id;

  guardar_datos_despacho($id,$filtro_rb,$termografo_rb,$termografo_num,$sello_adhesivo,$sello_verificador,$sello_exp_cand,$fecha_hora_salida,$sello_exp_cable,$compania_transporte,$sello_nave,$vapor,$destino,$paletizadores,$total_viajar,$cajas,$cantidad_pallet,$observaciones,$id_cont_export);
}
