<?php
session_start();
include('Database.php');

$session_id = session_id();

$sql = "SELECT c.*, p.nombre, p.precio 
        FROM carrito c 
        JOIN productos p ON c.producto_id = p.id 
        WHERE c.session_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $session_id);
$stmt->execute();
$result = $stmt->get_result();

$total = 0;

echo "<h1>Carrito</h1>";
echo "<ul>";
while ($row = $result->fetch_assoc()) {
    $subtotal = $row['precio'] * $row['cantidad'];
    $total += $subtotal;
    echo "<li>{$row['nombre']} x {$row['cantidad']} = $" . number_format($subtotal, 2) . "</li>";
}
echo "</ul>";
echo "<h3>Total: $" . number_format($total, 2) . "</h3>";
?>
<a href="pagar.php">Finalizar compra</a>
