<?php
include "../config/conexion.php";

$sql = "SELECT * FROM clientes WHERE estado = 1";
$result = $conn->query($sql);

$clientes = [];

while ($row = $result->fetch_assoc()) {
    $clientes[] = $row;
}

echo json_encode($clientes);
?>