<?php
include "../config/conexion.php";

$data = json_decode(file_get_contents("php://input"), true);
$id = $data['id_cliente'];

$stmt = $conn->prepare("UPDATE clientes SET estado=0 WHERE id_cliente=?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo json_encode(["mensaje" => "Cliente eliminado"]);
} else {
    echo json_encode(["error" => "Error al eliminar"]);
}
?>