<?php
require_once 'conexionf2.php';
require_once 'fclases.php';

class modificarcliente extends datosmascota
{
    const TABLA = 'mascotas';

    public function guardar()
    {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA . ' (nombre, especie, raza, edad, peso, color, responsable, telefono) VALUES (:nombre, :especie, :raza, :edad, :peso, :color, :responsable, :telefono)');

        $consulta->bindParam(':nombre', $this->dnombre);
        $consulta->bindParam(':especie', $this->despecie);
        $consulta->bindParam(':raza', $this->draza);
        $consulta->bindParam(':edad', $this->dedad);
        $consulta->bindParam(':peso', $this->dpeso);
        $consulta->bindParam(':color', $this->dcolor);
        $consulta->bindParam(':responsable', $this->dresponsable);
        $consulta->bindParam(':telefono', $this->dtelefono);

        $resultado = $consulta->execute();
        $conexion = null;
        return $resultado;
    }

    public static function ConsultarClientes()
    {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT id, nombre, especie, responsable, telefono FROM ' . self::TABLA . ' ORDER BY nombre');
        $consulta->execute();
        $registros = $consulta->fetchAll(PDO::FETCH_OBJ);
        return $registros;
    }

    public function ConsultarClientesId()
    {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE id = :codid');
        $consulta->bindParam(':codid', $this->did);
        $consulta->execute();
        $registros = $consulta->fetchAll(PDO::FETCH_OBJ);
        return $registros;
    }

    public function actualizar()
    {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('UPDATE ' . self::TABLA . ' SET nombre = :nombre, especie = :especie, raza = :raza, edad = :edad, peso = :peso, color = :color, responsable = :responsable, telefono = :telefono WHERE id = :codid');

        $consulta->bindParam(':nombre', $this->dnombre);
        $consulta->bindParam(':especie', $this->despecie);
        $consulta->bindParam(':raza', $this->draza);
        $consulta->bindParam(':edad', $this->dedad);
        $consulta->bindParam(':peso', $this->dpeso);
        $consulta->bindParam(':color', $this->dcolor);
        $consulta->bindParam(':responsable', $this->dresponsable);
        $consulta->bindParam(':telefono', $this->dtelefono);
        $consulta->bindParam(':codid', $this->did);

        $consulta->execute();
        $conexion = null;
    }

    public function eliminar()
    {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA . ' WHERE id = :codid');
        $consulta->bindParam(':codid', $this->did);
        $consulta->execute();
        $conexion = null;
    }

    public static function totalRegistros()
    {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT COUNT(*) FROM ' . self::TABLA);
        $consulta->execute();
        $registros = $consulta->fetchColumn();
        return $registros;
    }

    public static function limitRegistros($inicio, $hasta)
    {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' ORDER BY nombre LIMIT :inicio, :hasta');
        $consulta->bindValue(':inicio', (int)$inicio, PDO::PARAM_INT);
        $consulta->bindValue(':hasta', (int)$hasta, PDO::PARAM_INT);
        $consulta->execute();
        $registros = $consulta->fetchAll(PDO::FETCH_OBJ);
        return $registros;
    }
}
?>