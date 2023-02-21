<?php
include_once "./../../layout/header.php";
include_once "./Grupo 3/menu.php";
include("./../modelo/conexion_bd.php");
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
					REPORTE DATOS REGISTRO
				</div>
			</div>
			<!-- /Titulo o encabezado del escritorio -->
		</div>
		<div id="caja-separacion-escritorio" class="mx-auto"></div>

		<?php
		include_once("./../modelo/Grupo 3/modelo_reportes_con.php");
		?>

		<!-- Barra de busqueda del listado llegada -->
		<div class="d-flex justify-content-center flex-row mt-4">
			<form action="?busqueda=1" method="post">
				<div class="input-group" style="width: 700px;">
					<div class="d-flex align-items-center me-1 fw-semibold">Desde<H5 style="color: red;">*</H5>:
					</div>
					<input name="busqueda_reporte_inicio" type="date" class="form-control" value="">
					<div class="d-flex align-items-center me-1 ms-1 fw-semibold">Hasta<H5 style="color: red;">*</H5>:
					</div>
					<input name="busqueda_reporte_final" type="date" class="form-control" value="">
					<button class="btn btn-outline-primary" type="submit" name="button-busqueda-reportes" value="buscando">Buscar registros</button>
				</div>
			</form>
			<?php
			?>
			<!-- Boton de impresion de reporte -->
		</div>
		<?php
		// Validacion para no tener error y que no salgan datos de impresion en caso de no ingresarse.
		if (empty($_SESSION['sesion_fecha_inicial']) || empty($_SESSION['sesion_fecha_final'])) {
			$filtro_fecha_inicial = 0;
			$filtro_fecha_final = 0;
		}
		?>
		<!-- /Barra de busqueda del listado llegada -->

		<table class="table table-striped table-hover table-sm table-bordered border-dark align-middle mt-5 mx-auto">
			<thead class="bg-primary bg-gradient bg-opacity-75">
				<tr>
					<th scope="col">ID</th>
					<th scope="col">FECHA INSPECCION</th>
					<th scope="col">SEMANA</th>
					<th scope="col">HORA LLEGADA</th>
					<th scope="col">CONTENEDOR</th>
					<th scope="col">ACOPIO</th>
					<th scope="col">VAPOR</th>
					<th scope="col">IMPRIMIR</th>
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
						<td><?= $datos->nombre_acopio ?></td>
						<td><?= $datos->vapor ?></td>
						<td>
							<div class="d-flex justify-content-end align-items-center me-5">
								<a href="./../controlador//Grupo 3/reporte_garita.php?f_ini=<?= $filtro_fecha_inicial ?>&&f_fin=<?= $filtro_fecha_final ?>" target="_blank"><i class="btn btn-outline-danger fa-regular fa-file-pdf" style="font-size: 40px !important;"></i></a>
							</div>
						</td>
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