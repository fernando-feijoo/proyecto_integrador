<?php
if (!empty($_POST["btn-guardar-general"]) || !empty($_POST["btn-actualizar-general"])) {
	if (!empty($_POST["sello_interno1"])) {
		// Se coloca esta validacion para saber si es un insert o un update, ya que si es 
		// guardado por primera vez seria con numCont, pero caso contrario seria con id_contExpo para actualizar.
		if (!empty($_SESSION["id_contExpo"])) {
			$id = $_SESSION['id_contExpo'];
			$num_conte = $_SESSION["id_numCont"];
			$id_registro = $_SESSION["id_regisLleg"];
?>
			<script>
				console.log("Ingreso a controlador sellos - actualizar")
			</script>
		<?php
		} else if (!empty($_SESSION["numCont"])) {
			$id = $_SESSION['numCont'];
			$num_conte = $_SESSION["numCont"];
			$id_registro = $_SESSION["id_regis"];
		?>
			<script>
				console.log("Ingreso a controlador sellos - nuevo registro")
			</script>
<?php
		}

		$sellos_internos = strtoupper($_POST["sello_interno1"]) . ';';
		$sellos_internos .= strtoupper($_POST["sello_interno2"]) . ';';
		$sellos_internos .= strtoupper($_POST["sello_interno3"]);

		$sellos_externos = strtoupper($_POST["sello_externo1"]) . ';';
		$sellos_externos .= strtoupper($_POST["sello_externo2"]) . ';';
		$sellos_externos .= strtoupper($_POST["sello_externo3"]) . ';';
		$sellos_externos .= strtoupper($_POST["sello_externo4"]) . ';';
		$sellos_externos .= strtoupper($_POST["sello_externo5"]) . ';';
		$sellos_externos .= strtoupper($_POST["sello_externo6"]) . ';';
		$sellos_externos .= strtoupper($_POST["sello_externo7"]) . ';';
		$sellos_externos .= strtoupper($_POST["sello_externo8"]) . ';';
		$sellos_externos .= strtoupper($_POST["sello_externo9"]);

		guardar_sellos_contenedor($id, $num_conte, $sellos_externos, $sellos_internos, $id_registro);
	}
}
