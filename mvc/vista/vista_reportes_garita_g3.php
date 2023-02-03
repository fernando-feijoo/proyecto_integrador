<?php
include_once "./../../layout/header.php";
include_once "./Grupo 3/menu_garita.php";
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
					REPORTE DATOS DE LLEGADA
				</div>
			</div>
			<!-- /Titulo o encabezado del escritorio -->
		</div>
		<div id="caja-separacion-escritorio" class="mx-auto"></div>

		<?php
		include("./../modelo/Grupo 3/modelo_reportes_garita.php");
		?>

		<!-- Barra de busqueda del listado llegada -->
		<div class="d-flex justify-content-center flex-row mt-4">
			<form action="?busqueda=1" method="post">
				<div class="input-group" style="width: 700px;">
					<div class="d-flex align-items-center me-1 fw-semibold">Desde:</div>
					<input name="busqueda_reporte_inicio" type="date" class="form-control" value="">
					<div class="d-flex align-items-center me-1 ms-1 fw-semibold">Hasta:
					</div><input name="busqueda_reporte_final" type="date" class="form-control" value="">
					<button class="btn btn-outline-primary" type="submit" name="button-busqueda-reportes" value="buscando">Buscar registros</button>

				</div>
			</form>
			<?php
			?>
		<!-- Boton de impresion de reporte -->
		</div>
		<div class="d-flex justify-content-end align-items-center me-5">
			<div class="fw-semibold me-3">Imprimir:</div> <a href="./../controlador//Grupo 3/reporte_garita.php" target="_blank"><i class="btn btn-outline-danger fa-regular fa-file-pdf" style="font-size: 40px !important;"></i></a>
		</div>
		<!-- /Barra de busqueda del listado llegada -->

		<table class="table table-striped table-hover table-sm table-bordered border-dark align-middle mt-5 mx-auto">
			<thead class="bg-primary bg-gradient bg-opacity-75">
				<tr>
					<th scope="col">ID</th>
					<th scope="col">FECHA INSPECCION</th>
					<th scope="col">SEMANA</th>
					<th scope="col">HORA LLEGADA</th>
					<th scope="col">CONTENEDOR</th>
					<th scope="col">CHOFER</th>
					<th scope="col">ACOPIO</th>
					<th scope="col">TP CAJA</th>
					<th scope="col">TP CONTENEDOR</th>
				</tr>
			</thead>
			<tbody class="table-group-divider">
				<?php
				while ($datos = $sql->fetch_object()) {
				?>
					<tr>
						<td><?= $datos->id ?></td>
						<td><?= $datos->fecha_inspeccion ?></td>
						<td><?= $datos->semana ?></td>
						<td><?= $datos->hora_llegada ?></td>
						<td><?= $datos->contenedor ?></td>
						<td><?= $datos->chofer_nombres ?></td>
						<td><?= $datos->nombre_acopio ?></td>
						<td><?= $datos->tipo_de_caja ?></td>
						<td><?= $datos->tipo_de_contenedor ?></td>
					</tr>
				<?php }
				?>

			</tbody>
		</table>

		<?php
		if (empty($_GET["busqueda"])) {
		?>
			<nav aria-label="Page navigation example">
				<ul class="pagination justify-content-center">
					<?php if ($pagina != 1) { ?>
						<li class="page-item">
							<a class="page-link" href="?pagina=<?= $pagina - 1 ?>">Previous</a>
						</li>
					<?php } ?>
					<?php for ($i = 1; $i <= $num_pags; $i++) { ?>
						<li class="page-item <?= $i == $pagina ? 'active' : '' ?>">
							<a class="page-link" href="?pagina=<?= $i ?>"><?= $i ?></a>
						</li>
					<?php } ?>
					<?php if ($pagina != $num_pags) { ?>
						<li class="page-item">
							<a class="page-link" href="?pagina=<?= $pagina + 1 ?>">Next</a>
						</li>
					<?php } ?>
				</ul>
			</nav>
		<?php
		} else {

		?>
			<nav aria-label="Page navigation example">
				<ul class="pagination justify-content-center">
					<?php if ($pagina != 1) { ?>
						<li class="page-item">
							<a class="page-link" href="?busqueda=1&pagina=<?= $pagina - 1 ?>">Previous</a>
						</li>
					<?php } ?>
					<?php for ($i = 1; $i <= $num_pags; $i++) { ?>
						<li class="page-item <?= $i == $pagina ? 'active' : '' ?>">
							<a class="page-link" href="?busqueda=1&pagina=<?= $i ?>"><?= $i ?></a>
						</li>
					<?php } ?>
					<?php if ($pagina != $num_pags) { ?>
						<li class="page-item">
							<a class="page-link" href="?busqueda=1&pagina=<?= $pagina + 1 ?>">Next</a>
						</li>
					<?php } ?>
				</ul>
			</nav>
		<?php
		}
		?>

	</div>
</div>
<?php
include_once "./../../layout/footer.php"
?>