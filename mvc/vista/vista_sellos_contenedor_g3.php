<?php
if (($valiacion = carga_datos_sellos()) != false) {
  $sql_sellos = carga_datos_sellos();
  while ($carga_datos_sellos = $sql_sellos->fetch_object()) {
?>
    <?php
    // Este algoritmo traer el campo 1;2;1;2 y lo divide en un array para luego poderlo mostrar.
    $sellos_internos = $carga_datos_sellos->sellos_internos;
    $array_sellos_internos = explode(";", $sellos_internos);
    $array_sellos_internos = array_pad($array_sellos_internos, 3, '');
    ?>
    <div class="containe mt-5">
      <div class="d-flex justify-content-center">

        <div class="col form-check form-check-inline ms-5">
          <div class="fs-5 fw-semibold text-start">Sellos Internos:</div>
          <hr>
          <div class="d-flex flex-column">
            <input class="text-uppercase mb-2 " type="text" placeholder="sello interno" name='sello_interno1' style="width: 200px; height: 40px;" value=<?= $array_sellos_internos[0] ?>>

            <input class="text-uppercase mb-2 " type="text" placeholder="sello interno" name='sello_interno2' style="width: 200px; height: 40px;" value=<?= $array_sellos_internos[1] ?>>

            <input class="text-uppercase " type="text" placeholder="sello interno" name='sello_interno3' style="width: 200px; height: 40px;" value=<?= $array_sellos_internos[2] ?>>
          </div>
        </div>

        <?php
        // Este algoritmo traer el campo 1;2;1;2 y lo divide en un array para luego poderlo mostrar.
        $sellos_externos = $carga_datos_sellos->sellos_externos;
        $array_sellos_externos = explode(";", $sellos_externos);
        $array_sellos_externos = array_pad($array_sellos_externos, 9, '');
        ?>

        <div class="col-7 accordion-collapseform-check form-check-inline text-center me-5">
          <div class="fs-5 fw-semibold text-start">Sellos Externos:</div>
          <hr>
          <div class="d-flex flex-row">
            <div class="p-2 ">
              <input class="text-uppercase mb-2 " type="text" placeholder="sello externo" name='sello_externo1' style="width: 200px; height: 40px;" value=<?= $array_sellos_externos[0] ?>>

              <input class="text-uppercase mb-2 " type="text" placeholder="sello externo" name='sello_externo2' style="width: 200px; height: 40px;" value=<?= $array_sellos_externos[1] ?>>

              <input class="text-uppercase " type="text" placeholder="sello externo" name='sello_externo3' style="width: 200px; height: 40px;" value=<?= $array_sellos_externos[2] ?>>
            </div>
            <div class="p-2 ">
              <input class="text-uppercase mb-2 " type="text" placeholder="sello externo" name='sello_externo4' style="width: 200px; height: 40px;" value=<?= $array_sellos_externos[3] ?>>

              <input class="text-uppercase mb-2 " type="text" placeholder="sello externo" name='sello_externo5' style="width: 200px; height: 40px;" value=<?= $array_sellos_externos[4] ?>>

              <input class="text-uppercase " type="text" placeholder="sello externo" name='sello_externo6' style="width: 200px; height: 40px;" value=<?= $array_sellos_externos[5] ?>>
            </div>
            <div class="p-2 ">
              <input class="text-uppercase mb-2 " type="text" placeholder="sello externo" name='sello_externo7' style="width: 200px; height: 40px;" value=<?= $array_sellos_externos[6] ?>>

              <input class="text-uppercase mb-2 " type="text" placeholder="sello externo" name='sello_externo8' style="width: 200px; height: 40px;" value=<?= $array_sellos_externos[7] ?>>

              <input class="text-uppercase " type="text" placeholder="sello externo" name='sello_externo9' style="width: 200px; height: 40px;" value=<?= $array_sellos_externos[8] ?>>
            </div>
          </div>
        </div>

      </div>
    </div>
  <?php
  }
} else {
  ?>
  <div class="containe mt-5">
    <div class="d-flex justify-content-center">

      <div class="col form-check form-check-inline ms-5">
        <div class="fs-5 fw-semibold text-start">Sellos Internos:</div>
        <hr>
        <div class="d-flex flex-column">
          <input class="text-uppercase mb-2 " type="text" placeholder="sello interno" name='sello_interno1' style="width: 200px; height: 40px;">

          <input class="text-uppercase mb-2 " type="text" placeholder="sello interno" name='sello_interno2' style="width: 200px; height: 40px;">

          <input class="text-uppercase " type="text" placeholder="sello interno" name='sello_interno3' style="width: 200px; height: 40px;">
        </div>
      </div>

      <div class="col-7 accordion-collapseform-check form-check-inline text-center me-5">
        <div class="fs-5 fw-semibold text-start">Sellos Externos:</div>
        <hr>
        <div class="d-flex flex-row">
          <div class="p-2 ">
            <input class="text-uppercase mb-2 " type="text" placeholder="sello externo" name='sello_externo1' style="width: 200px; height: 40px;">

            <input class="text-uppercase mb-2 " type="text" placeholder="sello externo" name='sello_externo2' style="width: 200px; height: 40px;">

            <input class="text-uppercase " type="text" placeholder="sello externo" name='sello_externo3' style="width: 200px; height: 40px;">
          </div>
          <div class="p-2 ">
            <input class="text-uppercase mb-2 " type="text" placeholder="sello externo" name='sello_externo4' style="width: 200px; height: 40px;">

            <input class="text-uppercase mb-2 " type="text" placeholder="sello externo" name='sello_externo5' style="width: 200px; height: 40px;">

            <input class="text-uppercase " type="text" placeholder="sello externo" name='sello_externo6' style="width: 200px; height: 40px;">
          </div>
          <div class="p-2 ">
            <input class="text-uppercase mb-2 " type="text" placeholder="sello externo" name='sello_externo7' style="width: 200px; height: 40px;">

            <input class="text-uppercase mb-2 " type="text" placeholder="sello externo" name='sello_externo8' style="width: 200px; height: 40px;">

            <input class="text-uppercase " type="text" placeholder="sello externo" name='sello_externo9' style="width: 200px; height: 40px;">
          </div>
        </div>
      </div>

    </div>
  </div>
<?php
}
?>