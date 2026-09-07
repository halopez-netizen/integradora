<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Registro de Estudiantes</title>

    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

    <header>
        <div class="contenedor">
            <h1>Sistema de Registro de Estudiantes</h1>

            <nav>
                <a href="index.php">Inicio</a>
                <a href="views/estudiantes/registrar.php">Registrar estudiante</a>
                <a href="views/estudiantes/listar.php">Ver estudiantes</a>
            </nav>
        </div>
    </header>

    <main class="contenedor">

        <section class="bienvenida">
            <h2>Bienvenido al sistema</h2>

            <p>
                Este sistema permite registrar y consultar información
                de estudiantes mediante una aplicación web desarrollada
                con PHP, MySQL y el patrón MVC.
            </p>

            <div class="botones">
                <a href="views/estudiantes/registrar.php" class="boton">
                    Registrar estudiante
                </a>

                <a href="views/estudiantes/listar.php" class="boton secundario">
                    Consultar estudiantes
                </a>
            </div>
        </section>

        <section class="tarjetas">

            <div class="tarjeta">
                <h3>📝 Registrar</h3>
                <p>
                    Ingresa los datos de nuevos estudiantes
                    mediante un formulario.
                </p>
            </div>

            <div class="tarjeta">
                <h3>📋 Consultar</h3>
                <p>
                    Visualiza los estudiantes registrados
                    en la base de datos.
                </p>
            </div>

            <div class="tarjeta">
                <h3>🗄️ MySQL</h3>
                <p>
                    La información será almacenada
                    en una base de datos MySQL.
                </p>
            </div>

        </section>

    </main>

    <footer>
        <p>
            © 2026 Harold Lopez - Sistema de Registro de Estudiantes
        </p>
    </footer>

</body>
</html>