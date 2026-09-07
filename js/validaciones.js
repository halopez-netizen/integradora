// ==========================================
// VALIDACIÓN DEL FORMULARIO DE ESTUDIANTES
// ==========================================

// Seleccionamos el formulario
const formularioEstudiante = document.getElementById("formularioEstudiante");

// Evento submit
formularioEstudiante.addEventListener("submit", function (evento) {

    // Obtener los valores de los campos
    const nombre = document.getElementById("nombre").value.trim();
    const correo = document.getElementById("correo").value.trim();
    const edad = document.getElementById("edad").value.trim();
    const carrera = document.getElementById("carrera").value.trim();

    // ==========================================
    // VALIDACIÓN DE CAMPOS VACÍOS
    // ==========================================

    if (nombre === "" || correo === "" || edad === "" || carrera === "") {

        evento.preventDefault();

        alert("Por favor, complete todos los campos.");

        return;
    }

    // ==========================================
    // VALIDACIÓN DEL NOMBRE
    // ==========================================

    if (nombre.length < 3 || nombre.length > 100) {

        evento.preventDefault();

        alert("El nombre debe tener entre 3 y 100 caracteres.");

        return;
    }

    // ==========================================
    // VALIDACIÓN DEL CORREO
    // ==========================================

    const formatoCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!formatoCorreo.test(correo)) {

        evento.preventDefault();

        alert("Ingrese un correo electrónico válido.");

        return;
    }

    // ==========================================
    // VALIDACIÓN DE LA EDAD
    // ==========================================

    const edadNumero = Number(edad);

    if (isNaN(edadNumero) || edadNumero < 1 || edadNumero > 100) {

        evento.preventDefault();

        alert("La edad debe ser un número entre 1 y 100.");

        return;
    }

    // ==========================================
    // VALIDACIÓN DE LA CARRERA
    // ==========================================

    if (carrera.length < 3 || carrera.length > 100) {

        evento.preventDefault();

        alert("La carrera debe tener entre 3 y 100 caracteres.");

        return;
    }

    // Si todas las validaciones son correctas
    alert("Datos validados correctamente. Enviando formulario.");

});