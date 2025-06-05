<?php
require 'db.php';

$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : '';

$sql = "SELECT nombre FROM clientes WHERE nombre LIKE ? ORDER BY nombre ASC LIMIT 10";
$stmt = $conn->prepare($sql);
$like = "%" . $nombre . "%";
$stmt->bind_param("s", $like);
$stmt->execute();

$resultado = $stmt->get_result();
$nombres = array();

while ($row = $resultado->fetch_assoc()) {
    $nombres[] = $row['nombre'];
}

echo json_encode($nombres);

$stmt->close();
$conn->close();
?>
<