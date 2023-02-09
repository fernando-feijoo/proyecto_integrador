<?php
include_once "./../../layout/header.php";
include_once "./Grupo 3/menu.php";
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
					LISTADO DE DATOS CONTENDOR
				</div>
			</div>
			<!-- /Titulo o encabezado del escritorio -->
		</div>
		<div id="caja-separacion-escritorio" class="mx-auto"></div>

		<?php
		include_once("./../controlador/Grupo 3/eliminar_registro_contenedores_g3.php");
		include("./../modelo/Grupo 3/modelo_listado_contenedores_g3.php");
		?>
 
		<!-- Barra de busqueda del listado llegada -->
		<div class="d-flex justify-content-center flex-row">

			<form action="?busqueda=1" method="post">
				<div class="input-group mt-5" style="width: 700px;">
					<input name="busqueda_garita" type="text" class="form-control" placeholder="Busqueda de datos" value="">
					<div class="input-group-append">
						<select class="form-select" name="seleccionBusquedaContenedor" aria-label="Example select with button addon">
							<option value="tipo_de_contenedor">Filtro</option>
							<option value="contenedor">CONTENEDOR</option>
							
							<option value="nombre_acopio">ACOPIO</option>
							<option value="semana">SEMANA</option>
              <option value="vapor">VAPOR</option>
						</select>
					</div>
					<button class="btn btn-outline-primary" type="submit" name="button-busqueda" value="buscando">Buscar registro</button>
				</div>
			</form>
			<?php
			?>

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
                     <th scope="col">ACOPIO</th>
                    <th scope="col">VAPOR</th>
                    <th scope="col" style="width: 160px;"></th>
				</tr>
			</thead>
			<tbody class="table-group-divider">
			<?php
			
			$sql= $conexion->query("SELECT * FROM vista_registro_contenedores");
				while ($resultados = $sql->fetch_assoc()) {
				?>
					<tr>
						<td scope="row"><?php echo $resultados['id'] ?></td>
						<td scope="row"><?php echo $resultados['fecha_inspeccion'] ?></td>
						<td scope="row"><?php echo $resultados['semana'] ?></td>
						<td scope="row"><?php echo $resultados['hora_llegada'] ?></td>
						<td scope="row"><?php echo $resultados['contenedor'] ?></td>
						<td scope="row"><?php echo $resultados['nombre_acopio'] ?></td>
						<td scope="row"><?php echo $resultados['vapor'] ?></td>
						<td>
							<a id="boton-editar-contenedor" href="./vista_listado_registro_g3.php?id_conExpo=<?= $resultados['id'] ?>" class="btn btn-small btn-warning" style="width: 70px;"><i class="fa-regular fa-pen-to-square"></i></a>
							<a id="boton-eliminar-contenedor" class="btn btn-small btn-danger" href="./vista_listado_contenedores_g3.php?id_conExpo=<?= $resultados['id'] ?>" style="width: 70px;"><i class="fa-regular fa-trash-can"></i></a>
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