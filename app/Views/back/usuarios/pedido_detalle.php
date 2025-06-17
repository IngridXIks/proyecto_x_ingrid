<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ADMIN - Deliburger</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Administra tu perfil y direcciones en Deliburger">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/proyecto_x_ingrid/public/css/Miestilo.css">
</head>
<body>
    <!-- HEADER -->
    <?= $this->include('templates/header') ?>

    <main class="container my-5">
        <h1>Detalle del Pedido #<?= esc($pedido['id']) ?></h1>
        <p><strong>Fecha:</strong> <?= esc($pedido['fecha']) ?></p>
        <p><strong>Total:</strong> $<?= esc(number_format($pedido['total'], 2, ',', '.')) ?></p>
        <p><strong>Estado:</strong> <?= esc($pedido['estado']) ?></p>

        <h3>Productos</h3>
        <?php if (empty($detalles)): ?>
            <p>No hay productos en este pedido.</p>
        <?php else: ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID Producto</th>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Precio unitario</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($detalles as $detalle): ?>
                    <tr>
                        <td><?= esc($detalle['producto_id']) ?></td>
                        <td><?= esc($detalle['nombre_producto']) ?></td>
                        <td><?= esc($detalle['cantidad']) ?></td>
                        <td>$<?= esc(number_format($detalle['precio_unitario'], 2, ',', '.')) ?></td>
                        <td>$<?= esc(number_format($detalle['precio_unitario'] * $detalle['cantidad'], 2, ',', '.')) ?></td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        <?php endif; ?>

        <a href="<?= site_url('administrador/pedidos/'.$pedido['usuario_id']) ?>">Volver a los pedidos</a>
    </main>

    <?= $this->include('templates/footer') ?>
</body>
</html>