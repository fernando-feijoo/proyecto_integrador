<script>
  document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('#boton-calcular_se').addEventListener('click', function () {

      const cluster1 = Number(document.querySelector('#id_cluster1').value);
      const cluster2 = Number(document.querySelector('#id_cluster2').value);
      const cluster3 = Number(document.querySelector('#id_cluster3').value);

      const id_ph1 = Number(document.querySelector('#id_ph1').value);
      const id_ph2 = Number(document.querySelector('#id_ph2').value);
      const id_ph3 = Number(document.querySelector('#id_ph3').value);

      const brs1 = Number(document.querySelector('#id_brs1').value);
      const brs2 = Number(document.querySelector('#id_brs2').value);
      const brs3 = Number(document.querySelector('#id_brs3').value);

      const cc1 = Number(document.querySelector('#id_cc1').value);
      const cc2 = Number(document.querySelector('#id_cc2').value);
      const cc3 = Number(document.querySelector('#id_cc3').value);

      const ct1 = Number(document.querySelector('#id_ct1').value);
      const ct2 = Number(document.querySelector('#id_ct2').value);
      const ct3 = Number(document.querySelector('#id_ct3').value);

      const lf1 = Number(document.querySelector('#id_lf1').value);
      const lf2 = Number(document.querySelector('#id_lf2').value);
      const lf3 = Number(document.querySelector('#id_lf3').value);

      const ni1 = Number(document.querySelector('#id_ni1').value);
      const ni2 = Number(document.querySelector('#id_ni2').value);
      const ni3 = Number(document.querySelector('#id_ni3').value);

      const ns1 = Number(document.querySelector('#id_ns1').value);
      const ns2 = Number(document.querySelector('#id_ns2').value);
      const ns3 = Number(document.querySelector('#id_ns3').value);

      const ps1 = Number(document.querySelector('#id_ps1').value);
      const ps2 = Number(document.querySelector('#id_ps2').value);
      const ps3 = Number(document.querySelector('#id_ps3').value);

      const sk1 = Number(document.querySelector('#id_sk1').value);
      const sk2 = Number(document.querySelector('#id_sk2').value);
      const sk3 = Number(document.querySelector('#id_sk3').value);

      const sr1 = Number(document.querySelector('#id_sr1').value);
      const sr2 = Number(document.querySelector('#id_sr2').value);
      const sr3 = Number(document.querySelector('#id_sr3').value);

      const tc1 = Number(document.querySelector('#id_tc1').value);
      const tc2 = Number(document.querySelector('#id_tc2').value);
      const tc3 = Number(document.querySelector('#id_tc3').value);

      const tf1 = Number(document.querySelector('#id_tf1').value);
      const tf2 = Number(document.querySelector('#id_tf2').value);
      const tf3 = Number(document.querySelector('#id_tf3').value);

      const yb1 = Number(document.querySelector('#id_yb1').value);
      const yb2 = Number(document.querySelector('#id_yb2').value);
      const yb3 = Number(document.querySelector('#id_yb3').value);

      const sc1 = Number(document.querySelector('#id_sc1').value);
      const sc2 = Number(document.querySelector('#id_sc2').value);
      const sc3 = Number(document.querySelector('#id_sc3').value);

      const dp1 = Number(document.querySelector('#id_dp1').value);
      const dp2 = Number(document.querySelector('#id_dp2').value);
      const dp3 = Number(document.querySelector('#id_dp3').value);

      const bre1 = Number(document.querySelector('#id_bre1').value);
      const bre2 = Number(document.querySelector('#id_bre2').value);
      const bre3 = Number(document.querySelector('#id_bre3').value);

      const sre1 = Number(document.querySelector('#id_sre1').value);
      const sre2 = Number(document.querySelector('#id_sre2').value);
      const sre3 = Number(document.querySelector('#id_sre3').value);

      const dpe1 = Number(document.querySelector('#id_dpe1').value);
      const dpe2 = Number(document.querySelector('#id_dpe2').value);
      const dpe3 = Number(document.querySelector('#id_dpe3').value);

      const srf1 = Number(document.querySelector('#id_srf1').value);
      const srf2 = Number(document.querySelector('#id_srf2').value);
      const srf3 = Number(document.querySelector('#id_srf3').value);

      const total_cluster = cluster1 + cluster2 + cluster3;

      const total_ph = (id_ph1 + id_ph2 + id_ph3)/3;

      const totald1 = brs1 + cc1 + lf1 + ni1 + ns1 + ps1 + sk1 + sr1 + tc1 + tf1 + yb1 + sc1 + dp1 + bre1 + sre1 + srf1 + dpe1;
      const totald2 = brs2 + cc2 + lf2 + ni2 + ns2 + ps2 + sk2 + sr2 + tc2 + tf2 + yb2 + sc2 + dp2 + bre2 + sre2 + srf2 + dpe2;
      const totald3 = brs3 + cc3 + lf3 + ni3 + ns3 + ps3 + sk3 + sr3 + tc3 + tf3 + yb3 + sc3 + dp3 + bre3 + sre3 + srf3 + dpe3;

      const total_defectos = totald1 + totald2 + totald3;
      
      const porcentaje = (total_defectos*100)/60;
      const porcentaje2 = (100-porcentaje);
      const promedio= (porcentaje2/100);
      

      document.querySelector('#id_total_cluster').value = total_cluster;

      document.querySelector('#id_totald1').value = totald1;
      document.querySelector('#id_totald2').value = totald2;
      document.querySelector('#id_totald3').value = totald3;

      document.querySelector('#id_total_defectos').value = total_defectos;

      document.querySelector('#id_total_ph').value = total_ph;

      document.querySelector('#id_defectos_porcentaje').value = promedio;
      
    });
  });
