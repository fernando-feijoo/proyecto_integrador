<style>
  th {
    background-color: white;
    height: 40px;
    text-align: center;
    border: 1px solid black;
    margin: 15px;
  }

  td {
    border: 1px solid black;
  }

  #idasepcias {
    justify-content: center;
  }

  .puntoControl {
    padding-top: 15px;
  }
</style>
<?php

if (($valiacion = cargar_asepcias()) != false) {
  $sql = cargar_asepcias();
  $asepcias = array();
  while ($carga_datos = mysqli_fetch_assoc($sql)) {
    $asepcias[] = $carga_datos;
  }
  ?>
  <div id="idasepcias" class='mt-3' style="display: flex;">

    <table class="datos" style="background-color: rgb(230, 230, 230)">

      <tr>

        <th>
          <p class="puntoControl">PUNTO DE CONTROL</p>
        </th>
        <th width="56">BUENO</th>
        <th width="78">REGULAR</th>
        <th width="45">MALO</th>
      </tr>

      <tr>
        <td>Empacadora Pintada (Tinas,paredes, baños)</td>
        <td><input class="epbueno" type="radio" id="epbueno" name="ep" value="BUENO" <?php if ($asepcias[0]['tipo'] == 'BUENO')
          echo "checked"; ?>></td>
        <td><input class="epregular" type="radio" id="epregular" name="ep" value="REGULAR" <?php if ($asepcias[0]['tipo'] == 'REGULAR')
          echo "checked"; ?>></td>
        <td><input class="epmalo" type="radio" id="epmalo" name="ep" value="MALO" <?php if ($asepcias[0]['tipo'] == 'MALO')
          echo "checked"; ?>></td>
      </tr>

      <tr>
        <td>Limpieza de empacadora adecuada</td>
        <td><input class="radio-input" type="radio" id="lebueno" name="le" value="BUENO" <?php if ($asepcias[1]['tipo'] == 'BUENO')
          echo "checked"; ?>></td>
        <td><input class="radio-input2" type="radio" id="leregular" name="le" value="REGULAR" <?php if ($asepcias[1]['tipo'] == 'REGULAR')
          echo "checked"; ?>></td>
        <td><input class="radio-input3" type="radio" id="lemalo" name="le" value="MALO" <?php if ($asepcias[1]['tipo'] == 'MALO')
          echo "checked"; ?>></td>
      </tr>

      <tr>
        <td>Aplicacion de cal P24 Contorno de empacadora</td>
        <td><input class="radio-input" type="radio" id="acalbueno" name="acal" value="BUENO" <?php if ($asepcias[2]['tipo'] == 'BUENO')
          echo "checked"; ?>></td>
        <td><input class="radio-input2" type="radio" id="acalregular" name="acal" value="REGULAR" <?php if ($asepcias[2]['tipo'] == 'REGULAR')
          echo "checked"; ?>></td>
        <td><input class="radio-input3" type="radio" id="acalmalo" name="acal" value="MALO" <?php if ($asepcias[2]['tipo'] == 'MALO')
          echo "checked"; ?>></td>
      </tr>

      <tr>
        <td>Colocación de pediluvios al ingreso empacadora</td>
        <td><input class="radio-input" type="radio" id="cpibueno" name="cpi" value="BUENO" <?php if ($asepcias[3]['tipo'] == 'BUENO')
          echo "checked"; ?>></td>
        <td><input class="radio-input2" type="radio" id="cpiregular" name="cpi" value="REGULAR" <?php if ($asepcias[3]['tipo'] == 'REGULAR')
          echo "checked"; ?>></td>
        <td><input class="radio-input3" type="radio" id="cpimalo" name="cpi" value="MALO" <?php if ($asepcias[3]['tipo'] == 'MALO')
          echo "checked"; ?>></td>
      </tr>

      <tr>
        <td>Uso de de clonidador/bomba peroxido</td>
        <td><input class="radio-input" type="radio" id="ucobpbueno" name="ucobp" value="BUENO" <?php if ($asepcias[4]['tipo'] == 'BUENO')
          echo "checked"; ?>></td>
        <td><input class="radio-input2" type="radio" id="ucobpregular" name="ucobp" value="REGULAR" <?php if ($asepcias[4]['tipo'] == 'REGULAR')
          echo "checked"; ?>></td>
        <td><input class="radio-input3" type="radio" id="ucobpmalo" name="ucobp" value="MALO" <?php if ($asepcias[4]['tipo'] == 'MALO')
          echo "checked"; ?>></td>

      <tr>
        <td>Uso de pegadora de cartón</td>
        <td><input class="radio-input" type="radio" id="upcbueno" name="upc" value="BUENO" <?php if ($asepcias[5]['tipo'] == 'BUENO')
          echo "checked"; ?>></td>
        <td><input class="radio-input2" type="radio" id="upcregular" name="upc" value="REGULAR" <?php if ($asepcias[5]['tipo'] == 'REGULAR')
          echo "checked"; ?>></td>
        <td><input class="radio-input3" type="radio" id="upcmalo" name="upc" value="MALO" <?php if ($asepcias[5]['tipo'] == 'MALO')
          echo "checked"; ?>></td>
      </tr>

      <tr>
        <td>Uso rodillos para pegar cartón</td>
        <td><input class="radio-input" type="radio" id="urpcbueno" name="urpc" value="BUENO" <?php if ($asepcias[6]['tipo'] == 'BUENO')
          echo "checked"; ?>></td>
        <td><input class="radio-input2" type="radio" id="urpcregular" name="urpc" value="REGULAR" <?php if ($asepcias[6]['tipo'] == 'REGULAR')
          echo "checked"; ?>></td>
        <td><input class="radio-input3" type="radio" id="urpcmalo" name="urpc" value="MALO" <?php if ($asepcias[6]['tipo'] == 'MALO')
          echo "checked"; ?>></td>
      </tr>

      <tr>
        <td>Bombas con boquillas adecuadas</td>
        <td><input class="radio-input" type="radio" id="bcbbueno" name="bcb" value="BUENO" <?php if ($asepcias[7]['tipo'] == 'BUENO')
          echo "checked"; ?>></td>
        <td><input class="radio-input2" type="radio" id="bcbregular" name="bcb" value="REGULAR" <?php if ($asepcias[7]['tipo'] == 'REGULAR')
          echo "checked"; ?>></td>
        <td><input class="radio-input3" type="radio" id="bcbmalo" name="bcb" value="MALO" <?php if ($asepcias[7]['tipo'] == 'MALO')
          echo "checked"; ?>></td>
      </tr>

      <tr>
        <td>Fumigación de corona con agua de bidón</td>
        <td><input class="radio-input" type="radio" id="fcabbueno" name="fcab" value="BUENO" <?php if ($asepcias[8]['tipo'] == 'BUENO')
          echo "checked"; ?>></td>
        <td><input class="radio-input2" type="radio" id="fcabregular" name="fcab" value="REGULAR" <?php if ($asepcias[8]['tipo'] == 'REGULAR')
          echo "checked"; ?>></td>
        <td><input class="radio-input3" type="radio" id="fcabmalo" name="fcab" value="MALO" <?php if ($asepcias[8]['tipo'] == 'MALO')
          echo "checked"; ?>></td>
      </tr>

      <tr>
        <td>Mesa para evaluar grado y longitud de dedo</td>
        <td><input class="radio-input" type="radio" id="megldbueno" name="megld" value="BUENO" <?php if ($asepcias[9]['tipo'] == 'BUENO')
          echo "checked"; ?>></td>
        <td><input class="radio-input2" type="radio" id="megldregular" name="megld" value="REGULAR" <?php if ($asepcias[9]['tipo'] == 'REGULAR')
          echo "checked"; ?>></td>
        <td style="border-bottom: 1px solid black; border-right: 1px solid black;"><input class="radio-input3"
            type="radio" id="megldmalo" name="megld" value="MALO" <?php if ($asepcias[9]['tipo'] == 'MALO')
              echo "checked"; ?>></td>
      </tr>

      <tr>
        <td>Cerramiento de empacadora con malla zaran</td>
        <td><input class="radio-input" type="radio" id="cemzbueno" name="cemz" value="BUENO" <?php if ($asepcias[10]['tipo'] == 'BUENO')
          echo "checked"; ?>></td>
        <td><input class="radio-input2" type="radio" id="cemzregular" name="cemz" value="REGULAR" <?php if ($asepcias[10]['tipo'] == 'REGULAR')
          echo "checked"; ?>></td>
        <td><input class="radio-input3" type="radio" id="cemzmalo" name="cemz" value="MALO" <?php if ($asepcias[10]['tipo'] == 'MALO')
          echo "checked"; ?>></td>
      </tr>

    </table>

    <!---------!tabla 2---------->

    <table class="datos" style="background-color: rgb(230, 230, 230); margin-left:10px">

      <tr>

        <th>
          <p class="puntoControl">PUNTO DE CONTROL</p>
        </th>
        <th width="56">BUENO</th>
        <th width="78">REGULAR</th>
        <th width="49">MALO</th>
      </tr>

      <tr>
        <td>Agua corrida con buena presión</td>
        <td><input class="radio-input" type="radio" id="acbpbueno" name="acbp" value="BUENO" <?php if ($asepcias[11]['tipo'] == 'BUENO')
          echo "checked"; ?>></td>
        <td><input class="radio-input2" type="radio" id="acbpregular" name="acbp" value="REGULAR" <?php if ($asepcias[11]['tipo'] == 'REGULAR')
          echo "checked"; ?>></td>
        <td><input class="radio-input3" type="radio" id="acbpmalo" name="acbp" value="MALO" <?php if ($asepcias[11]['tipo'] == 'MALO')
          echo "checked"; ?>></td>
      </tr>

      <tr>
        <td>Limpi. Herra. (Bandejas, Cunas, Balanzas, Radios)</td>
        <td><input class="radio-input" type="radio" id="lhbueno" name="lh" value="BUENO" <?php if ($asepcias[12]['tipo'] == 'BUENO')
          echo "checked"; ?>></td>
        <td><input class="radio-input2" type="radio" id="lhregular" name="lh" value="REGULAR" <?php if ($asepcias[12]['tipo'] == 'REGULAR')
          echo "checked"; ?>></td>
        <td><input class="radio-input3" type="radio" id="lhmalo" name="lh" value="MALO" <?php if ($asepcias[12]['tipo'] == 'MALO')
          echo "checked"; ?>></td>
      </tr>

      <tr>
        <td>Cunas en buenas condiciones
        </td>
        <td><input class="radio-input" type="radio" id="cbcbueno" name="cbc" value="BUENO" <?php if ($asepcias[13]['tipo'] == 'BUENO')
          echo "checked"; ?>></td>
        <td><input class="radio-input2" type="radio" id="cbcregular" name="cbc" value="REGULAR" <?php if ($asepcias[13]['tipo'] == 'REGULAR')
          echo "checked"; ?>></td>
        <td><input class="radio-input3" type="radio" id="cbcmalo" name="cbc" value="MALO" <?php if ($asepcias[13]['tipo'] == 'MALO')
          echo "checked"; ?>></td>
      </tr>

      <tr>
        <td>Personal con equipo de protección completo</td>
        <td><input class="radio-input" type="radio" id="pepbueno" name="pep" value="BUENO" <?php if ($asepcias[14]['tipo'] == 'BUENO')
          echo "checked"; ?>></td>
        <td><input class="radio-input2" type="radio" id="pepregular" name="pep" value="REGULAR" <?php if ($asepcias[14]['tipo'] == 'REGULAR')
          echo "checked"; ?>></td>
        <td><input class="radio-input3" type="radio" id="pepmalo" name="pep" value="MALO" <?php if ($asepcias[14]['tipo'] == 'MALO')
          echo "checked"; ?>></td>
      </tr>

      <tr>
        <td>Ropa adecuada (Pantal. largo, camiseta, zapatos)</td>
        <td><input class="radio-input" type="radio" id="rabueno" name="ra" value="BUENO" <?php if ($asepcias[15]['tipo'] == 'BUENO')
          echo "checked"; ?>></td>
        <td><input class="radio-input2" type="radio" id="raregular" name="ra" value="REGULAR" <?php if ($asepcias[15]['tipo'] == 'REGULAR')
          echo "checked"; ?>></td>
        <td><input class="radio-input3" type="radio" id="ramalo" name="ra" value="MALO" <?php if ($asepcias[15]['tipo'] == 'MALO')
          echo "checked"; ?>></td>
      </tr>

      <tr>
        <td>Material de empaque ordenado adecuadamente</td>
        <td><input class="radio-input" type="radio" id="meoabueno" name="meoa" value="BUENO" <?php if ($asepcias[16]['tipo'] == 'BUENO')
          echo "checked"; ?>></td>
        <td><input class="radio-input2" type="radio" id="meoaregular" name="meoa" value="REGULAR" <?php if ($asepcias[16]['tipo'] == 'REGULAR')
          echo "checked"; ?>></td>
        <td><input class="radio-input3" type="radio" id="meoamalo" name="meoa" value="MALO" <?php if ($asepcias[16]['tipo'] == 'MALO')
          echo "checked"; ?>></td>
      </tr>

      <tr>
        <td>Cartón sobre pallets</td>
        <td><input class="radio-input" type="radio" id="cspbueno" name="csp" value="BUENO" <?php if ($asepcias[17]['tipo'] == 'BUENO')
          echo "checked"; ?>></td>
        <td><input class="radio-input2" type="radio" id="cspregular" name="csp" value="REGULAR" <?php if ($asepcias[17]['tipo'] == 'REGULAR')
          echo "checked"; ?>></td>
        <td><input class="radio-input3" type="radio" id="cspmalo" name="csp" value="MALO" <?php if ($asepcias[17]['tipo'] == 'MALO')
          echo "checked"; ?>></td>
      </tr>

      <tr>
        <td>Lavado de manos al ingreso de la empacadora</td>
        <td><input class="radio-input" type="radio" id="lmiebueno" name="lmie" value="BUENO" <?php if ($asepcias[18]['tipo'] == 'BUENO')
          echo "checked"; ?>></td>
        <td><input class="radio-input2" type="radio" id="lmieregular" name="lmie" value="REGULAR" <?php if ($asepcias[18]['tipo'] == 'REGULAR')
          echo "checked"; ?>></td>
        <td><input class="radio-input3" type="radio" id="lmiemalo" name="lmie" value="MALO" <?php if ($asepcias[18]['tipo'] == 'MALO')
          echo "checked"; ?>></td>
      </tr>

      <tr>
        <td>Baños con utensilios de higiene</td>
        <td><input class="radio-input" type="radio" id="buhbueno" name="buh" value="BUENO" <?php if ($asepcias[19]['tipo'] == 'BUENO')
          echo "checked"; ?>></td>
        <td><input class="radio-input2" type="radio" id="buhregular" name="buh" value="REGULAR" <?php if ($asepcias[19]['tipo'] == 'REGULAR')
          echo "checked"; ?>></td>
        <td><input class="radio-input3" type="radio" id="buhmalo" name="buh" value="MALO" <?php if ($asepcias[19]['tipo'] == 'MALO')
          echo "checked"; ?>></td>
      </tr>

      <tr>
        <td>Canaletes de tinas limpios de Moho, lama</td>
        <td><input class="radio-input" type="radio" id="ctlmbueno" name="ctlm" value="BUENO" <?php if ($asepcias[20]['tipo'] == 'BUENO')
          echo "checked"; ?>></td>
        <td><input class="radio-input2" type="radio" id="ctlmregular" name="ctlm" value="REGULAR" <?php if ($asepcias[20]['tipo'] == 'REGULAR')
          echo "checked"; ?>></td>
        <td><input class="radio-input3" type="radio" id="ctlmmalo" name="ctlm" value="MALO" <?php if ($asepcias[20]['tipo'] == 'MALO')
          echo "checked"; ?>></td>
      </tr>

      <tr>
        <td>Lavado de racimos con buena presión</td>
        <td><input class="radio-input" type="radio" id="lrcbpbueno" name="lrcbp" value="BUENO" <?php if ($asepcias[21]['tipo'] == 'BUENO')
          echo "checked"; ?>></td>
        <td><input class="radio-input2" type="radio" id="lrcbpregular" name="lrcbp" value="REGULAR" <?php if ($asepcias[21]['tipo'] == 'REGULAR')
          echo "checked"; ?>></td>
        <td><input class="radio-input3" type="radio" id="lrcbpmalo" name="lrcbp" value="MALO" <?php if ($asepcias[21]['tipo'] == 'MALO')
          echo "checked"; ?>></td>
      </tr>

    </table>
  </div>

<?php } else { ?>
  <div id="idasepcias" class='mt-3' style="display: flex;">

    <table class="datos" style="background-color: rgb(230, 230, 230)">

      <tr>

        <th>
          <p class="puntoControl">PUNTO DE CONTROL</p>
        </th>
        <th width="56">BUENO</th>
        <th width="78">REGULAR</th>
        <th width="45">MALO</th>
      </tr>

      <tr>
        <td>Empacadora Pintada (Tinas,paredes, baños)</td>
        <td><input class="epbueno" type="radio" id="epbueno" name="ep" value="BUENO"></td>
        <td><input class="epregular" type="radio" id="epregular" name="ep" value="REGULAR"></td>
        <td><input class="epmalo" type="radio" id="epmalo" name="ep" value="MALO"></td>
      </tr>

      <tr>
        <td>Limpieza de empacadora adecuada</td>
        <td><input class="radio-input" type="radio" id="lebueno" name="le" value="BUENO"></td>
        <td><input class="radio-input2" type="radio" id="leregular" name="le" value="REGULAR"></td>
        <td><input class="radio-input3" type="radio" id="lemalo" name="le" value="MALO"></td>
      </tr>

      <tr>
        <td>Aplicacion de cal P24 Contorno de empacadora</td>
        <td><input class="radio-input" type="radio" id="acalbueno" name="acal" value="BUENO"></td>
        <td><input class="radio-input2" type="radio" id="acalregular" name="acal" value="REGULAR"></td>
        <td><input class="radio-input3" type="radio" id="acalmalo" name="acal" value="MALO"></td>
      </tr>

      <tr>
        <td>Colocación de pediluvios al ingreso empacadora</td>
        <td><input class="radio-input" type="radio" id="cpibueno" name="cpi" value="BUENO"></td>
        <td><input class="radio-input2" type="radio" id="cpiregular" name="cpi" value="REGULAR"></td>
        <td><input class="radio-input3" type="radio" id="cpimalo" name="cpi" value="MALO"></td>
      </tr>

      <tr>
        <td>Uso de de clonidador/bomba peroxido</td>
        <td><input class="radio-input" type="radio" id="ucobpbueno" name="ucobp" value="BUENO"></td>
        <td><input class="radio-input2" type="radio" id="ucobpregular" name="ucobp" value="REGULAR"></td>
        <td><input class="radio-input3" type="radio" id="ucobpmalo" name="ucobp" value="MALO"></td>

      <tr>
        <td>Uso de pegadora de cartón</td>
        <td><input class="radio-input" type="radio" id="upcbueno" name="upc" value="BUENO"></td>
        <td><input class="radio-input2" type="radio" id="upcregular" name="upc" value="REGULAR"></td>
        <td><input class="radio-input3" type="radio" id="upcmalo" name="upc" value="MALO"></td>
      </tr>

      <tr>
        <td>Uso rodillos para pegar cartón</td>
        <td><input class="radio-input" type="radio" id="urpcbueno" name="urpc" value="BUENO"></td>
        <td><input class="radio-input2" type="radio" id="urpcregular" name="urpc" value="REGULAR"></td>
        <td><input class="radio-input3" type="radio" id="urpcmalo" name="urpc" value="MALO"></td>
      </tr>

      <tr>
        <td>Bombas con boquillas adecuadas</td>
        <td><input class="radio-input" type="radio" id="bcbbueno" name="bcb" value="BUENO"></td>
        <td><input class="radio-input2" type="radio" id="bcbregular" name="bcb" value="REGULAR"></td>
        <td><input class="radio-input3" type="radio" id="bcbmalo" name="bcb" value="MALO"></td>
      </tr>

      <tr>
        <td>Fumigación de corona con agua de bidón</td>
        <td><input class="radio-input" type="radio" id="fcabbueno" name="fcab" value="BUENO"></td>
        <td><input class="radio-input2" type="radio" id="fcabregular" name="fcab" value="REGULAR"></td>
        <td><input class="radio-input3" type="radio" id="fcabmalo" name="fcab" value="MALO"></td>
      </tr>

      <tr>
        <td>Mesa para evaluar grado y longitud de dedo</td>
        <td><input class="radio-input" type="radio" id="megldbueno" name="megld" value="BUENO"></td>
        <td><input class="radio-input2" type="radio" id="megldregular" name="megld" value="REGULAR"></td>
        <td style="border-bottom: 1px solid black; border-right: 1px solid black;"><input class="radio-input3"
            type="radio" id="megldmalo" name="megld" value="MALO"></td>
      </tr>

      <tr>
        <td>Cerramiento de empacadora con malla zaran</td>
        <td><input class="radio-input" type="radio" id="cemzbueno" name="cemz" value="BUENO"></td>
        <td><input class="radio-input2" type="radio" id="cemzregular" name="cemz" value="REGULAR"></td>
        <td><input class="radio-input3" type="radio" id="cemzmalo" name="cemz" value="MALO"></td>
      </tr>

    </table>

    <!---------!tabla 2---------->

    <table class="datos" style="background-color: rgb(230, 230, 230); margin-left:10px">

      <tr>

        <th>
          <p class="puntoControl">PUNTO DE CONTROL</p>
        </th>
        <th width="56">BUENO</th>
        <th width="78">REGULAR</th>
        <th width="49">MALO</th>
      </tr>

      <tr>
        <td>Agua corrida con buena presión</td>
        <td><input class="radio-input" type="radio" id="acbpbueno" name="acbp" value="BUENO"></td>
        <td><input class="radio-input2" type="radio" id="acbpregular" name="acbp" value="REGULAR"></td>
        <td><input class="radio-input3" type="radio" id="acbpmalo" name="acbp" value="MALO"></td>
      </tr>

      <tr>
        <td>Limpi. Herra. (Bandejas, Cunas, Balanzas, Radios)</td>
        <td><input class="radio-input" type="radio" id="lhbueno" name="lh" value="BUENO"></td>
        <td><input class="radio-input2" type="radio" id="lhregular" name="lh" value="REGULAR"></td>
        <td><input class="radio-input3" type="radio" id="lhmalo" name="lh" value="MALO"></td>
      </tr>

      <tr>
        <td>Cunas en buenas condiciones
        </td>
        <td><input class="radio-input" type="radio" id="cbcbueno" name="cbc" value="BUENO"></td>
        <td><input class="radio-input2" type="radio" id="cbcregular" name="cbc" value="REGULAR"></td>
        <td><input class="radio-input3" type="radio" id="cbcmalo" name="cbc" value="MALO"></td>
      </tr>

      <tr>
        <td>Personal con equipo de protección completo</td>
        <td><input class="radio-input" type="radio" id="pepbueno" name="pep" value="BUENO"></td>
        <td><input class="radio-input2" type="radio" id="pepregular" name="pep" value="REGULAR"></td>
        <td><input class="radio-input3" type="radio" id="pepmalo" name="pep" value="MALO"></td>
      </tr>

      <tr>
        <td>Ropa adecuada (Pantal. largo, camiseta, zapatos)</td>
        <td><input class="radio-input" type="radio" id="rabueno" name="ra" value="BUENO"></td>
        <td><input class="radio-input2" type="radio" id="raregular" name="ra" value="REGULAR"></td>
        <td><input class="radio-input3" type="radio" id="ramalo" name="ra" value="MALO"></td>
      </tr>

      <tr>
        <td>Material de empaque ordenado adecuadamente</td>
        <td><input class="radio-input" type="radio" id="meoabueno" name="meoa" value="BUENO"></td>
        <td><input class="radio-input2" type="radio" id="meoaregular" name="meoa" value="REGULAR"></td>
        <td><input class="radio-input3" type="radio" id="meoamalo" name="meoa" value="MALO"></td>
      </tr>

      <tr>
        <td>Cartón sobre pallets</td>
        <td><input class="radio-input" type="radio" id="cspbueno" name="csp" value="BUENO"></td>
        <td><input class="radio-input2" type="radio" id="cspregular" name="csp" value="REGULAR"></td>
        <td><input class="radio-input3" type="radio" id="cspmalo" name="csp" value="MALO"></td>
      </tr>

      <tr>
        <td>Lavado de manos al ingreso de la empacadora</td>
        <td><input class="radio-input" type="radio" id="lmiebueno" name="lmie" value="BUENO"></td>
        <td><input class="radio-input2" type="radio" id="lmieregular" name="lmie" value="REGULAR"></td>
        <td><input class="radio-input3" type="radio" id="lmiemalo" name="lmie" value="MALO"></td>
      </tr>

      <tr>
        <td>Baños con utensilios de higiene</td>
        <td><input class="radio-input" type="radio" id="buhbueno" name="buh" value="BUENO"></td>
        <td><input class="radio-input2" type="radio" id="buhregular" name="buh" value="REGULAR"></td>
        <td><input class="radio-input3" type="radio" id="buhmalo" name="buh" value="MALO"></td>
      </tr>

      <tr>
        <td>Canaletes de tinas limpios de Moho, lama</td>
        <td><input class="radio-input" type="radio" id="ctlmbueno" name="ctlm" value="BUENO"></td>
        <td><input class="radio-input2" type="radio" id="ctlmregular" name="ctlm" value="REGULAR"></td>
        <td><input class="radio-input3" type="radio" id="ctlmmalo" name="ctlm" value="MALO"></td>
      </tr>

      <tr>
        <td>Lavado de racimos con buena presión</td>
        <td><input class="radio-input" type="radio" id="lrcbpbueno" name="lrcbp" value="BUENO"></td>
        <td><input class="radio-input2" type="radio" id="lrcbpregular" name="lrcbp" value="REGULAR"></td>
        <td><input class="radio-input3" type="radio" id="lrcbpmalo" name="lrcbp" value="MALO"></td>
      </tr>

    </table>
  </div>
<?php } ?>
<h6 class="mt-2" style="margin-right: 40px;">SELECCIONAR TODOS LOS CAMPOS</h6>
<div class="d-flex flex-row justify-content-end ms-auto me-5 mb-1 mt-0">
                <div class="p-2">
                    <?php
                    if (empty($_GET["id_eva"])) {
                        ?>
                        <!-- <input type="hidden" name="btn-guardar-general" id="btn-guardar-value1" value="guardado"> -->
                        <button id="btn-guardar-general" class="btn btn-outline-primary" type="submit" name="guardar_eva"
                            value="guardado">Guardar</button>
                        <?php
                    } else {
                        ?>
                        <!-- <input type="hidden" name="btn-actualizar-general" id="btn-actualizar-value1" value="actualizado"> -->
                        <button id="btn-actualizar-general" class="btn btn-outline-info" type="submit" name="actualizar_eva"
                            value="actualizado">Actualizar</button>
                        <?php
                    }
                    ?>
                </div>
            </div>