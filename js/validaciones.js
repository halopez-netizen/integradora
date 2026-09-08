const formulario = document.getElementById("formularioEstudiante");

formulario.addEventListener("submit", function (evento) {

    const nombre = document.getElementById("nombre").value.trim();
    const correo = document.getElementById("correo").value.trim();
    const edad = document.getElementById("edad").value.trim();
    const carrera = document.getElementById("carrera").value.trim();

    // Validar campos vacíos
    if (nombre === "" || correo === "" || edad === "" || carrera === "") {

        evento.preventDefault();

        alert("Por favor, completa todos los campos.");

        return;
    }

    // Validar longitud del nombre
    if (nombre.length < 3 || nombre.length > 100) {

        evento.preventDefault();

        alert("El nombre debe tener entre 3 y 100 caracteres.");

        return;
    }

    // Validar correo electrónico
    const formatoCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!formatoCorreo.test(correo)) {

        evento.preventDefault();

        alert("Ingresa un correo electrónico válido.");

        return;
    }

    // Validar edad
    const edadNumero = Number(edad);

    if (isNaN(edadNumero) || edadNumero < 1 || edadNumero > 100) {

        evento.preventDefault();

        alert("La edad debe ser un número entre 1 y 100.");

        return;
    }

    // Validar carrera
    if (carrera.length < 3 || carrera.length > 100) {

        evento.preventDefault();

        alert("La carrera debe tener entre 3 y 100 caracteres.");

        return;
    }

    // Si todo está correcto, permitimos que el formulario
    // continúe hacia EstudianteController.php
    alert("Datos validados correctamente. Enviando formulario.");

});