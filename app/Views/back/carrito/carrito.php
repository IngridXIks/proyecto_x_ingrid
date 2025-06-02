<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Carrito</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/proyecto_x_ingrid/public/css/Miestilo.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<?= $this->include('templates/header') ?>
<body>

<h1 class="text-center my-4">🛒 Tu Carrito</h1>

<div class="text-center mb-3">
    <form action="<?= base_url('carrito/agregar') ?>" method="post">
        <?= csrf_field() ?>
        <input type="hidden" name="id_producto" value="1"> <!-- ID del producto a agregar -->
        <button type="submit" class="btn btn-warning">Agregar producto de prueba</button>
    </form>
</div>

<div class="container">
    <?php if(session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <?php if(session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>

    <?php if (empty($carrito)): ?>
        <p class="text-center">Tu carrito está vacío.</p>
    <?php else: ?>
        <table class="table table-striped">
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
                <?php $total = 0; ?>
                <?php foreach ($carrito as $item): ?>
                    <?php $subtotal = $item['precio'] * $item['cantidad']; ?>
                    <?php $total += $subtotal; ?>
                    <tr>
                        <td><?= esc($item['nombre']) ?></td>
                        <td><?= esc($item['cantidad']) ?></td>
                        <td>$<?= number_format($item['precio'], 2) ?></td>
                        <td>$<?= number_format($subtotal, 2) ?></td>
                        <td>
                            <form action="<?= base_url('carrito/eliminar') ?>" method="post">
                                <?= csrf_field() ?>
                                <input type="hidden" name="id" value="<?= esc($item['id']) ?>">
                                <button type="submit" class="btn btn-danger btn-sm">Quitar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="3" class="text-end"><strong>Total:</strong></td>
                    <td><strong>$<?= number_format($total, 2) ?></strong></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <div class="text-center mt-4">
            <a href="<?= base_url('/carrito/pagar') ?>" class="btn btn-lg btn-success">Ir a Pagar</a>
        </div>
    <?php endif; ?>
</div>

<?= $this->include('templates/footer') ?>
</body>
</html>
