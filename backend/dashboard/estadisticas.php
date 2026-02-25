<?php
include "../config/conexion.php";

$data = [];

// Total facturas
$sql1 = "SELECT COUNT(*) as total_facturas FROM facturas";
$res1 = $conn->query($sql1);
$data['facturas'] = $res1->fetch_assoc()['total_facturas'];

// Total productos
$sql2 = "SELECT COUNT(*) as total_productos FROM productos WHERE estado=1";
$res2 = $conn->query($sql2);
$data['productos'] = $res2->fetch_assoc()['total_productos'];

echo json_encode($data);
?>