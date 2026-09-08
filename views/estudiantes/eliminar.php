<?php

require_once __DIR__ . '/../../models/estudiante.php';

if (isset($_GET['id'])) {

    $id = (int) $_GET['id'];

    $estudiante = new Estudiante();

    if ($estudiante->eliminar($id)) {
        header("Location: listar.php?mensaje=eliminado");
        exit;
    } else {
        header("Location: listar.php?error=eliminar");
        exit;
    }

} else {

    header("Location: listar.php");
    exit;

}
?>