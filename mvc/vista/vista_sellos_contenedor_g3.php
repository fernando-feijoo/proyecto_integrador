<?php
			include_once("./../modelo/conexion_bd.php");
			include_once "./../controlador/Grupo 3/registro_sellos.php";
			
			?>

    <div id="inicio-datos" class="row mx-auto">

    <form action="./vista_listado_registro_g3.php" method="post">
    <?php
  
    if (!empty($_GET["id_regis"]) || !empty($_GET["numCont"])) {


        $_SESSION["numCont"] = $_GET["numCont"];
        $_SESSION["id_regis"] = $_GET["id_regis"];

      

        

    }
    

    ?>

    
        <div class="containe text-start m-1">
            <div class="row">
                <div class="col form-check form-check-inline ms-2 fs-5 fw-semibold">
                    Sellos Internos:
                    <div id="linea-separacion-pequeña">
                    </div>
                </div>
                <div class="col-7 accordion-collapseform-check form-check-inline fs-5 fw-semibold " style="margin-right: 100px;">
                    Sellos Externos:
                    <div id="linea-separacion-grande"></div>

                </div>

                <div class="row-cols-4">
                    <div class="d-flex flex-row  ">
                        <div class="p-2 ">
                            <input class="text-uppercase mb-2 " type="text" placeholder="sello interno" name='sello_interno1' style="width: 200px; height: 40px;">

                            <input class="text-uppercase mb-2 " type="text" placeholder="sello interno" name='sello_interno2' style="width: 200px; height: 40px;">

                            <input class="text-uppercase " type="text" placeholder="sello interno" name='sello_interno3' style="width: 200px; height: 40px;">
                        </div>
                        <div class="d-flex flex-row  ms-5">
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
                <div class="d-flex flex-row justify-content-end ms-auto me-5 mb-1 mt-3">
                    <div class="p-2">
                        <?php
                        if (empty($_GET["id_conExpo"])) {
                        ?>
                            <input type="hidden" name="btn-guardar" id="btn-guardar-value1" value="guardado">
                            <button id="boton-guardar-garita" class="btn btn-outline-primary" type="submit" name="btn-guardar" value="guardado">Guardar</button>
                        <?php
                        } else {
                        ?>
                            <input type="hidden" name="btn-actualizar" id="btn-guardar-value2" value="actualizado">
                            <button id="boton-actualizar-garita" class="btn btn-outline-info" type="submit" name="btn-actualizar" value="actualizado">Actualizar</button>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>