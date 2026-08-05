<?php
require_once 'manipularcli.php';

function filtrofares($dat_fares)
{
    $datos = trim($dat_fares);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}

if (isset($_POST["cactualizar"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $vcodigo      = !empty($_POST["ccodigo"])     ? filtrofares($_POST["ccodigo"])     : "";
    $vnombre      = !empty($_POST["cnomcliente"]) ? filtrofares($_POST["cnomcliente"]) : "";
    $vespecie     = !empty($_POST["cdireccion"])  ? filtrofares($_POST["cdireccion"])  : "";
    $vraza        = !empty($_POST["ctelcasa"])    ? filtrofares($_POST["ctelcasa"])    : "";
    $vedad        = !empty($_POST["cedad"])      ? filtrofares($_POST["cedad"])      : "";
    $vpeso        = !empty($_POST["cpeso"])      ? filtrofares($_POST["cpeso"])      : "";
    $vcolor       = !empty($_POST["ccolor"])     ? filtrofares($_POST["ccolor"])     : "";
    $vresponsable = !empty($_POST["ccelular"])    ? filtrofares($_POST["ccelular"])    : "";
    $vtelefono    = !empty($_POST["cemail"])      ? filtrofares($_POST["cemail"])      : "";

    $guardarcliente = new modificarcliente($vcodigo, $vnombre, $vespecie, $vraza, $vedad, $vpeso, $vcolor, $vresponsable, $vtelefono);
    $guardarcliente->actualizar();

    header('Location: frmcliente.php');
    die();
}
?>