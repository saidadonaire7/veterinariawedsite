<?php

include("GuardarMascota.php");

if(isset($_POST["guardar"])){

$guardar=new GuardarMascota();

$nombre=$guardar->limpiar($_POST["nombre"]);
$especie=$guardar->limpiar($_POST["especie"]);
$raza=$guardar->limpiar($_POST["raza"]);
$edad=$guardar->limpiar($_POST["edad"]);
$peso=$guardar->limpiar($_POST["peso"]);
$color=$guardar->limpiar($_POST["color"]);
$responsable=$guardar->limpiar($_POST["responsable"]);
$telefono=$guardar->limpiar($_POST["telefono"]);

$mascota=new Mascota(
$nombre,
$especie,
$raza,
$edad,
$peso,
$color,
$responsable,
$telefono
);

$guardar->guardar($mascota);

}

?>