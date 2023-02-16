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
  .puntoControl{
    padding-top: 15px;
  }
</style>

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
      <td>Empacadora Pintada (Tinas,
        paredes, baños)</td>
      <td><input class="epbueno" type="radio" id="epbueno" name="ep" value="bueno"></td>
      <td><input class="epregular" type="radio" id="epregular" name="ep" value="regular"></td>
      <td><input class="epmalo" type="radio" id="epmalo" name="ep" value="malo"></td>
    </tr>



    <tr>
      <td>Limpieza de empacadora
        adecuada</td>
      <td><input class="radio-input" type="radio" id="lebueno" name="le" value="bueno"></td>
      <td><input class="radio-input2" type="radio" id="leregular" name="le" value="regular"></td>
      <td><input class="radio-input3" type="radio" id="lemalo" name="le" value="malo"></td>
    </tr>


    <tr>
      <td>Aplicacion de cal P24
        Contorno de empacadora</td>
      <td><input class="radio-input" type="radio" id="acalbueno" name="acal" value="bueno"></td>
      <td><input class="radio-input2" type="radio" id="acalregular" name="acal" value="regular"></td>
      <td><input class="radio-input3" type="radio" id="acalmalo" name="acal" value="malo"></td>
    </tr>


    <tr>
      <td>Colocación de pediluvios al
        ingreso empacadora</td>
      <td><input class="radio-input" type="radio" id="cpibueno" name="cpi" value="bueno"></td>
      <td><input class="radio-input2" type="radio" id="cpiregular" name="cpi" value="regular"></td>
      <td><input class="radio-input3" type="radio" id="cpimalo" name="cpi" value="malo"></td>
    </tr>


    <tr>
      <td>Uso de de clonidador/bomba
        peroxido</td>
      <td><input class="radio-input" type="radio" id="ucobpbueno" name="ucobp" value="bueno"></td>
      <td><input class="radio-input2" type="radio" id="ucobpregular" name="ucobp" value="regular"></td>
      <td><input class="radio-input3" type="radio" id="ucobpmalo" name="ucobp" value="malo"></td>


    <tr>
      <td>Uso de pegadora de cartón
      </td>
      <td><input class="radio-input" type="radio" id="upcbueno" name="upc" value="bueno"></td>
      <td><input class="radio-input2" type="radio" id="upcregular" name="upc" value="regular"></td>
      <td><input class="radio-input3" type="radio" id="upcmalo" name="upc" value="malo"></td>
    </tr>

    <tr>
      <td>Uso rodillos para pegar
        cartón</td>
      <td><input class="radio-input" type="radio" id="urpcbueno" name="urpc" value="bueno"></td>
      <td><input class="radio-input2" type="radio" id="urpcregular" name="urpc" value="regular"></td>
      <td><input class="radio-input3" type="radio" id="urpcmalo" name="urpc" value="malo"></td>
    </tr>


    <tr>
      <td>Bombas con boquillas
        adecuadas</td>
      <td><input class="radio-input" type="radio" id="bcbbueno" name="bcb" value="bueno"></td>
      <td><input class="radio-input2" type="radio" id="bcbregular" name="bcb" value="regular"></td>
      <td><input class="radio-input3" type="radio" id="bcbmalo" name="bcb" value="malo"></td>
    </tr>


    <tr>
      <td>Fumigación de corona con
        agua de bidón</td>
      <td><input class="radio-input" type="radio" id="fcabbueno" name="fcab" value="bueno"></td>
      <td><input class="radio-input2" type="radio" id="fcabregular" name="fcab" value="regular"></td>
      <td><input class="radio-input3" type="radio" id="fcabmalo" name="fcab" value="malo"></td>
    </tr>


    <tr>
      <td style="border-bottom: 1px solid black; border-right: 1px solid black;" height="34">Mesa para evaluar grado y
        longitud de dedo</td>
      <td style="border-bottom: 1px solid black; border-right: 1px solid black;"><input class="radio-input" type="radio"
          id="megldbueno" name="megld" value="bueno"></td>
      <td style="border-bottom: 1px solid black; border-right: 1px solid black;"><input class="radio-input2"
          type="radio" id="megldregular" name="megld" value="regular"></td>
      <td style="border-bottom: 1px solid black; border-right: 1px solid black;"><input class="radio-input3"
          type="radio" id="megldmalo" name="megld" value="malo"></td>
    </tr>



    <tr>
      <td>Cerramiento de empacadora
        con malla zaran</td>
      <td><input class="radio-input" type="radio" id="cemzbueno" name="cemz" value="bueno"></td>
      <td><input class="radio-input2" type="radio" id="cemzregular" name="cemz" value="regular"></td>
      <td><input class="radio-input3" type="radio" id="cemzmalo" name="cemz" value="malo"></td>
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
      <td>Agua corrida con buena
        presión</td>
      <td><input class="radio-input" type="radio" id="acbpbueno" name="acbp" value="bueno"></td>
      <td><input class="radio-input2" type="radio" id="acbpregular" name="acbp" value="regular"></td>
      <td><input class="radio-input3" type="radio" id="acbpmalo" name="acbp" value="malo"></td>
    </tr>



    <tr>
      <td>Limpi. Herra. (Bandejas,
        Cunas, Balanzas, Radios)</td>
      <td><input class="radio-input" type="radio" id="lhbueno" name="lh" value="bueno"></td>
      <td><input class="radio-input2" type="radio" id="lhregular" name="lh" value="regular"></td>
      <td><input class="radio-input3" type="radio" id="lhmalo" name="lh" value="malo"></td>
    </tr>


    <tr>
      <td>Cunas en buenas condiciones
      </td>
      <td><input class="radio-input" type="radio" id="cbcbueno" name="cbc" value="bueno"></td>
      <td><input class="radio-input2" type="radio" id="cbcregular" name="cbc" value="regular"></td>
      <td><input class="radio-input3" type="radio" id="cbcmalo" name="cbc" value="malo"></td>
    </tr>


    <tr>
      <td>Personal con equipo de
        protección completo</td>
      <td><input class="radio-input" type="radio" id="pepbueno" name="pep" value="bueno"></td>
      <td><input class="radio-input2" type="radio" id="pepregular" name="pep" value="regular"></td>
      <td><input class="radio-input3" type="radio" id="pepmalo" name="pep" value="malo"></td>
    </tr>


    <tr>
      <td>
        Ropa adecuada (Pantal. largo, camiseta, zapatos)</td>
      <td><input class="radio-input" type="radio" id="rabueno" name="ra" value="bueno"></td>
      <td><input class="radio-input2" type="radio" id="raregular" name="ra" value="regular"></td>
      <td><input class="radio-input3" type="radio" id="ramalo" name="ra" value="malo"></td>
    </tr>

    <tr>
      <td>
        Material de empaque ordenado adecuadamente</td>
      <td><input class="radio-input" type="radio" id="meoabueno" name="meoa" value="bueno"></td>
      <td><input class="radio-input2" type="radio" id="meoaregular" name="meoa" value="regular"></td>
      <td><input class="radio-input3" type="radio" id="meoamalo" name="meoa" value="malo"></td>
    </tr>


    <tr>
      <td>
        Cartón sobre pallets</td>
      <td><input class="radio-input" type="radio" id="cspbueno" name="csp" value="bueno"></td>
      <td><input class="radio-input2" type="radio" id="cspregular" name="csp" value="regular"></td>
      <td><input class="radio-input3" type="radio" id="cspmalo" name="csp" value="malo"></td>
    </tr>


    <tr>
      <td>Lavado de manos al ingreso
        de la empacadora</td>
      <td><input class="radio-input" type="radio" id="lmiebueno" name="lmie" value="bueno"></td>
      <td><input class="radio-input2" type="radio" id="lmieregular" name="lmie" value="regular"></td>
      <td><input class="radio-input3" type="radio" id="lmiemalo" name="lmie" value="malo"></td>
    </tr>


    <tr>
      <td>Baños con utensilios de
        higiene</td>
      <td><input class="radio-input" type="radio" id="buhbueno" name="buh" value="bueno"></td>
      <td><input class="radio-input2" type="radio" id="buhregular" name="buh" value="regular"></td>
      <td><input class="radio-input3" type="radio" id="buhmalo" name="buh" value="malo"></td>
    </tr>



    <tr>
      <td>
        Canaletes de tinas limpios de Moho, lama</td>
      <td><input class="radio-input" type="radio" id="ctlmbueno" name="ctlm" value="bueno"></td>
      <td><input class="radio-input2" type="radio" id="ctlmregular" name="ctlm" value="regular"></td>
      <td><input class="radio-input3" type="radio" id="ctlmmalo" name="ctlm" value="malo"></td>
    </tr>

    <tr>
      <td>
        Lavado de racimos con buena presión</td>
      <td><input class="radio-input" type="radio" id="lrcbpbueno" name="lrcbp" value="bueno"></td>
      <td><input class="radio-input2" type="radio" id="lrcbpregular" name="lrcbp" value="regular"></td>
      <td><input class="radio-input3" type="radio" id="lrcbpmalo" name="lrcbp" value="malo"></td>
    </tr>


  </table>


</div>
<div class="boton">
  <button id="boton-guardar_gc" class="btn btn-outline-info d-f mt-2" type="submit" name="guardar_gc" value="actualizado"
    style="margin-left: 265px;">Guardar</button>
</div>

</div>