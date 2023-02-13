<?php
include_once "./../../layout/header.php"
?>

<?php
if ($_SESSION["rol"] == "control") {
    require_once "./vista_bienvenida.php";
} 
elseif ($_SESSION["rol"] == "calidad") {
    require_once "./vista_bienvenida.php";
} 
elseif ($_SESSION["rol"] == "verificacion") {
    require_once "./vista_bienvenida.php";
}
elseif ($_SESSION["rol"] == "garita") {
    include_once "./vista_bienvenida.php";
}
?>