</script>

  <div class="Container">
    <div class="abreviaturas_eva" style="text-align: left;">
      <div class="row row-cols-6">
        <div class="col"><b>AB</b> Pulpa Blanda/crema</div>
        <div class="col"><b>CT</b> Corte cuchillo</div>
        <div class="col"><b>MF</b> Dedos Mutilados</div>
        <div class="col"><b>SC</b> Rasguño </div>
        <div class="col"><b>TF</b> Excaso de cuñas</div>
        <div class="col"><b>UD</b> Decoloracion Interior</div>
        <div class="col"><b>BM</b> Colapsis</div>
        <div class="col"><b>FF</b> Dedos Mellizos</div>
        <div class="col"><b>NI</b> Cuello Roto</div>
        <div class="col"><b>SD</b> Escaldadura</div>
        <div class="col"><b>TH</b> Trips</div>
        <div class="col"><b>BR</b> Daño de Pulpa</div>
        <div class="col"><b>FL</b> Flores</div>
        <div class="col"><b>NS</b> Exceso</div>
        <div class="col"><b>SK</b> Speckling</div>
        <div class="col"><b>TS</b> Dedo Corto</div>
        <div class="col"><b>CC</b> Cicatriz Crecimiento</div>
        <div class="col"><b>LF</b> Cicatriz de Hoja</div>
        <div class="col"><b>OG</b> Sobre grado</div>
        <div class="col"><b>SM</b> Fumagina</div>
        <div class="col"><b>YP</b> Punta Amarilla</div>
        <div class="col"><b>CH</b> Chimera</div>
        <div class="col"><b>LG</b> Latex Gelatinoso</div>
        <div class="col"><b>PD</b> Punto Jhonson</div>
        <div class="col"><b>SR</b> Estropeo</div>
        <div class="col"><b>UG</b> Bajo grado</div>
        <div class="col"><b>Cl</b> Daño químico</div>
        <div class="col"><b>LS</b> Latex Seco</div>
        <div class="col"><b>PS</b> Daño de punta</div>
        <div class="col"><b>SRF</b> Quema cartón</div>
        <div class="col"><b>WI</b> Cochinilla</div>
        <div class="col"><b>CS</b> Costra Gusano</div>
        <div class="col"><b>ML</b> Mál Formado</div>
        <div class="col"><b>RR</b> Manchá Roja</div>
        <div class="col"><b>TC</b> Moquillo</div>
        <div class="col"><b>WP</b> Pedunculo marchito</div>
      </div>
    </div>
    <br> </br>

    <table width="1230" height="76" border="1">
      <tbody>
        <tr>
          <td width="55" rowspan="2" align="center">Peso Neto Lb</td>
          <td width="58" rowspan="2" align="center">Cluster por caja</td>
          <td width="54" rowspan="2" align="center">PH</td>
          <td width="558" align="center">Selección</td>
          <td width="265" align="center">Empaque</td>
          <td width="200" rowspan="2" align="center">Total Defectos</td>
        </tr>
        <tr>
          <td>
            <table width="558" border="1" align="center">
              <tbody>
                <tr>
                  <td width="34" align="center">BR</td>
                  <td width="34" align="center">CC</td>
                  <td width="34" align="center">CT</td>
                  <td width="34" align="center">LF</td>
                  <td width="34" align="center">NI</td>
                  <td width="34" align="center">NS</td>
                  <td width="34" aliggssn="center">PS</td>
                  <td width="34" align="center">SK</td>
                  <td width="34" align="center">SR</td>
                  <td width="34" align="center">TC</td>
                  <td width="34" align="center">TF</td>
                  <td width="34" align="center">YB</td>
                  <td width="34" align="center">SC</td>
                  <td width="34" align="center">DP</td>
                </tr>
              </tbody>
            </table>
          </td>
          <td>
            <table width="264" borde="0" align="center">
              <tbody>
                <tr>
                  <td width="61" align="center">BR</td>
                  <td width="61" align="center">SR</td>
                  <td width="61" align="center">SRF</td>
                  <td width="61" align="center">DP</td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>      
    </table>

    <?php
