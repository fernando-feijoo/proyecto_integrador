<div class="row mx-auto mt-3">
  <div class="containe ">
    <div class="row me-5 ms-5">
      <div class="col form-check form-check-inline fs-5 fw-semibold">
        CONTROL DE PALETIZADO EN CONTENEDOR
      </div>

      <div class="d-flex fw-semibold" style="margin-left: 85%;margin-top: 10px;">
        Numero de cajas:
        <select name="cajas">
          <option value="48">48</option>
          <option value="53">54</option>
        </select>
      </div>

      <div class="d-flex flex-row justify-content-center">
        <table>
          <thead>

            <th>1</th>
            <th><input type="number" name="caja_1"></th>

            <th>6</th>
            <th><input type="number" name="caja_6"></th>

            <th>11</th>
            <th><input type="number" name="caja_11"></th>

            <th>16</th>
            <th><input type="number" name="caja_16"></th>

          </thead>

          <tbody>
            <tr>
              <td class="fw-bold"> 2</td>
              <td>
                <input type="number" name="caja_2">
              </td>
              <td class="fw-bold"> 7</td>
              <td>
                <input type="number" name="caja_7">

              </td>
              <td class="fw-bold"> 12</td>
              <td>
                <input type="number" name="caja_12">
              </td>
              <td class="fw-bold"> 17</td>
              <td>
                <input type="number" name="caja_17">
              </td>
            </tr>
            <tr>
              <td class="fw-bold"> 3</td>
              <td>
                <input type="number" name="caja_3">
              </td>
              <td class="fw-bold"> 8</td>
              <td>
                <input type="number" name="caja_8">

              </td>
              <td class="fw-bold"> 13</td>
              <td>
                <input type="number" name="caja_13">

              </td>
              <td class="fw-bold"> 18</td>
              <td>
                <input type="number" name="caja_18">
              </td>
            </tr>
            <tr>
              <td class="fw-bold"> 4</td>
              <td>
                <input type="number" name="caja_4">
              </td>
              <td class="fw-bold"> 9</td>
              <td>
                <input type="number" name="caja9_">
              </td>
              <td class="fw-bold"> 14</td>
              <td>
                <input type="number" name="caja_14">
              </td>
              <td class="fw-bold"> 19</td>
              <td>
                <input type="number" name="caja_19">
              </td>
            </tr>
            <tr>
              <td class="fw-bold"> 5</td>
              <td>
                <input type="number" name="caja_5">
              </td>
              <td class="fw-bold"> 10</td>
              <td>
                <input type="number" name="caja_10">
              </td>
              <td class="fw-bold"> 15</td>
              <td>
                <input type="number" name="caja_15">
              </td>
              <td class="fw-bold"> 20</td>
              <td>
                <input type="number" name="caja_20">
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
<div class="mt-5 me-5 text-end">
  <input type="hidden" name="btn-guardar-general" id="btn-guardar-value1" value="guardado">
  <button class="btn btn-outline-primary" type="submit" name="btn-guardar-general" value="guardado">Guardar</button>
</div>