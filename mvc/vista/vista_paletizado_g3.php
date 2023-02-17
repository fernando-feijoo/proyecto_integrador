<div class="container">
  <div class="row me-5 ms-5">
    <div class="col form-check form-check-inline fs-5 fw-semibold">
      <div class="mt-3">CONTROL DE PALETIZADO EN CONTENEDOR</div>
    </div>

    <div class="d-flex fw-semibold align-items-center">
      <div class="me-2">Numero de cajas:</div>
      <select type="form-select" aria-label="Disabled select example" style="width: 100px; height: 36px;" name="firmantes1">
        <option selected>Seleccione</option>
        <?php
        $sql_cajas = datos_lista_cajas();
        while ($datos_cajas = $sql_cajas->fetch_object()) {
        ?>
          <option value=<?= $datos_cajas->id ?>><?= $datos_cajas->cantidad ?></option>
        <?php
        }
        ?>
      </select>
    </div>

    <div class="d-flex flex-row justify-content-center mt-4">
      <table>
        <thead>

          <th>1</th>
          <th><input type="number" name="caja_1" style="width: 200px; height: 40px;"></th>

          <th>6</th>
          <th><input type="number" name="caja_6" style="width: 200px; height: 40px;"></th>

          <th>11</th>
          <th><input type="number" name="caja_11" style="width: 200px; height: 40px;"></th>

          <th>16</th>
          <th><input type="number" name="caja_16" style="width: 200px; height: 40px;"></th>

        </thead>

        <tbody>
          <tr>
            <td class="fw-bold"> 2</td>
            <td>
              <input type="number" name="caja_2" style="width: 200px; height: 40px;">
            </td>
            <td class="fw-bold"> 7</td>
            <td>
              <input type="number" name="caja_7" style="width: 200px; height: 40px;">

            </td>
            <td class="fw-bold"> 12</td>
            <td>
              <input type="number" name="caja_12" style="width: 200px; height: 40px;">
            </td>
            <td class="fw-bold"> 17</td>
            <td>
              <input type="number" name="caja_17" style="width: 200px; height: 40px;">
            </td>
          </tr>
          <tr>
            <td class="fw-bold"> 3</td>
            <td>
              <input type="number" name="caja_3" style="width: 200px; height: 40px;">
            </td>
            <td class="fw-bold"> 8</td>
            <td>
              <input type="number" name="caja_8" style="width: 200px; height: 40px;">

            </td>
            <td class="fw-bold"> 13</td>
            <td>
              <input type="number" name="caja_13" style="width: 200px; height: 40px;">

            </td>
            <td class="fw-bold"> 18</td>
            <td>
              <input type="number" name="caja_18" style="width: 200px; height: 40px;">
            </td>
          </tr>
          <tr>
            <td class="fw-bold"> 4</td>
            <td>
              <input type="number" name="caja_4" style="width: 200px; height: 40px;">
            </td>
            <td class="fw-bold"> 9</td>
            <td>
              <input type="number" name="caja9_" style="width: 200px; height: 40px;">
            </td>
            <td class="fw-bold"> 14</td>
            <td>
              <input type="number" name="caja_14" style="width: 200px; height: 40px;">
            </td>
            <td class="fw-bold"> 19</td>
            <td>
              <input type="number" name="caja_19" style="width: 200px; height: 40px;">
            </td>
          </tr>
          <tr>
            <td class="fw-bold"> 5</td>
            <td>
              <input type="number" name="caja_5" style="width: 200px; height: 40px;">
            </td>
            <td class="fw-bold"> 10</td>
            <td>
              <input type="number" name="caja_10" style="width: 200px; height: 40px;">
            </td>
            <td class="fw-bold"> 15</td>
            <td>
              <input type="number" name="caja_15" style="width: 200px; height: 40px;">
            </td>
            <td class="fw-bold"> 20</td>
            <td>
              <input type="number" name="caja_20" style="width: 200px; height: 40px;">
            </td>
          </tr>

        </tbody>
      </table>

    </div>

    <div class="d-flex flex-row justify-content-start mt-3">
      <div class="p-1 fw-semibold">
        Personal a Firmar:
      </div>
    </div>

    <div class="d-flex flex-row justify-content-center">
      <div class="p-1">Responsable de Acopio
        <select type="form-select" aria-label="Disabled select example" style="width: 160px; height: 36px;" name="firmantes1">
          <option selected>Seleccione</option>
          <?php
          $sql_firmantes =  datos_lista_firmantes();
          while ($datos_firmantes = $sql_firmantes->fetch_object()) {
          ?>
            <option value=<?= $datos_firmantes->id ?>><?= $datos_firmantes->nombres ?></option>
          <?php
          }
          ?>
        </select>
      </div>
      <div class="p-1">Evaluador de Fruta
        <select type="form-select" aria-label="Disabled select example" style="width: 160px; height: 36px;" name="firmantes1">
          <option selected>Seleccione</option>
          <?php
          $sql_firmantes =  datos_lista_firmantes();
          while ($datos_firmantes = $sql_firmantes->fetch_object()) {
          ?>
            <option value=<?= $datos_firmantes->id ?>><?= $datos_firmantes->nombres ?></option>
          <?php
          }
          ?>
        </select>
      </div>
      <div class="p-1">Verificador de Contenedor
        <select type="form-select" aria-label="Disabled select example" style="width: 160px; height: 36px;" name="firmantes1">
          <option selected>Seleccione</option>
          <?php
          $sql_firmantes =  datos_lista_firmantes();
          while ($datos_firmantes = $sql_firmantes->fetch_object()) {
          ?>
            <option value=<?= $datos_firmantes->id ?>><?= $datos_firmantes->nombres ?></option>
          <?php
          }
          ?>
        </select>
      </div>
      <div class="p-1">Chofer de Contenedor
        <select type="form-select" aria-label="Disabled select example" style="width: 160px; height: 36px;" name="firmantes1">
          <option selected>Seleccione</option>
          <?php
          $sql_firmantes =  datos_lista_firmantes();
          while ($datos_firmantes = $sql_firmantes->fetch_object()) {
          ?>
            <option value=<?= $datos_firmantes->id ?>><?= $datos_firmantes->nombres ?></option>
          <?php
          }
          ?>
        </select>
      </div>
    </div>

    <div class="text-start  fs-5 fw-semibold mt-2">
      Observaciones:
      <textarea class="form-control mt-3" id="observacion_higiene" name="paletizaado_contenedor" rows="3"></textarea>
    </div>

  </div>
  <?php
  if (empty($_GET["id_contExpo"])) {
  ?>
    <div class="mt-3 me-5 text-end">
      <input type="hidden" name="btn-guardar-general" id="btn-guardar-value1" value="guardado">
      <button class="btn btn-outline-primary" type="submit" name="btn-guardar-general" value="guardado">Guardar</button>
    </div>
  <?php
  } else {
  ?>
    <div class="mt-5 me-5 text-end">
      <input type="hidden" name="btn-actualizar-general" id="btn-actualizar-value1" value="actualizado">
      <button class="btn btn-outline-info" type="submit" name="btn-actualizar-general" value="actualizado">Actualizar</button>
    </div>

  <?php
  }
  ?>
</div>