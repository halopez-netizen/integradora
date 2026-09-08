<?php

require_once __DIR__ . '/../config/conexion.php';

class Estudiante
{
    private $conexion;

    public function __construct()
    {
        global $conexion;
        $this->conexion = $conexion;
    }

    // Registrar un estudiante
    public function registrar($nombre, $correo, $edad, $carrera)
    {
        $sql = "INSERT INTO estudiantes (nombre, correo, edad, carrera)
                VALUES (?, ?, ?, ?)";

        $stmt = $this->conexion->prepare($sql);

        $stmt->bind_param(
            "ssis",
            $nombre,
            $correo,
            $edad,
            $carrera
        );

        return $stmt->execute();
    }

    // Consultar todos los estudiantes
    public function listar()
    {
        $sql = "SELECT * FROM estudiantes ORDER BY id DESC";

        return $this->conexion->query($sql);
    }

    // Buscar un estudiante por ID
    public function buscarPorId($id)
    {
        $sql = "SELECT * FROM estudiantes WHERE id = ?";

        $stmt = $this->conexion->prepare($sql);

        $stmt->bind_param("i", $id);

        $stmt->execute();

        return $stmt->get_result();
    }

    // Editar un estudiante
    public function editar($id, $nombre, $correo, $edad, $carrera)
    {
        $sql = "UPDATE estudiantes 
                SET nombre = ?, correo = ?, edad = ?, carrera = ?
                WHERE id = ?";

        $stmt = $this->conexion->prepare($sql);

        $stmt->bind_param(
            "ssisi",
            $nombre,
            $correo,
            $edad,
            $carrera,
            $id
        );

        return $stmt->execute();
    }

    // Eliminar un estudiante
    public function eliminar($id)
    {
        $sql = "DELETE FROM estudiantes WHERE id = ?";

        $stmt = $this->conexion->prepare($sql);

        $stmt->bind_param("i", $id);

        return $stmt->execute();
    }
}

?>