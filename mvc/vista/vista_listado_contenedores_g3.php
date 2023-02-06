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
				// include_once("./../modelo/Grupo 3/modelo_listado_contenedores_g3.php");
				while ($datos = $sql->fetch_object()) {
				?>
					<tr>
						<td><?= $datos->id ?></td>
						<td><?= $datos->fecha_inspeccion ?></td>
						<td><?= $datos->semana ?></td>
						<td><?= $datos->hora_llegada ?></td>
						<td><?= $datos->contenedor ?></td>
						<td><?= $datos->nombre_acopio ?></td>
						
						
						
						<td>
							<a id="boton-editar-contenedores" href="./vista_listado_contenedores_g3.php?= $datos->id ?>" class="btn btn-small btn-warning" style="width: 70px;"><i class="fa-regular fa-pen-to-square"></i></a>
							<a id="boton-eliminar-contenedores" class="btn btn-small btn-danger" href="./vista_listado_contenedores_g3.php?= $datos->id ?>" style="width: 70px;"><i class="fa-regular fa-trash-can"></i></a>
						</td>
					</tr>
				<?php }
				?>

			</tbody>
		</table>

		<?php
		

include_once "./../../layout/footer.php";
?>