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
        <h1>Pedidos de <?= esc($usuario['nombre']) ?></h1>

        <?php if (empty($pedidos)): ?>
            <p>Este usuario no tiene pedidos.</p>
        <?php else: ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID Pedido</th>
                        <th>Fecha</th>
                        <th>Total</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($pedidos as $pedido): ?>
                    <tr>
                        <td><?= esc($pedido['id']) ?></td>
                        <td><?= esc($pedido['fecha']) ?></td>
                        <td>$<?= esc(number_format($pedido['total'], 2, ',', '.')) ?></td>
                        <td><?= esc($pedido['estado']) ?></td>
                        <td>
                            <a href="<?= site_url('administrador/pedido_detalle/'.$pedido['id']) ?>" class="btn btn-sm btn-primary">
                                Ver detalles
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        <?php endif; ?>

        <a href="<?= site_url('administrador') ?>">Volver a la lista</a>
    </main>

    <?= $this->include('templates/footer') ?>
</body>
</html>