if (($validacion = cargar_se_datos()) != false and ($valiacion = cargar_se()) != false) {
  $sql = cargar_se();
  $se = array();

  $sql_se_d = cargar_se_datos();
  while ($carga_datos = mysqli_fetch_assoc($sql)) {
    $se[] = $carga_datos;
  }
  while ($fila1 = $sql_se_d->fetch_object()) {

  ?>
   <!--  peso,cluster,ph-->
   <div class="menu1 d-flex">
      <div class="peso1">
        <input id="id_peso1" class="class_peso1" type="number" value="<?php echo $se[0]['peso_neto_caja']?>"
          style="width: 58px; margin-top: 5px; margin-right:3px;" name="name_peso1">
      </div>

      <div class="cluster1">
        <input id="id_cluster1" class="class_cluster1" type="number" value="<?php echo $se[0]['cluster_caja']?>"
          style="width: 56px; margin-top: 5px;margin-right:3px;" name="name_cluster1">
      </div>

      <div class="ph1">
        <input id="id_ph1" class="class_ph1" type="number" value="<?php echo $se[0]['ph']?>" style="width: 53px; margin-top: 5px;"
          name="name_ph1">
      </div>
      <!--  seleccion-->
      <div class="seleccion d-flex">
        <div class="brs1">
          <input id="id_brs1" class="class_brs1" type="number" value="<?php echo $se[0]['sel_br']?>"
            style="width: 38px; margin-top: 5px; margin-right:3px; margin-left:4px;" name="name_brs1">
        </div>

        <div class="cc1">
          <input id="id_cc1" class="class_cc1" type="number" value="<?php echo $se[0]['sel_cc']?>"
            style="width: 38px; margin-top: 5px;margin-right:3px;" name="name_cc1">
        </div>

        <div class="ct1">
          <input id="id_ct1" class="class_ct1" type="number" value="<?php echo $se[0]['sel_ct']?>"
            style="width: 38px; margin-top: 5px;margin-right:3px;" name="name_ct1">
        </div>

        <div class="lf1">
          <input id="id_lf1" class="class_lf1" type="number" value="<?php echo $se[0]['sel_lf']?>"
            style="width: 38px; margin-top: 5px;margin-right:3px;" name="name_lf1">
        </div>
        <div class="ni1">
          <input id="id_ni1" class="class_ni1" type="number" value="<?php echo $se[0]['sel_ni']?>"
            style="width: 38px; margin-top: 5px; margin-right:3px;" name="name_ni1">
        </div>
        <div class="ns1">
          <input id="id_ns1" class="class_ns1" type="number" value="<?php echo $se[0]['sel_ns']?>"
            style="width: 37px; margin-top: 5px; margin-right:3px;" name="name_ns1">
        </div>
        <div class="ps1">
          <input id="id_ps1" class="class_ps1" type="number" value="<?php echo $se[0]['sel_ps']?>"
            style="width: 36px; margin-top: 5px; margin-right:3px;" name="name_ps1">
        </div>
        <div class="sk1">
          <input id="id_sk1" class="class_sk1" type="number" value="<?php echo $se[0]['sel_sk']?>"
            style="width: 36px; margin-top: 5px; margin-right:3px;" name="name_sk1">
        </div>
        <div class="sr1">
          <input id="id_sr1" class="class_sr1" type="number" value="<?php echo $se[0]['sel_sr']?>"
            style="width: 36px; margin-top: 5px; margin-right:3px;" name="name_sr1">
        </div>
        <div class="tc1">
          <input id="id_tc1" class="class_tc1" type="number" value="<?php echo $se[0]['sel_tc']?>"
            style="width: 37px; margin-top: 5px; margin-right:3px;" name="name_tc1">
        </div>

        <div class="tf1">
          <input id="id_tf1" class="class_tf1" type="number" value="<?php echo $se[0]['sel_tf']?>"
            style="width: 37px; margin-top: 5px; margin-right:3px;" name="name_tf1">
        </div>

        <div class="yb1">
          <input id="id_yb1" class="class_yb1" type="number" value="<?php echo $se[0]['sel_yb']?>"
            style="width: 38px; margin-top: 5px; margin-right:3px;" name="name_yb1">
        </div>

        <div class="sc1">
          <input id="id_sc1" class="class_sc1" type="number" value="<?php echo $se[0]['sel_sc']?>"
            style="width: 39px; margin-top: 5px; margin-right:3px;" name="name_sc1">
        </div>
        <div class="dp1">
          <input id="id_dp1" class="class_dp1" type="number" value="<?php echo $se[0]['sel_dp']?>"
            style="width: 41px; margin-top: 5px; margin-right:8px;" name="name_dp1">
        </div>
        <!--  empaque-->
        <div class="empaque d-flex">
          <div class="bre1">
            <input id="id_bre1" class="class_bre1" type="number" value="<?php echo $se[0]['emp_br']?>"
              style="width: 65px; margin-top: 5px; margin-right:4px;margin-left:1px;" name="name_bre1">
          </div>
          <div class="sre1">
            <input id="id_sre1" class="class_sre1" type="number" value="<?php echo $se[0]['emp_sr']?>"
              style="width: 65px; margin-top: 5px; margin-right:4px;" name="name_sre1">
          </div>
          <div class="srf1">
            <input id="id_srf1" class="class_srf1" type="number" value="<?php echo $se[0]['emp_srf']?>"
              style="width: 60px; margin-top: 5px; margin-right:4px;" name="name_srf1">
          </div>
          <div class="dpe1">
            <input id="id_dpe1" class="class_dpe1" type="number" value="<?php echo $se[0]['emp_dp']?>"
              style="width: 63px; margin-top: 5px; margin-right:8px;" name="name_dpe1">
          </div>
          <!--  total defectos-->
          <div class="total_defectos d-flex">
            <div class="totald1">
              <input id="id_totald1" class="class_totald1" type="number" value="<?php echo $se[0]['tot_fila']?>"
                style="width: 203px; margin-top: 5px; margin-right:4px; margin-left:1px;" name="name_totald1">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Fila 2 -->
    <!--  peso,cluster,ph-->
    <div class="menu2 d-flex">
      <div class="peso2">
        <input id="id_peso2" class="class_peso2" type="number" value="<?php echo $se[1]['peso_neto_caja']?>"
          style="width: 58px; margin-top: 5px; margin-right:3px;" name="name_peso2">
      </div>

      <div class="cluster2">
        <input id="id_cluster2" class="class_cluster2" type="number" value="<?php echo $se[1]['cluster_caja']?>"
          style="width: 56px; margin-top: 5px;margin-right:3px;" name="name_cluster2">
      </div>

      <div class="ph2">
        <input id="id_ph2" class="class_ph2" type="number" value="<?php echo $se[1]['ph']?>" style="width: 53px; margin-top: 5px;"
          name="name_ph2">
      </div>
      <!--  seleccion-->
      <div class="seleccion d-flex">
        <div class="brs2">
          <input id="id_brs2" class="class_brs2" type="number" value="<?php echo $se[1]['sel_br']?>"
            style="width: 38px; margin-top: 5px; margin-right:3px; margin-left:4px;" name="name_brs2">
        </div>

        <div class="cc2">
          <input id="id_cc2" class="class_cc2" type="number" value="<?php echo $se[1]['sel_cc']?>"
            style="width: 38px; margin-top: 5px;margin-right:3px;" name="name_cc2">
        </div>

        <div class="ct2">
          <input id="id_ct2" class="class_ct2" type="number" value="<?php echo $se[1]['sel_ct']?>"
            style="width: 38px; margin-top: 5px;margin-right:3px;" name="name_ct2">
        </div>

        <div class="lf2">
          <input id="id_lf2" class="class_lf2" type="number" value="<?php echo $se[1]['sel_lf']?>"
            style="width: 38px; margin-top: 5px;margin-right:3px;" name="name_lf2">
        </div>
        <div class="ni2">
          <input id="id_ni2" class="class_ni2" type="number" value="<?php echo $se[1]['sel_ni']?>"
            style="width: 38px; margin-top: 5px; margin-right:3px;" name="name_ni2">
        </div>
        <div class="ns2">
          <input id="id_ns2" class="class_ns2" type="number" value="<?php echo $se[1]['sel_ns']?>"
            style="width: 37px; margin-top: 5px; margin-right:3px;" name="name_ns2">
        </div>
        <div class="ps2">
          <input id="id_ps2" class="class_ps2" type="number" value="<?php echo $se[1]['sel_ps']?>"
            style="width: 36px; margin-top: 5px; margin-right:3px;" name="name_ps2">
        </div>
        <div class="sk2">
          <input id="id_sk2" class="class_sk2" type="number" value="<?php echo $se[1]['sel_sk']?>"
            style="width: 36px; margin-top: 5px; margin-right:3px;" name="name_sk2">
        </div>
        <div class="sr2">
          <input id="id_sr2" class="class_sr2" type="number" value="<?php echo $se[1]['sel_sr']?>"
            style="width: 36px; margin-top: 5px; margin-right:3px;" name="name_sr2">
        </div>
        <div class="tc2">
          <input id="id_tc2" class="class_tc2" type="number" value="<?php echo $se[1]['sel_tc']?>"
            style="width: 37px; margin-top: 5px; margin-right:3px;" name="name_tc2">
        </div>

        <div class="tf2">
          <input id="id_tf2" class="class_tf2" type="number" value="<?php echo $se[1]['sel_tf']?>"
            style="width: 37px; margin-top: 5px; margin-right:3px;" name="name_tf2">
        </div>

        <div class="yb2">
          <input id="id_yb2" class="class_yb2" type="number" value="<?php echo $se[1]['sel_yb']?>"
            style="width: 38px; margin-top: 5px; margin-right:3px;" name="name_yb2">
        </div>

        <div class="sc2">
          <input id="id_sc2" class="class_sc2" type="number" value="<?php echo $se[1]['sel_sc']?>"
            style="width: 39px; margin-top: 5px; margin-right:3px;" name="name_sc2">
        </div>
        <div class="dp2">
          <input id="id_dp2" class="class_dp2" type="number" value="<?php echo $se[1]['sel_dp']?>"
            style="width: 42px; margin-top: 5px; margin-right:8px;" name="name_dp2">
        </div>
        <!--  empaque-->
        <div class="empaque d-flex">

          <div class="bre2">
            <input id="id_bre2" class="class_bre2" type="number" value="<?php echo $se[1]['emp_br']?>"
              style="width: 65px; margin-top: 5px; margin-right:4px;margin-left:1px;" name="name_bre2">
          </div>
          <div class="sre2">
            <input id="id_sre2" class="class_sre2" type="number" value="<?php echo $se[1]['emp_sr']?>"
              style="width: 65px; margin-top: 5px; margin-right:4px;" name="name_sre2">
          </div>
          <div class="srf2">
            <input id="id_srf2" class="class_srf2" type="number" value="<?php echo $se[1]['emp_srf']?>"
              style="width: 60px; margin-top: 5px; margin-right:4px;" name="name_srf2">
          </div>
          <div class="dpe2">
            <input id="id_dpe2" class="class_dpe2" type="number" value="<?php echo $se[1]['emp_dp']?>"
              style="width: 63px; margin-top: 5px; margin-right:8px;" name="name_dpe2">
          </div>
          <!--  total defectos-->
          <div class="total_defectos d-flex">
            <div class="totald2">
              <input id="id_totald2" class="class_totald2" type="number" value="<?php echo $se[1]['tot_fila']?>"
                style="width: 203px; margin-top: 5px; margin-right:4px; margin-left:1px;" name="name_totald2">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- fila 3 --->
    <!--  peso,cluster,ph-->
    <div class="menu3 d-flex">
      <div class="peso3">
        <input id="id_peso3" class="class_peso3" type="number" value="<?php echo $se[2]['peso_neto_caja']?>"
          style="width: 58px; margin-top: 5px; margin-right:3px;" name="name_peso3">
      </div>

      <div class="cluster3">
        <input id="id_cluster3" class="class_cluster3" type="number" value="<?php echo $se[2]['cluster_caja']?>"
          style="width: 56px; margin-top: 5px;margin-right:3px;" name="name_cluster3">
      </div>

      <div class="ph3">
        <input id="id_ph3" class="class_ph3" type="number" value="<?php echo $se[2]['ph']?>" style="width: 53px; margin-top: 5px;"
          name="name_ph3">
      </div>

      <!--  seleccion-->
      <div class="seleccion d-flex">
        <div class="brs3">
          <input id="id_brs3" class="class_brs3" type="number" value="<?php echo $se[2]['sel_br']?>"
            style="width: 38px; margin-top: 5px; margin-right:3px; margin-left:4px;" name="name_brs3">
        </div>

        <div class="cc3">
          <input id="id_cc3" class="class_cc3" type="number" value="<?php echo $se[2]['sel_cc']?>"
            style="width: 38px; margin-top: 5px;margin-right:3px;" name="name_cc3">
        </div>

        <div class="ct3">
          <input id="id_ct3" class="class_ct3" type="number" value="<?php echo $se[2]['sel_ct']?>"
            style="width: 38px; margin-top: 5px;margin-right:3px;" name="name_ct3">
        </div>

        <div class="lf3">
          <input id="id_lf3" class="class_lf3" type="number" value="<?php echo $se[2]['sel_lf']?>"
            style="width: 38px; margin-top: 5px;margin-right:3px;" name="name_lf3">
        </div>
        <div class="ni3">
          <input id="id_ni3" class="class_ni3" type="number" value="<?php echo $se[2]['sel_ni']?>"
            style="width: 38px; margin-top: 5px; margin-right:3px;" name="name_ni3">
        </div>
        <div class="ns3">
          <input id="id_ns3" class="class_ns3" type="number" value="<?php echo $se[2]['sel_ns']?>"
            style="width: 37px; margin-top: 5px; margin-right:3px;" name="name_ns3">
        </div>
        <div class="ps3">
          <input id="id_ps3" class="class_ps3" type="number" value="<?php echo $se[2]['sel_ps']?>"
            style="width: 36px; margin-top: 5px; margin-right:3px;" name="name_ps3">
        </div>
        <div class="sk3">
          <input id="id_sk3" class="class_sk3" type="number" value="<?php echo $se[2]['sel_sk']?>"
            style="width: 36px; margin-top: 5px; margin-right:3px;" name="name_sk3">
        </div>
        <div class="sr3">
          <input id="id_sr3" class="class_sr3" type="number" value="<?php echo $se[2]['sel_sr']?>"
            style="width: 36px; margin-top: 5px; margin-right:3px;" name="name_sr3">
        </div>
        <div class="tc3">
          <input id="id_tc3" class="class_tc3" type="number" value="<?php echo $se[2]['sel_tc']?>"
            style="width: 37px; margin-top: 5px; margin-right:3px;" name="name_tc3">
        </div>

        <div class="tf3">
          <input id="id_tf3" class="class_tf3" type="number" value="<?php echo $se[2]['sel_tf']?>"
            style="width: 37px; margin-top: 5px; margin-right:3px;" name="name_tf3">
        </div>

        <div class="yb3">
          <input id="id_yb3" class="class_yb3" type="number" value="<?php echo $se[2]['sel_yb']?>"
            style="width: 38px; margin-top: 5px; margin-right:3px;" name="name_yb3">
        </div>

        <div class="sc3">
          <input id="id_sc3" class="class_sc3" type="number" value="<?php echo $se[2]['sel_sc']?>"
            style="width: 39px; margin-top: 5px; margin-right:3px;" name="name_sc3">
        </div>
        <div class="dp3">
          <input id="id_dp3" class="class_dp3" type="number" value="<?php echo $se[2]['sel_dp']?>"
            style="width: 43px; margin-top: 5px; margin-right:8px;" name="name_dp3">
        </div>

        <!--  empaque-->
        <div class="empaque d-flex">

          <div class="bre3">
            <input id="id_bre3" class="class_bre3" type="number" value="<?php echo $se[2]['emp_br']?>"
              style="width: 65px; margin-top: 5px; margin-right:4px;margin-left:1px;" name="name_bre3">
          </div>
          <div class="sre3">
            <input id="id_sre3" class="class_sre3" type="number" value="<?php echo $se[2]['emp_sr']?>"
              style="width: 65px; margin-top: 5px; margin-right:4px;" name="name_sre3">
          </div>
          <div class="srf3">
            <input id="id_srf3" class="class_srf3" type="number" value="<?php echo $se[2]['emp_srf']?>"
              style="width: 60px; margin-top: 5px; margin-right:4px;" name="name_srf3">
          </div>
          <div class="dpe3">
            <input id="id_dpe3" class="class_dpe3" type="number" value="<?php echo $se[2]['emp_dp']?>"
              style="width: 63px; margin-top: 5px; margin-right:8px;" name="name_dpe3">
          </div>

          <!--  total defectos-->
          <div class="total_defectos d-flex">
            <div class="totald3">
              <input id="id_totald3" class="class_totald3" type="number" value="<?php echo $se[2]['tot_fila']?>"
                style="width: 201px; margin-top: 5px; margin-right:4px; margin-left:1px;" name="name_totald3">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- total peso,cluster,ph-->
    <div class="total_cphd d-flex">

      <div style="display: flex; justify-content: center; align-items: center; height: 6vh;">
        <h6 style="margin-left: 10px;"> Total:</h6>
      </div>


      <div class="total_cluster">
        <input id="id_total_cluster" class="class_total_cluster" type="number" value="<?=$fila1->total_cluster?>"
          style="width: 55px; margin-top: 5px; margin-left:13px;" name="total_cluster">
      </div>

      <div class="total_ph">
        <input id="id_total_ph" class="class_total_ph" type="number" value="<?=$fila1->total_ph?>"
          style="width: 51px; margin-top: 5px; margin-left:4px;" name="total_ph">
      </div>

      <div class="total_defectos">
        <input id="id_total_defectos" class="class_total_defectos" type="number" value="<?=$fila1->total_defectos?>"
          style="width: 202px; margin-top: 5px; margin-left:855px;" name="total_defectos">
      </div>

    </div>

    <!-- % peso,cluster,ph-->
    <div class="total_porcentaje d-flex">

    <div class="p-2">
        <button id="boton-calcular_se" class="btn btn-outline-info" type="button" value="actualizado">Calcular</button>
      </div>

      <div class="total_defectos_porcentaje">
        <input id="id_defectos_porcentaje" class="class_defectos_porcentaje" type="text" value="<?=$fila1->promedio_tot?>"
          style="width: 202px; margin-top: 5px; margin-left:930px;" name="porcentaje">
      </div>

    </div>

    <div class="div_observaciones d-flex">
      <div class="p-2 left" style="font-weight: bold;">OBSERVACIONES:</div>
      <input class="observaciones_empaque text-uppercase" type="text" placeholder="Ingresar Observaciones"
        style="height: 30px; width: 84.5%;" value="<?=$fila1->observacion?>" name="name_observaciones_empaque">
    </div>
  </div>

  <?php }}else{?>
    <!--  peso,cluster,ph-->
    <div class="menu1 d-flex">
      <div class="peso1">
        <input id="id_peso1" class="class_peso1" type="number" value=" "
          style="width: 58px; margin-top: 5px; margin-right:3px;" name="name_peso1">
      </div>

      <div class="cluster1">
        <input id="id_cluster1" class="class_cluster1" type="number" value=" "
          style="width: 56px; margin-top: 5px;margin-right:3px;" name="name_cluster1">
      </div>

      <div class="ph1">
        <input id="id_ph1" class="class_ph1" type="number" value=" " style="width: 53px; margin-top: 5px;"
          name="name_ph1">
      </div>
      <!--  seleccion-->
      <div class="seleccion d-flex">
        <div class="brs1">
          <input id="id_brs1" class="class_brs1" type="number" value=" "
            style="width: 38px; margin-top: 5px; margin-right:3px; margin-left:4px;" name="name_brs1">
        </div>

        <div class="cc1">
          <input id="id_cc1" class="class_cc1" type="number" value=" "
            style="width: 38px; margin-top: 5px;margin-right:3px;" name="name_cc1">
        </div>

        <div class="ct1">
          <input id="id_ct1" class="class_ct1" type="number" value=" "
            style="width: 38px; margin-top: 5px;margin-right:3px;" name="name_ct1">
        </div>

        <div class="lf1">
          <input id="id_lf1" class="class_lf1" type="number" value=" "
            style="width: 38px; margin-top: 5px;margin-right:3px;" name="name_lf1">
        </div>
        <div class="ni1">
          <input id="id_ni1" class="class_ni1" type="number" value=" "
            style="width: 38px; margin-top: 5px; margin-right:3px;" name="name_ni1">
        </div>
        <div class="ns1">
          <input id="id_ns1" class="class_ns1" type="number" value=" "
            style="width: 37px; margin-top: 5px; margin-right:3px;" name="name_ns1">
        </div>
        <div class="ps1">
          <input id="id_ps1" class="class_ps1" type="number" value=" "
            style="width: 36px; margin-top: 5px; margin-right:3px;" name="name_ps1">
        </div>
        <div class="sk1">
          <input id="id_sk1" class="class_sk1" type="number" value=" "
            style="width: 36px; margin-top: 5px; margin-right:3px;" name="name_sk1">
        </div>
        <div class="sr1">
          <input id="id_sr1" class="class_sr1" type="number" value=" "
            style="width: 36px; margin-top: 5px; margin-right:3px;" name="name_sr1">
        </div>
        <div class="tc1">
          <input id="id_tc1" class="class_tc1" type="number" value=" "
            style="width: 37px; margin-top: 5px; margin-right:3px;" name="name_tc1">
        </div>

        <div class="tf1">
          <input id="id_tf1" class="class_tf1" type="number" value=" "
            style="width: 37px; margin-top: 5px; margin-right:3px;" name="name_tf1">
        </div>

        <div class="yb1">
          <input id="id_yb1" class="class_yb1" type="number" value=" "
            style="width: 38px; margin-top: 5px; margin-right:3px;" name="name_yb1">
        </div>

        <div class="sc1">
          <input id="id_sc1" class="class_sc1" type="number" value=" "
            style="width: 39px; margin-top: 5px; margin-right:3px;" name="name_sc1">
        </div>
        <div class="dp1">
          <input id="id_dp1" class="class_dp1" type="number" value=" "
            style="width: 41px; margin-top: 5px; margin-right:8px;" name="name_dp1">
        </div>
        <!--  empaque-->
        <div class="empaque d-flex">
          <div class="bre1">
            <input id="id_bre1" class="class_bre1" type="number" value=" "
              style="width: 65px; margin-top: 5px; margin-right:4px;margin-left:1px;" name="name_bre1">
          </div>
          <div class="sre1">
            <input id="id_sre1" class="class_sre1" type="number" value=" "
              style="width: 65px; margin-top: 5px; margin-right:4px;" name="name_sre1">
          </div>
          <div class="srf1">
            <input id="id_srf1" class="class_srf1" type="number" value=" "
              style="width: 60px; margin-top: 5px; margin-right:4px;" name="name_srf1">
          </div>
          <div class="dpe1">
            <input id="id_dpe1" class="class_dpe1" type="number" value=" "
              style="width: 63px; margin-top: 5px; margin-right:8px;" name="name_dpe1">
          </div>
          <!--  total defectos-->
          <div class="total_defectos d-flex">
            <div class="totald1">
              <input id="id_totald1" class="class_totald1" type="number" value=" "
                style="width: 203px; margin-top: 5px; margin-right:4px; margin-left:1px;" name="name_totald1">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Fila 2 -->
    <!--  peso,cluster,ph-->
    <div class="menu2 d-flex">
      <div class="peso2">
        <input id="id_peso2" class="class_peso2" type="number" value=" "
          style="width: 58px; margin-top: 5px; margin-right:3px;" name="name_peso2">
      </div>

      <div class="cluster2">
        <input id="id_cluster2" class="class_cluster2" type="number" value=" "
          style="width: 56px; margin-top: 5px;margin-right:3px;" name="name_cluster2">
      </div>

      <div class="ph2">
        <input id="id_ph2" class="class_ph2" type="number" value=" " style="width: 53px; margin-top: 5px;"
          name="name_ph2">
      </div>
      <!--  seleccion-->
      <div class="seleccion d-flex">
        <div class="brs2">
          <input id="id_brs2" class="class_brs2" type="number" value=" "
            style="width: 38px; margin-top: 5px; margin-right:3px; margin-left:4px;" name="name_brs2">
        </div>

        <div class="cc2">
          <input id="id_cc2" class="class_cc2" type="number" value=" "
            style="width: 38px; margin-top: 5px;margin-right:3px;" name="name_cc2">
        </div>

        <div class="ct2">
          <input id="id_ct2" class="class_ct2" type="number" value=" "
            style="width: 38px; margin-top: 5px;margin-right:3px;" name="name_ct2">
        </div>

        <div class="lf2">
          <input id="id_lf2" class="class_lf2" type="number" value=" "
            style="width: 38px; margin-top: 5px;margin-right:3px;" name="name_lf2">
        </div>
        <div class="ni2">
          <input id="id_ni2" class="class_ni2" type="number" value=" "
            style="width: 38px; margin-top: 5px; margin-right:3px;" name="name_ni2">
        </div>
        <div class="ns2">
          <input id="id_ns2" class="class_ns2" type="number" value=" "
            style="width: 37px; margin-top: 5px; margin-right:3px;" name="name_ns2">
        </div>
        <div class="ps2">
          <input id="id_ps2" class="class_ps2" type="number" value=" "
            style="width: 36px; margin-top: 5px; margin-right:3px;" name="name_ps2">
        </div>
        <div class="sk2">
          <input id="id_sk2" class="class_sk2" type="number" value=" "
            style="width: 36px; margin-top: 5px; margin-right:3px;" name="name_sk2">
        </div>
        <div class="sr2">
          <input id="id_sr2" class="class_sr2" type="number" value=" "
            style="width: 36px; margin-top: 5px; margin-right:3px;" name="name_sr2">
        </div>
        <div class="tc2">
          <input id="id_tc2" class="class_tc2" type="number" value=" "
            style="width: 37px; margin-top: 5px; margin-right:3px;" name="name_tc2">
        </div>

        <div class="tf2">
          <input id="id_tf2" class="class_tf2" type="number" value=" "
            style="width: 37px; margin-top: 5px; margin-right:3px;" name="name_tf2">
        </div>

        <div class="yb2">
          <input id="id_yb2" class="class_yb2" type="number" value=" "
            style="width: 38px; margin-top: 5px; margin-right:3px;" name="name_yb2">
        </div>

        <div class="sc2">
          <input id="id_sc2" class="class_sc2" type="number" value=" "
            style="width: 39px; margin-top: 5px; margin-right:3px;" name="name_sc2">
        </div>
        <div class="dp2">
          <input id="id_dp2" class="class_dp2" type="number" value=" "
            style="width: 42px; margin-top: 5px; margin-right:8px;" name="name_dp2">
        </div>
        <!--  empaque-->
        <div class="empaque d-flex">

          <div class="bre2">
            <input id="id_bre2" class="class_bre2" type="number" value=" "
              style="width: 65px; margin-top: 5px; margin-right:4px;margin-left:1px;" name="name_bre2">
          </div>
          <div class="sre2">
            <input id="id_sre2" class="class_sre2" type="number" value=" "
              style="width: 65px; margin-top: 5px; margin-right:4px;" name="name_sre2">
          </div>
          <div class="srf2">
            <input id="id_srf2" class="class_srf2" type="number" value=" "
              style="width: 60px; margin-top: 5px; margin-right:4px;" name="name_srf2">
          </div>
          <div class="dpe2">
            <input id="id_dpe2" class="class_dpe2" type="number" value=" "
              style="width: 63px; margin-top: 5px; margin-right:8px;" name="name_dpe2">
          </div>
          <!--  total defectos-->
          <div class="total_defectos d-flex">
            <div class="totald2">
              <input id="id_totald2" class="class_totald2" type="number" value=" "
                style="width: 203px; margin-top: 5px; margin-right:4px; margin-left:1px;" name="name_totald2">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- fila 3 --->
    <!--  peso,cluster,ph-->
    <div class="menu3 d-flex">
      <div class="peso3">
        <input id="id_peso3" class="class_peso3" type="number" value=" "
          style="width: 58px; margin-top: 5px; margin-right:3px;" name="name_peso3">
      </div>

      <div class="cluster3">
        <input id="id_cluster3" class="class_cluster3" type="number" value=" "
          style="width: 56px; margin-top: 5px;margin-right:3px;" name="name_cluster3">
      </div>

      <div class="ph3">
        <input id="id_ph3" class="class_ph3" type="number" value=" " style="width: 53px; margin-top: 5px;"
          name="name_ph3">
      </div>

      <!--  seleccion-->
      <div class="seleccion d-flex">
        <div class="brs3">
          <input id="id_brs3" class="class_brs3" type="number" value=" "
            style="width: 38px; margin-top: 5px; margin-right:3px; margin-left:4px;" name="name_brs3">
        </div>

        <div class="cc3">
          <input id="id_cc3" class="class_cc3" type="number" value=" "
            style="width: 38px; margin-top: 5px;margin-right:3px;" name="name_cc3">
        </div>

        <div class="ct3">
          <input id="id_ct3" class="class_ct3" type="number" value=" "
            style="width: 38px; margin-top: 5px;margin-right:3px;" name="name_ct3">
        </div>

        <div class="lf3">
          <input id="id_lf3" class="class_lf3" type="number" value=" "
            style="width: 38px; margin-top: 5px;margin-right:3px;" name="name_lf3">
        </div>
        <div class="ni3">
          <input id="id_ni3" class="class_ni3" type="number" value=" "
            style="width: 38px; margin-top: 5px; margin-right:3px;" name="name_ni3">
        </div>
        <div class="ns3">
          <input id="id_ns3" class="class_ns3" type="number" value=" "
            style="width: 37px; margin-top: 5px; margin-right:3px;" name="name_ns3">
        </div>
        <div class="ps3">
          <input id="id_ps3" class="class_ps3" type="number" value=" "
            style="width: 36px; margin-top: 5px; margin-right:3px;" name="name_ps3">
        </div>
        <div class="sk3">
          <input id="id_sk3" class="class_sk3" type="number" value=" "
            style="width: 36px; margin-top: 5px; margin-right:3px;" name="name_sk3">
        </div>
        <div class="sr3">
          <input id="id_sr3" class="class_sr3" type="number" value=" "
            style="width: 36px; margin-top: 5px; margin-right:3px;" name="name_sr3">
        </div>
        <div class="tc3">
          <input id="id_tc3" class="class_tc3" type="number" value=" "
            style="width: 37px; margin-top: 5px; margin-right:3px;" name="name_tc3">
        </div>

        <div class="tf3">
          <input id="id_tf3" class="class_tf3" type="number" value=" "
            style="width: 37px; margin-top: 5px; margin-right:3px;" name="name_tf3">
        </div>

        <div class="yb3">
          <input id="id_yb3" class="class_yb3" type="number" value=" "
            style="width: 38px; margin-top: 5px; margin-right:3px;" name="name_yb3">
        </div>

        <div class="sc3">
          <input id="id_sc3" class="class_sc3" type="number" value=" "
            style="width: 39px; margin-top: 5px; margin-right:3px;" name="name_sc3">
        </div>
        <div class="dp3">
          <input id="id_dp3" class="class_dp3" type="number" value=" "
            style="width: 43px; margin-top: 5px; margin-right:8px;" name="name_dp3">
        </div>

        <!--  empaque-->
        <div class="empaque d-flex">

          <div class="bre3">
            <input id="id_bre3" class="class_bre3" type="number" value=" "
              style="width: 65px; margin-top: 5px; margin-right:4px;margin-left:1px;" name="name_bre3">
          </div>
          <div class="sre3">
            <input id="id_sre3" class="class_sre3" type="number" value=" "
              style="width: 65px; margin-top: 5px; margin-right:4px;" name="name_sre3">
          </div>
          <div class="srf3">
            <input id="id_srf3" class="class_srf3" type="number" value=" "
              style="width: 60px; margin-top: 5px; margin-right:4px;" name="name_srf3">
          </div>
          <div class="dpe3">
            <input id="id_dpe3" class="class_dpe3" type="number" value=" "
              style="width: 63px; margin-top: 5px; margin-right:8px;" name="name_dpe3">
          </div>

          <!--  total defectos-->
          <div class="total_defectos d-flex">
            <div class="totald3">
              <input id="id_totald3" class="class_totald3" type="number" value=" "
                style="width: 201px; margin-top: 5px; margin-right:4px; margin-left:1px;" name="name_totald3">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- total peso,cluster,ph-->
    <div class="total_cphd d-flex">

      <div style="display: flex; justify-content: center; align-items: center; height: 6vh;">
        <h6 style="margin-left: 10px;"> Total:</h6>
      </div>


      <div class="total_cluster">
        <input id="id_total_cluster" class="class_total_cluster" type="number" value=" "
          style="width: 55px; margin-top: 5px; margin-left:13px;" name="total_cluster">
      </div>

      <div class="total_ph">
        <input id="id_total_ph" class="class_total_ph" type="number" value=" "
          style="width: 51px; margin-top: 5px; margin-left:4px;" name="total_ph">
      </div>

      <div class="total_defectos">
        <input id="id_total_defectos" class="class_total_defectos" type="number" value=" "
          style="width: 202px; margin-top: 5px; margin-left:855px;" name="total_defectos">
      </div>

    </div>

    <!-- % peso,cluster,ph-->
    <div class="total_porcentaje d-flex">

    <div class="p-2">
        <button id="boton-calcular_se" class="btn btn-outline-info" type="button" value="actualizado">Calcular</button>
      </div>

      <div class="total_defectos_porcentaje">
        <input id="id_defectos_porcentaje" class="class_defectos_porcentaje" type="text" value=" "
          style="width: 202px; margin-top: 5px; margin-left:930px;" name="porcentaje">
      </div>

    </div>

    <div class="div_observaciones d-flex">
      <div class="p-2 left" style="font-weight: bold;">OBSERVACIONES:</div>
      <input class="observaciones_empaque text-uppercase" type="text" placeholder="Ingresar Observaciones"
        style="height: 30px; width: 84.5%;" value="" name="name_observaciones_empaque">
    </div>
  </div>
<?php }?>

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