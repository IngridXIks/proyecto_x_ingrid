<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Carrito</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Estilo CSS -->
  <link rel="stylesheet" href="/proyecto_x_ingrid/public/css/Miestilo.css">
  <!-- Font-Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Fuente Pacifico -->
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<?= $this->include('templates/header') ?>
<body>
<h1 class="carrito-h1">🛒 Tu Carrito</h1>

<div class="toggle-carrito">
    <a href="<?= base_url('/carrito/pagar') ?>" class="btn btn-success">Ir a Pagar</a> 
    <a href="<?= base_url('/carrito/agregar/1') ?>" class="btn btn-warning">Agregar Producto</a> 
    <a href="<?= base_url('/carrito/producto/1') ?>" class="btn btn-info">Ver Producto</a> 
</div>

<?php if (empty($carrito)): ?>
    <p>Tu carrito está vacío.</p>
<?php else: ?>
    <table class="table">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Subtotal</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($carrito as $item): ?>
                <tr>
                    <td><?= esc($item['nombre']) ?></td>
                    <td><?= esc($item['cantidad']) ?></td>
                    <td>$<?= number_format($item['precio'], 2) ?></td>
                    <td>$<?= number_format($item['precio'] * $item['cantidad'], 2) ?></td>
                    <td>
                        <form action="<?= base_url('carrito/eliminar') ?>" method="post" style="display:inline;">
                            <?= csrf_field() ?>
                            <input type="hidden" name="id" value="<?= esc($item['id']) ?>">
                            <button type="submit" class="btn btn-danger btn-sm">Quitar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div style="margin-top: 20px;">
        <a href="<?= base_url('/carrito/pagar') ?>" class="btn btn-success">Ir a Pagar</a>
    </div>
<?php endif; ?>

<?= $this->include('templates/footer') ?>

</body>
</html>
