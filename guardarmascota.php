<?php

include("Conexion.php");
include("Mascota.php");

class GuardarMascota extends Conexion{

    public function limpiar($dato){

        $dato=trim($dato);
        $dato=stripslashes($dato);
        $dato=strip_tags($dato);

        return $dato;

    }

    public function guardar(Mascota $m){

        try{

            $cn=$this->conectar();

            $sql="INSERT INTO mascotas
            (nombre,especie,raza,edad,peso,color,responsable,telefono)
            VALUES(?,?,?,?,?,?,?,?)";

            $consulta=$cn->prepare($sql);

            $consulta->execute([

                $m->getNombre(),
                $m->getEspecie(),
                $m->getRaza(),
                $m->getEdad(),
                $m->getPeso(),
                $m->getColor(),
                $m->getResponsable(),
                $m->getTelefono()

            ]);

            echo "<div class='w3-panel w3-green'>
            Mascota registrada correctamente.
            </div>";

        }catch(Exception $e){

            echo "<div class='w3-panel w3-red'>".$e->getMessage()."</div>";

        }

    }

}
?>