<?php
    include("./../modelo/Grupo 2/modelo_cajas.php");
    ?>
<table class="table table-striped table-hover table-sm table-bordered border-dark align-middle mt-3 mx-auto">
      <thead class="bg-primary bg-gradient bg-opacity-75">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Numero de Evaluación</th>
          <th scope="col">PCMD %</th>
          <th scope="col">Estado Caja</th>
        </tr>
      </thead>
      <tbody>
        <?php
        
        while ($datos_caj = $sql->fetch_object()) {
          ?>
          <tr>
            <td>
            <?= $datos_caj->id ?>
            </td>
            <td>
              <?= $datos_caj->num_eva?>
            </td>
            <td>
              <?= $datos_caj->pcmd_total?>
            </td>
            <td>
              <?= $datos_caj->estado_caja?>
            </td>
          </tr>
        <?php }
        ?>
      </tbody>
    </table>

    <?php
       
        ?>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <?php if ($pagina != 1) { ?>
                        <li class="page-item">
                            <a class="page-link" href="?busqueda=1&pagina=<?= $pagina - 1 ?>">Previous</a>
                        </li>
                    <?php } ?>
                    <?php for ($i = 1; $i <= $num_pags; $i++) { ?>
                       
                    <?php } ?>
                    <?php if ($pagina != $num_pags) { ?>
                        
                    <?php } ?>
                </ul>
            </nav>
        <?php
        
        ?>