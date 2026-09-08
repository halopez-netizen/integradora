<?php

require_once __DIR__ . '/../../models/estudiante.php';

$estudiante = new Estudiante();
$resultado = $estudiante->listar();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lista de estudiantes</title>

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

            <h2>Estudiantes registrados</h2>

            <?php if (isset($_GET["mensaje"])): ?>

                <?php if ($_GET["mensaje"] === "registrado"): ?>

                    <div class="mensaje-exito">
                        Estudiante registrado correctamente.
                    </div>

                <?php elseif ($_GET["mensaje"] === "eliminado"): ?>

                    <div class="mensaje-exito">
                        Estudiante eliminado correctamente.
                    </div>

                <?php endif; ?>

            <?php endif; ?>


            <?php if ($resultado && $resultado->num_rows > 0): ?>

                <div class="tabla-contenedor">

                    <table>

                        <thead>

                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Edad</th>
                                <th>Carrera</th>
                                <th>Acciones</th>
                            </tr>

                        </thead>

                        <tbody>

                            <?php while ($fila = $resultado->fetch_assoc()): ?>

                                <tr>

                                    <td>
                                        <?php echo $fila["id"]; ?>
                                    </td>

                                    <td>
                                        <?php echo htmlspecialchars($fila["nombre"]); ?>
                                    </td>

                                    <td>
                                        <?php echo htmlspecialchars($fila["correo"]); ?>
                                    </td>

                                    <td>
                                        <?php echo $fila["edad"]; ?>
                                    </td>

                                    <td>
                                        <?php echo htmlspecialchars($fila["carrera"]); ?>
                                    </td>

                                    <td>

                                        <a href="editar.php?id=<?php echo $fila['id']; ?>" class="boton editar">
                                            Editar
                                        </a>

                                        <a href="eliminar.php?id=<?php echo $fila['id']; ?>"
                                        class="boton eliminar"
                                        onclick="return confirm('¿Está seguro de eliminar este estudiante?');">
                                            Eliminar
                                        </a>

                                    </td>

                                </tr>

                            <?php endwhile; ?>

                        </tbody>

                    </table>

                </div>

            <?php else: ?>

                <p>No existen estudiantes registrados.</p>

            <?php endif; ?>


            <br>

            <a href="registrar.php" class="boton">
                Registrar nuevo estudiante
            </a>

        </section>

    </main>


    <footer>

        <p>
            © 2026 Harold Lopez - Sistema de Registro de Estudiantes
        </p>

    </footer>

</body>

</html>