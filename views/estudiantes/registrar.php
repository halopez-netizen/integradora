<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registrar estudiante</title>

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

            <h2>Registrar nuevo estudiante</h2>

            <p>
                Complete el siguiente formulario para registrar
                un nuevo estudiante.
            </p>

            <form id="formularioEstudiante" method="POST">

                <div class="campo">

                    <label for="nombre">
                        Nombre completo
                    </label>

                    <input
                        type="text"
                        id="nombre"
                        name="nombre"
                        placeholder="Ingrese el nombre completo"
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
                        placeholder="ejemplo@correo.com"
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
                        placeholder="Ingrese la edad"
                        min="1"
                        max="100"
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
                        placeholder="Ingrese la carrera"
                    >

                </div>


                <button type="submit" class="boton">
                    Registrar estudiante
                </button>

                <a href="../../index.php" class="boton secundario">
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

    <script src="../../js/validaciones.js"></script>

</body>

</html>