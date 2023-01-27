<?php
include_once "./../../layout/header.php"
?>

<!-- Contenedor de menu lateral -->
<?php
if ($_SESSION["rol"] == "grupo1") {
    include_once "./Grupo 1/menu_grupo1.php";
} elseif ($_SESSION["rol"] == "grupo2") {
    include_once "./Grupo 2/menu_grupo2.php";
} elseif ($_SESSION["rol"] == "grupo3") {
    include_once "./Grupo 3/menu_grupo3.php";
}
// elseif ($_SESSION["rol"] == "garita") {
//     include_once "./Grupo 3/Garita/menu_garita_grupo3.php";
// }

// elseif ($_SESSION["rol"] == "garita") {
//     include_once "./vista-bienvenida.php";
// }

elseif ($_SESSION["rol"] == "garita") {
    include_once "./Grupo 3/Garita/op/vista-llegada.php";
}
?>
<!-- /Contenedor de menu lateral -->

<!-- Contenedor de escritorio -->
<?php
if ($_SESSION["rol"] == "grupo1") {
    include_once "./Grupo 1/escritorio_grupo1.php";
} elseif ($_SESSION["rol"] == "grupo2") {
    include_once "./Grupo 2/escritorio_grupo2.php";
} elseif ($_SESSION["rol"] == "grupo3") {
    include_once "./Grupo 3/escritorio_grupo3.php";
}
// elseif ($_SESSION["rol"] == "garita") {
//     include_once "./Grupo 3/Garita/escritorio_garita_grupo3.php";
// }
?>

<?php include_once "./../../layout/footer.php" ?>