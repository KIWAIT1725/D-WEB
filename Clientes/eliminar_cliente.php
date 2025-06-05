<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST['nombre']);

    // Verificamos si existe
    $stmt = $conn->prepare("SELECT id FROM clientes WHERE nombre = ?");
    $stmt->bind_param("s", $nombre);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->close();

        // Eliminamos
        $delete = $conn->prepare("DELETE FROM clientes WHERE nombre = ?");
        $delete->bind_param("s", $nombre);
        if ($delete->execute()) {
            echo "Cliente eliminado correctamente.";
        } else {
            echo "Error al eliminar cliente: " . $delete->error;
        }
        $delete->close();
    } else {
        echo "El cliente no existe.";
    }

    $conn->close();
} else {
    echo "Solicitud no válida.";
}
?>
