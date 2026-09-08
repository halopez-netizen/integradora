<?php

require_once __DIR__ . '/../../models/estudiante.php';

$estudiante = new Estudiante();

$id = intval($_GET['id'] ?? 0);

$resultado = $estudiante->buscarPorId($id);

if (!$resultado || $resultado->num_rows === 0) {
    die("Estudiante no encontrado.");
}

$datos = $resultado->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Editar estudiante</title>

    <link rel="stylesheet" href="../../css/estilos.css">

</head>

<body>

<header>

    <div class="contenedor">

        <h1>Registro de Estudiantes</h1>

        <nav>

            <a href="../../index.php">Inicio</a>

            <a href="registrar.php">Registrar estudiante</a>

            <a href="listar.php">Ver estudiantes</a>

        </nav>

    </div>

</header>


<main class="contenedor">

    <section class="bienvenida">

        <h2>Editar estudiante</h2>

        <p>
            Modifique los datos del estudiante y guarde los cambios.
        </p>


        <form action="../../controllers/EstudianteController.php" method="POST">

            <input type="hidden" name="accion" value="editar">

            <input type="hidden" name="id" value="<?php echo $datos['id']; ?>">


            <div class="campo">

                <label for="nombre">
                    Nombre completo
                </label>

                <input
                    type="text"
                    id="nombre"
                    name="nombre"
                    value="<?php echo htmlspecialchars($datos['nombre']); ?>"
                    required
                >

            </div>


            <div class="campo">

                <label for="correo">
                    Correo electrónico
                </label>

                <input
                    type="email"
                    id="correo"
                    name="correo"
                    value="<?php echo htmlspecialchars($datos['correo']); ?>"
                    required
                >

            </div>


            <div class="campo">

                <label for="edad">
                    Edad
                </label>

                <input
                    type="number"
                    id="edad"
                    name="edad"
                    value="<?php echo $datos['edad']; ?>"
                    min="1"
                    max="100"
                    required
                >

            </div>


            <div class="campo">

                <label for="carrera">
                    Carrera
                </label>

                <input
                    type="text"
                    id="carrera"
                    name="carrera"
                    value="<?php echo htmlspecialchars($datos['carrera']); ?>"
                    required
                >

            </div>


            <button type="submit" class="boton">
                Guardar cambios
            </button>

            <a href="listar.php" class="boton secundario">
                Cancelar
            </a>

        </form>

    </section>

</main>


<footer>

    <p>
        © 2026 Harold Lopez - Sistema de Registro de Estudiantes
    </p>

</footer>

</body>

</html>