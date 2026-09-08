<?php

require_once __DIR__ . '/../models/estudiante.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $estudiante = new Estudiante();

    // Verificar si la acción es editar
    if (isset($_POST["accion"]) && $_POST["accion"] === "editar") {

        $id = intval($_POST["id"] ?? 0);
        $nombre = trim($_POST["nombre"] ?? "");
        $correo = trim($_POST["correo"] ?? "");
        $edad = intval($_POST["edad"] ?? 0);
        $carrera = trim($_POST["carrera"] ?? "");

        if ($estudiante->editar($id, $nombre, $correo, $edad, $carrera)) {

            header("Location: ../views/estudiantes/listar.php?mensaje=editado");
            exit;

        } else {

            header("Location: ../views/estudiantes/listar.php?error=editar");
            exit;
        }
    }

    // Registrar un estudiante
    $nombre = trim($_POST["nombre"] ?? "");
    $correo = trim($_POST["correo"] ?? "");
    $edad = intval($_POST["edad"] ?? 0);
    $carrera = trim($_POST["carrera"] ?? "");

    if ($estudiante->registrar($nombre, $correo, $edad, $carrera)) {

        header("Location: ../views/estudiantes/listar.php?mensaje=registrado");
        exit;

    } else {

        header("Location: ../views/estudiantes/registrar.php?error=registro");
        exit;
    }
}
?>