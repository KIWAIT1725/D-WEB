<?php
require 'db.php';

$sql = "SELECT nombre, telefono, correo FROM clientes ORDER BY id DESC";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    echo "<div style='display: flex; justify-content: center; margin-top: 20px;'>";  // Contenedor centrado
    echo "<table cellpadding='8' cellspacing='0' style='border-collapse: collapse; width: auto; max-width: 90%; text-align: left; box-shadow: 0 0 10px rgba(0,0,0,0.1);'>";
    echo "<tr style='background-color: #f2f2f2;'><th>Nombre</th><th>Teléfono</th><th>Correo</th></tr>";
    
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($fila['nombre']) . "</td>";
        echo "<td>" . htmlspecialchars($fila['telefono']) . "</td>";
        echo "<td>" . htmlspecialchars($fila['correo']) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</div>";
} else {
    echo "<p style='text-align: center;'>No hay clientes registrados.</p>";
}
$conn->close();
?>
