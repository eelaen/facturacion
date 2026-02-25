<?php
include "../config/conexion.php";

$sql = "SELECT c.nombre, c.telefono, f.total, f.fecha
        FROM facturas f
        INNER JOIN clientes c ON f.id_cliente = c.id_cliente
        WHERE f.estado_pago = 'Pendiente'";

$result = $conn->query($sql);

$deudores = [];

while($row = $result->fetch_assoc()){
    $deudores[] = $row;
}

echo json_encode($deudores);
?>