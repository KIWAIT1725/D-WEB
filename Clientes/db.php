<?php
$host = 'localhost';
$user = 'root';
$password = ''; // si tienes contraseña, colócala aquí
$database = 'Contacto';

$conn = new mysqli($host, $user, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
