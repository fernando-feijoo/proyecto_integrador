<div class="row mx-auto mt-3">
  <div class="containe ">
    <div class="row me-5 ms-5">
      <div class="col form-check form-check-inline fs-5 fw-semibold">
        CONTROL DE PALETIZADO EN CONTENEDOR
      </div>

      <div class="d-flex fw-semibold" style="margin-left: 85%;margin-top: 10px;">
        <div class="me-2">Numero de cajas:</div>
        <select name="cajas">
          <option value="1">48</option>
          <option value="2">54</option>
        </select>
      </div>

      <div class="d-flex flex-row justify-content-center">
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

      <div class="text-start  fs-5 fw-semibold mt-5">
        Observaciones:
        <textarea class="form-control mt-3" id="observacion_higiene" name="paletizaado_contenedor" rows="3"></textarea>
      </div>

    </div>
  </div>
</div>

<?php
if (empty($_GET["id_contExpo"])) {
?>
  <div class="mt-5 me-5 text-end">
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
