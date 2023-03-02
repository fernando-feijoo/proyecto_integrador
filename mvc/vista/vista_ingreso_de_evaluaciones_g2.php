<?php
include_once "./../../layout/header.php";
include_once "./Grupo 2/menu.php";
?>
<div id="contenedor-escritorio-contenido" class="container-fluid col text-center pe-2 ps-0">
  <!-- Contenedor de escritorio *interno -->
  <div id="escritorio-contenido" class="container-fluid mt-1 mb-1 rounded-4">
    <div class="row">
      <!-- Titulo o encabezado del escritorio -->
      <div class="col-1 d-flex align-items-end mb-1">
        <a id="ico-home" href="./dashboard.php"><img src="./../../img/home_32x32-escritorio.png" alt="icono-home" /></a>
      </div>
      <div class="col-10 me-3 ms-3 mt-4">
        <div id="titulo-escritorio-listado">
          LISTADO DE EVALUACIONES 
        </div>
      </div>
      <!-- /Titulo o encabezado del escritorio -->
    </div>
        <div id="caja-separacion-escritorio" class="mx-auto"></div>

        <?php 
        include_once("./../modelo/conexion_bd.php");
        include_once ("./../controlador/Grupo 2/controlador_guardar_cajas.php");
        ?>

<table width="1152" height="200" border="2">
	<tr>
    <td>
    <?php
    if (!empty($_GET["g2_h"])) {
        $dat_eva_emp = $_GET["g2_h"];
    } else if(!empty($_GET["g2_hr"])) {
        $dat_eva_emp = $_GET["g2_hr"];
    }
    ?>
    <form action="./vista_ingreso_de_evaluaciones_g2.php?g2_hr=<?= $dat_eva_emp ?>" method="post">
    <div class="d-flex flex-row justify-content-center mb-3 ">
    <!-- <input type="text" value="<?= $_SESSION["g2_id_caj"]=$dat_eva_emp ?>"> -->
        <div class="p-2"> Embalador:
            <input type="number" style="width: 200px; height: 25px;;" name="g2_txt_embal" value="0">
        </div>
        <div class="p-2"> Peso Neto:
            <input type="TEXT" style="width: 200px; height: 25px;;" name="g2_txt_pes_net" value="0">
        </div>
    </div>
    </br>
    
    <div class="d-flex flex-row justify-content-center mb-3 ">
        <div class="p-2"> Par 4:
            <input type="number" style="width: 50px; height: 25px;" name="g2_txt_par_4" value="0">
        </div>
        <div class="p-2"> Par 6:
            <input type="number" style="width: 50px; height: 25px;;" name="g2_txt_par_6" value="0">
        </div>
        <div class="p-2"> Par 8:
            <input type="number" style="width: 50px; height: 25px;;" name="g2_txt_par_8" value="0">
        </div>
        <div class="p-2"> Impar 5:
            <input type="number" style="width: 50px; height: 25px;;" name="g2_txt_imp_5" value="0">
        </div>
        <div class="p-2"> Impar 7:
            <input type="number" style="width: 50px; height: 25px;;" name="g2_txt_imp_7" value="0">
        </div>
    </div>
    </br>
    <div class="d-flex flex-row justify-content-center mb-3 ">
        <div class="p-2"> Defectos Encontrados:
            <select class="selectpicker single-chapter-select" name="g2_txt_def_enc">
                <option class="short " data-limit="40" value="0" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Seleccione</font></font></option>
                
                <option class="short " data-limit="40" value="AB" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Pulpa Blanda/crema</font></font></option>
                <option class="short " data-limit="40" value="BM" ><font style="horizontal-align: inherit;"><font style="horizontal-align: inherit;">
                Colaspis</font></font></option>
                <option class="short " data-limit="40" value="BR" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Daño por Pulpa</font></font></option>
                <option class="short " data-limit="40" value="CC" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Cicaris de Crecimiento</font></font></option>
                <option class="short " data-limit="40" value="CH" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Chimera</font></font></option>
                <option class="short " data-limit="40" value="CI" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Daño Quimico</font></font></option>
                <option class="short " data-limit="40" value="CS" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Costra Gusano</font></font></option>

                <option class="short " data-limit="40" value="CT" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Corte de Cuchillo</font></font></option>
                <option class="short " data-limit="40" value="FF" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Dedos Mellisos</font></font></option>
                <option class="short " data-limit="40" value="FL" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Flores</font></font></option>
                <option class="short " data-limit="40" value="LF" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Cicatris de Hoja</font></font></option>
                <option class="short " data-limit="40" value="LG" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Latex Gelatinoso</font></font></option>
                <option class="short " data-limit="40" value="LS" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Latex Seco</font></font></option>
                <option class="short " data-limit="40" value="ML" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Mal Formado</font></font></option>

                <option class="short " data-limit="40" value="MF" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Dedos Mutilados</font></font></option>
                <option class="short " data-limit="40" value="NI" ><font style="horizontal-align: inherit;"><font style="horizontal-align: inherit;">
                Cuello Roto</font></font></option>
                <option class="short " data-limit="40" value="NS" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Exceso Grdo </font></font></option>
                <option class="short " data-limit="40" value="OG" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Sobre Grado</font></font></option>
                <option class="short " data-limit="40" value="PD" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Punto Jhonson</font></font></option>
                <option class="short " data-limit="40" value="PS" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Daño de Punta</font></font></option>
                <option class="short " data-limit="40" value="RR" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Mancha Roja</font></font></option>

                <option class="short " data-limit="40" value="SC" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Rasguño</font></font></option>
                <option class="short " data-limit="40" value="SD" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Escaldadura</font></font></option>
                <option class="short " data-limit="40" value="SK" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Speckling</font></font></option>
                <option class="short " data-limit="40" value="SM" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Fumagina</font></font></option>
                <option class="short " data-limit="40" value="SR" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Estropeo</font></font></option>
                <option class="short " data-limit="40" value="SRF" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Quema de Carton</font></font></option>
                <option class="short " data-limit="40" value="TC" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Moquillo</font></font></option>

                <option class="short " data-limit="40" value="TF" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Exceso de Cuñas</font></font></option>
                <option class="short " data-limit="40" value="TH" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Thrips</font></font></option>
                <option class="short " data-limit="40" value="TS" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Dedo Corto</font></font></option>
                <option class="short " data-limit="40" value="UD" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Decoracion Interior</font></font></option>
                <option class="short " data-limit="40" value="UG" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Bajo Grado</font></font></option>
                <option class="short " data-limit="40" value="WI" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Cochinilla</font></font></option>
                <option class="short " data-limit="40" value="WP" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Pedunculo Marchito</font></font></option>
                <option class="short " data-limit="40" value="YP" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Punta Amarilla</font></font></option>
            </select>
        </div>
        
        <div class="p-2"> Total Defectos:
            <input type="number" style="width: 200px; height: 25px;;" name="g2_txt_tot_def">
        </div>
    </div>
    <div class="d-flex flex-row justify-content-end ms-auto me-5 mb-1 mt-3">
        <div class="p-2">
            <button  id="g2_boton_nueva_caja" class="btn btn-outline-primary" type="submit" name="g2_btn_nuev_caj" value="guardado">Nueva caja</button>        
        </div>
    </div>
    </form>
    </td>
    </tr>
</table>
</br>

<table width="1152" height="200" border="2">
	<tr>
    <td>
        <?php 
        require("./vista_tabla_g2.php");
        ?>
    </td>
    </tr>
</table>

    </div>
</div>
<?php 
include_once "./../../layout/footer.php";
?>