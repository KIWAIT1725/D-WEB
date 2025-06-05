<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];

    $stmt = $conn->prepare("INSERT INTO clientes (nombre, telefono, correo) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nombre, $telefono, $correo);

    if ($stmt->execute()) {
        echo "<script>alert('Cliente Agregado.'); window.location.href='Clientes.html';</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "'); window.location.href='Clientes.html';</script>";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "<script>alert('Acceso no válido'); window.location.href='Clientes.html';</script>";
}
?>
