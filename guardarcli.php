<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'manipularcli.php';

function filtrofares($dat_fares)
{
    $datos = trim($dat_fares);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}

if (isset($_POST["cguardar"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $vcodigo      = !empty($_POST["ccodigo"])     ? filtrofares($_POST["ccodigo"])     : null;
    $vnombre      = !empty($_POST["cnomcliente"]) ? filtrofares($_POST["cnomcliente"]) : "";
    $vespecie     = !empty($_POST["cdireccion"])  ? filtrofares($_POST["cdireccion"])  : "";
    $vraza        = !empty($_POST["ctelcasa"])    ? filtrofares($_POST["ctelcasa"])    : null;
    $vedad        = !empty($_POST["cedad"])      ? filtrofares($_POST["cedad"])      : null;
    $vpeso        = !empty($_POST["cpeso"])      ? filtrofares($_POST["cpeso"])      : null;
    $vcolor       = !empty($_POST["ccolor"])     ? filtrofares($_POST["ccolor"])     : null;
    $vresponsable = !empty($_POST["ccelular"])    ? filtrofares($_POST["ccelular"])    : null;
    $vtelefono    = !empty($_POST["cemail"])      ? filtrofares($_POST["cemail"])      : null;

    $guardarcliente = new modificarcliente($vcodigo, $vnombre, $vespecie, $vraza, $vedad, $vpeso, $vcolor, $vresponsable, $vtelefono);
    
    if ($guardarcliente->guardar()) {
        header('Location: frmcliente.php');
        die();
    }
} else {
    echo "Error: No se han enviado datos válidos.";
}
?>