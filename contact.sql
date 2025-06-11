-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS Contacto;
USE Contacto;

-- Crear la tabla clientes
CREATE TABLE IF NOT EXISTS clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    telefono VARCHAR(20),
    correo VARCHAR(100)
);

-- Insertar registros de ejemplo
INSERT INTO clientes (nombre, telefono, correo) VALUES 
('Juan Pérez', '987654321', 'juan.perez@gmail.com'),
('Ana Gómez', '912345678', 'ana.gomez@hotmail.com'),
('Carlos Ruiz', '998877665', 'carlos.ruiz@yahoo.com');

-- Consultar los datos (como mencionaste)
SELECT nombre, telefono, correo FROM clientes;
