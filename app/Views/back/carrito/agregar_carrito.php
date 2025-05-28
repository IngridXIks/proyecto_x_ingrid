<?php
session_start();
include('Database.php'); // conexión a la base de datos

$producto_id = $_POST['producto_id'];
$cantidad = $_POST['cantidad'] ?? 1;
$session_id = session_id();

// Verificar si ya existe el producto en el carrito
$sql = "SELECT * FROM carrito WHERE session_id = ? AND producto_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $session_id, $producto_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Si ya existe, aumentar cantidad
    $sql = "UPDATE carrito SET cantidad = cantidad + ? WHERE session_id = ? AND producto_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isi", $cantidad, $session_id, $producto_id);
    $stmt->execute();
} else {
    // Si no existe, insertar
    $sql = "INSERT INTO carrito (session_id, producto_id, cantidad) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sii", $session_id, $producto_id, $cantidad);
    $stmt->execute();
}

header("Location: carrito.php"); // redirigir al carrito
?>
