<?php
require_once 'manipularcli.php';

$id = "";
$codid = "";
$nombreCli = "";
$especie = "";
$raza = "";
$edad = "";
$peso = "";
$color = "";
$responsable = "";
$telefono = "";

if (isset($_GET['idcli'])) { 
    $id = $_GET['idcli']; 

    $Clientes = new modificarcliente($id, null, null, null, null, null, null, null, null);
    $listaclientes = $Clientes->ConsultarClientesId();

    foreach ($listaclientes as $clienteselec) { 
        $codid       = $clienteselec->id;
        $nombreCli   = $clienteselec->nombre;
        $especie     = $clienteselec->especie;
        $raza        = $clienteselec->raza;
        $edad        = $clienteselec->edad;
        $peso        = $clienteselec->peso;
        $color       = $clienteselec->color;
        $responsable = $clienteselec->responsable;
        $telefono    = $clienteselec->telefono;
    }
}
?>