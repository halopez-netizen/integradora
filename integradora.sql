CREATE DATABASE IF NOT EXISTS integradora;

USE integradora;

CREATE TABLE estudiantes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    edad INT NOT NULL,
    carrera VARCHAR(100) NOT NULL
);