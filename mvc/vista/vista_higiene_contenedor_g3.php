<?php
if (($valiacion = cargar_datos_higiene()) != false) {
  $sql = cargar_datos_higiene();
  $datos_higiene = array();
  while ($cargar_datos_higiene = mysqli_fetch_assoc($sql)) {
    $datos_higiene[] = $cargar_datos_higiene;
  }
?>
  <script>
    console.log("Ingreso a vista higiene")
  </script>
  
  <div class="container mt-3">
    <div class="row me-5 ms-5">
      <div class="col form-check form-check-inline ms-2 fs-5 fw-semibold">
        DATOS DE HIGIENE DEL CONTENEDOR
      </div>

      <table class="table-bordered" style="margin-top: 10px;border-color: black;">

        <thead class="bg-secondary bg-opacity-50">
          <th></th>
          <th>Acción</th>
          <th></th>
          <th>Acción</th>
        </thead>

        <tbody style="background-color: white;">

          <tr>
            <td> Llegó lavado</td>
            <td>
              <div class="form-check form-check-inline" style="margin-left: -10px;">
                <input class="form-check-input" type="radio" name="inlineRadioOptions_hc1" id="inlineRadio1" value="1" <?php if ($datos_higiene[0]['opcion'] == "1") echo "checked"; ?>>
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline" style="margin-left: -10px;">
                <input class="form-check-input" type="radio" name="inlineRadioOptions_hc1" id="inlineRadio2" value="0" <?php if ($datos_higiene[0]['opcion'] == "0") echo "checked"; ?>>
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </td>

            <td> Presencia de insectos en el contenedor</td>
            <td>
              <div class="form-check form-check-inline" style="margin-left: -10px;">
                <input class="form-check-input" type="radio" name="inlineRadioOptions_hc5" id="inlineRadio1" value="1" <?php if ($datos_higiene[4]['opcion'] == "1") echo "checked"; ?>>
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline" style="margin-left: -10px;">
                <input class="form-check-input" type="radio" name="inlineRadioOptions_hc5" id="inlineRadio2" value="0" <?php if ($datos_higiene[4]['opcion'] == "0") echo "checked"; ?>>
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </td>
          </tr>

          <tr>
            <td> Drenajes limpios</td>
            <td>
              <div class="form-check form-check-inline" style="margin-left: -10px;">
                <input class="form-check-input" type="radio" name="inlineRadioOptions_hc2" id="inlineRadio1" value="1" <?php if ($datos_higiene[1]['opcion'] == "1") echo "checked"; ?>>
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline" style="margin-left: -10px;">
                <input class="form-check-input" type="radio" name="inlineRadioOptions_hc2" id="inlineRadio2" value="0" <?php if ($datos_higiene[1]['opcion'] == "0") echo "checked"; ?>>
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </td>

            <td> Llego con sello de llegada</td>
            <td>
              <div class="form-check form-check-inline" style="margin-left: -10px;">
                <input class="form-check-input" type="radio" name="inlineRadioOptions_hc6" id="inlineRadio1" value="1" <?php if ($datos_higiene[5]['opcion'] == "1") echo "checked"; ?>>
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline" style="margin-left: -10px;">
                <input class="form-check-input" type="radio" name="inlineRadioOptions_hc6" id="inlineRadio2" value="0" <?php if ($datos_higiene[5]['opcion'] == "0") echo "checked"; ?>>
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </td>
          </tr>

          <tr>
            <td> Olor aceptable</td>
            <td>
              <div class="form-check form-check-inline" style="margin-left: -10px;">
                <input class="form-check-input" type="radio" name="inlineRadioOptions_hc3" id="inlineRadio1" value="1" <?php if ($datos_higiene[2]['opcion'] == "1") echo "checked"; ?>>
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline" style="margin-left: -10px;">
                <input class="form-check-input" type="radio" name="inlineRadioOptions_hc3" id="inlineRadio2" value="0" <?php if ($datos_higiene[2]['opcion'] == "0") echo "checked"; ?>>
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </td>

            <td> Presencia de moho dentro del contenedor</td>
            <td>
              <div class="form-check form-check-inline" style="margin-left: -10px;">
                <input class="form-check-input" type="radio" name="inlineRadioOptions_hc7" id="inlineRadio1" value="1" <?php if ($datos_higiene[6]['opcion'] == "1") echo "checked"; ?>>
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline" style="margin-left: -10px;">
                <input class="form-check-input" type="radio" name="inlineRadioOptions_hc7" id="inlineRadio2" value="0" <?php if ($datos_higiene[6]['opcion'] == "0") echo "checked"; ?>>
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </td>
          </tr>

          <tr>
            <td> Residuos químicos</td>
            <td>
              <div class="form-check form-check-inline" style="margin-left: -10px;">
                <input class="form-check-input" type="radio" name="inlineRadioOptions_hc4" id="inlineRadio1" value="1" <?php if ($datos_higiene[3]['opcion'] == "1") echo "checked"; ?>>
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline" style="margin-left: -10px;">
                <input class="form-check-input" type="radio" name="inlineRadioOptions_hc4" id="inlineRadio2" value="0" <?php if ($datos_higiene[3]['opcion'] == "0") echo "checked"; ?>>
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </td>
            </td>

            <td> Contenedor aceptable</td>
            <td>
              <div class="form-check form-check-inline" style="margin-left: -10px;">
                <input class="form-check-input" type="radio" name="inlineRadioOptions_hc8" id="inlineRadio1" value="1" <?php if ($datos_higiene[7]['opcion'] == "1") echo "checked"; ?>>
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline" style="margin-left: -10px;">
                <input class="form-check-input" type="radio" name="inlineRadioOptions_hc8" id="inlineRadio2" value="0" <?php if ($datos_higiene[7]['opcion'] == "0") echo "checked"; ?>>
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </td>
          </tr>

        </tbody>
      </table>
      <div class="text-start fs-5 fw-semibold mt-5">
        Observaciones:
        <?php
        $sql_comnt = cargar_observacion_higiene();
        $cargar_comentario = $sql_comnt->fetch_object();
        ?>
        <textarea class="form-control mt-3" id="observacion_higiene" name="obs_higiene" rows="3"><?= $cargar_comentario -> obser_hig_contenedor?></textarea>
      </div>
    </div>
  </div>
<?php
} else {
?>
  <script>
    console.log("Ingreso a vista higiene")
  </script>

  <div class="container mt-3">
    <div class="row me-5 ms-5">
      <div class="col form-check form-check-inline ms-2 fs-5 fw-semibold">
        DATOS DE HIGIENE DEL CONTENEDOR
      </div>

      <table class="table-bordered" style="margin-top: 10px;border-color: black;">

        <thead class="bg-secondary bg-opacity-50">
          <th></th>
          <th>Acción</th>
          <th></th>
          <th>Acción</th>
        </thead>

        <tbody style="background-color: white;">

          <tr>
            <td> Llegó lavado</td>
            <td>
              <div class="form-check form-check-inline" style="margin-left: -10px;">
                <input class="form-check-input" type="radio" name="inlineRadioOptions_hc1" id="inlineRadio1" value="1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline" style="margin-left: -10px;">
                <input class="form-check-input" type="radio" name="inlineRadioOptions_hc1" id="inlineRadio2" value="0">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </td>

            <td> Presencia de insectos en el contenedor</td>
            <td>
              <div class="form-check form-check-inline" style="margin-left: -10px;">
                <input class="form-check-input" type="radio" name="inlineRadioOptions_hc5" id="inlineRadio1" value="1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline" style="margin-left: -10px;">
                <input class="form-check-input" type="radio" name="inlineRadioOptions_hc5" id="inlineRadio2" value="0">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </td>
          </tr>

          <tr>
            <td> Drenajes limpios</td>
            <td>
              <div class="form-check form-check-inline" style="margin-left: -10px;">
                <input class="form-check-input" type="radio" name="inlineRadioOptions_hc2" id="inlineRadio1" value="1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline" style="margin-left: -10px;">
                <input class="form-check-input" type="radio" name="inlineRadioOptions_hc2" id="inlineRadio2" value="0">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </td>

            <td> Llego con sello de llegada</td>
            <td>
              <div class="form-check form-check-inline" style="margin-left: -10px;">
                <input class="form-check-input" type="radio" name="inlineRadioOptions_hc6" id="inlineRadio1" value="1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline" style="margin-left: -10px;">
                <input class="form-check-input" type="radio" name="inlineRadioOptions_hc6" id="inlineRadio2" value="0">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </td>
          </tr>

          <tr>
            <td> Olor aceptable</td>
            <td>
              <div class="form-check form-check-inline" style="margin-left: -10px;">
                <input class="form-check-input" type="radio" name="inlineRadioOptions_hc3" id="inlineRadio1" value="1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline" style="margin-left: -10px;">
                <input class="form-check-input" type="radio" name="inlineRadioOptions_hc3" id="inlineRadio2" value="0">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </td>

            <td> Presencia de moho dentro del contenedor</td>
            <td>
              <div class="form-check form-check-inline" style="margin-left: -10px;">
                <input class="form-check-input" type="radio" name="inlineRadioOptions_hc7" id="inlineRadio1" value="1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline" style="margin-left: -10px;">
                <input class="form-check-input" type="radio" name="inlineRadioOptions_hc7" id="inlineRadio2" value="0">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </td>
          </tr>

          <tr>
            <td> Residuos químicos</td>
            <td>
              <div class="form-check form-check-inline" style="margin-left: -10px;">
                <input class="form-check-input" type="radio" name="inlineRadioOptions_hc4" id="inlineRadio1" value="1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline" style="margin-left: -10px;">
                <input class="form-check-input" type="radio" name="inlineRadioOptions_hc4" id="inlineRadio2" value="0">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </td>
            </td>

            <td> Contenedor aceptable</td>
            <td>
              <div class="form-check form-check-inline" style="margin-left: -10px;">
                <input class="form-check-input" type="radio" name="inlineRadioOptions_hc8" id="inlineRadio1" value="1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline" style="margin-left: -10px;">
                <input class="form-check-input" type="radio" name="inlineRadioOptions_hc8" id="inlineRadio2" value="0">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </td>
          </tr>

        </tbody>
      </table>
      <div class="text-start fs-5 fw-semibold mt-5">
        Observaciones:
        <textarea class="form-control mt-3" id="observacion_higiene" name="obs_higiene" rows="3"></textarea>
      </div>
    </div>
  </div>
<?php
}
