<?php
session_start();
include('Database.php'); 

// Identificar usuario o sesión
$user_id = $_SESSION['user_id'] ?? null;
$session_id = session_id();

// Obtener productos del carrito
if ($user_id) {
    $sql = "SELECT c.*, p.precio FROM carrito c 
            JOIN productos p ON c.producto_id = p.id 
            WHERE c.user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
} else {
    $sql = "SELECT c.*, p.precio FROM carrito c 
            JOIN productos p ON c.producto_id = p.id 
            WHERE c.session_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $session_id);
}
$stmt->execute();
$result = $stmt->get_result();

$total = 0;
$productos = [];

while ($row = $result->fetch_assoc()) {
    $subtotal = $row['precio'] * $row['cantidad'];
    $total += $subtotal;
    $productos[] = $row;
}

// Registrar venta
$sql = "INSERT INTO ventas (user_id, session_id, total) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssd", $user_id, $session_id, $total);
$stmt->execute();
$venta_id = $stmt->insert_id;

// Insertar detalles
$sql = "INSERT INTO venta_detalle (venta_id, producto_id, cantidad, precio_unitario) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

foreach ($productos as $producto) {
    $stmt->bind_param("iiid", $venta_id, $producto['producto_id'], $producto['cantidad'], $producto['precio']);
    $stmt->execute();
}

// Vaciar carrito
if ($user_id) {
    $sql = "DELETE FROM carrito WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
} else {
    $sql = "DELETE FROM carrito WHERE session_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $session_id);
}
$stmt->execute();

// Redirigir
header("Location: gracias.php");
exit;
?>
