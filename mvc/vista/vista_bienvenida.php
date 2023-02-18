<?php
include_once "./../../layout/header.php";
if ($_SESSION["rol"] == "control") {
	include_once "./Grupo 1/menu.php";
} elseif ($_SESSION["rol"] == "calidad") {
	include_once "./Grupo 2/menu.php";
} elseif ($_SESSION["rol"] == "verificacion") {
	include_once "./Grupo 3/menu.php";
} elseif ($_SESSION["rol"] == "garita") {
	if(!empty($_GET["admin"])){
		include_once ('./Grupo 3/menu_gestion_datos.php');
	}else{
		include_once "./Grupo 3/menu_garita.php";
	}
}

?>
<div id="contenedor-escritorio-contenido" class="container-fluid col text-center pe-2 ps-0">
	<!-- Contenedor de escritorio *interno -->
	<div id="escritorio-contenido" class="container-fluid mt-1 mb-1 rounded-4" style="background-image: url('./../../img/FondoHome 954px_598px.png'); background-size: cover; background-position: center;">
	</div>
	<!-- /Contenedor de escritorio *interno -->
</div>
<?php
include_once "./../../layout/footer.php"
?>