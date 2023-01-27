<?php
include_once "./../../layout/header.php"
?>

<?php
if ($_SESSION["rol"] == "grupo1") {
    require_once "./vista_bienvenida.php";
} 
elseif ($_SESSION["rol"] == "grupo2") {
    require_once "./vista_bienvenida.php";
} 
elseif ($_SESSION["rol"] == "grupo3") {
    require_once "./vista_bienvenida.php";
}
elseif ($_SESSION["rol"] == "garita") {
    include_once "./vista_bienvenida.php";
}
?>