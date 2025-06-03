<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Carrito - Deliburger</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/proyecto_x_ingrid/public/css/Miestilo.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Righteous&display=swap" rel="stylesheet">

</head>
<?= $this->include('templates/header') ?>
<body>

<!-- Paso a paso del checkout (oculto inicialmente) -->
<div id="checkout-steps" class="container-fluid d-none" style="max-width: 1200px;">
  <div class="row mb-4">
    <div class="col-12 text-center">
      <h2 class="logo-font mb-4">Finaliza tu Pedido</h2>
      <ul class="nav nav-pills justify-content-center mb-4" id="checkoutProgress">
        <li class="nav-item">
          <a class="nav-link active" id="step1-tab">1. Carrito</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" id="step2-tab">2. Envío</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" id="step3-tab">3. Pago</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" id="step4-tab">4. Confirmación</a>
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- Contenedor principal del carrito -->
<div class="cart-container fade-in">
    <h1 class="cart-title"><i class="fas fa-shopping-cart"></i> Tu Carrito</h1>

    <?php if(session()->getFlashdata('success')): ?>
        <div class="alert alert-success animate__animated animate__bounceIn"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <?php if(session()->getFlashdata('error')): ?>
        <div class="alert alert-danger animate__animated animate__headShake"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>

    <?php if (empty($carrito)): ?>
        <div class="empty-cart cart-empty-animation text-center py-5">
            <i class="fas fa-shopping-basket fa-4x mb-3"></i>
            <h3 class="mb-3">¡Oh no! Tu carrito está vacío</h3>
            <p class="mb-4">Descubre nuestras deliciosas hamburguesas</p>
            <a href="<?= base_url('/hamburguesas') ?>" class="btn btn-primary btn-lg">
                <i class="fas fa-utensils"></i> Ver Menú
            </a>
        </div>
    <?php else: ?>
        <table class="cart-table">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Subtotal</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php $total = 0; ?>
                <?php foreach ($carrito as $item): ?>
                    <?php $subtotal = $item['precio'] * $item['cantidad']; ?>
                    <?php $total += $subtotal; ?>
                    <tr class="cart-item">
                        <td data-label="Producto">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h5 class="mb-1"><?= esc($item['nombre']) ?></h5>
                                    <small class="text-muted"><?= esc($item['descripcion'] ?? '') ?></small>
                                </div>
                            </div>
                        </td>
                        <td data-label="Cantidad">
                            <div class="quantity-selector d-flex align-items-center">
                                <form action="<?= base_url('carrito/actualizar') ?>" method="post" class="d-inline">
                                    <?= csrf_field() ?>
                                    <input type="hidden" name="id" value="<?= esc($item['id_producto']) ?>">
                                    <input type="hidden" name="cantidad" value="<?= esc($item['cantidad'] - 1) ?>">
                                    <button type="submit" class="btn btn-sm btn-outline-secondary quantity-btn" <?= $item['cantidad'] <= 1 ? 'disabled' : '' ?>>
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </form>
                                <span class="mx-2 quantity-value"><?= esc($item['cantidad']) ?></span>
                                <form action="<?= base_url('carrito/actualizar') ?>" method="post" class="d-inline">
                                    <?= csrf_field() ?>
                                    <input type="hidden" name="id" value="<?= esc($item['id_producto']) ?>">
                                    <input type="hidden" name="cantidad" value="<?= esc($item['cantidad'] + 1) ?>">
                                    <button type="submit" class="btn btn-sm btn-outline-secondary quantity-btn">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                        <td data-label="Precio">$<?= number_format($item['precio'], 2) ?></td>
                        <td data-label="Subtotal">$<?= number_format($subtotal, 2) ?></td>
                        <td data-label="Acciones">
                            <form action="<?= base_url('carrito/eliminar') ?>" method="post" class="d-inline">
                                <?= csrf_field() ?>
                                <input type="hidden" name="id" value="<?= esc($item['id']) ?>">
                                <button type="submit" class="btn btn-cart btn-remove">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <tr class="cart-total">
                    <td colspan="3" class="text-end"><strong>Total:</strong></td>
                    <td><strong>$<?= number_format($total, 2) ?></strong></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <div class="d-flex justify-content-between mt-5">
            <a href="<?= base_url('/hamburguesas') ?>" class="btn btn-cart btn-outline-primary">
                <i class="fas fa-chevron-left"></i> Seguir Comprando
            </a>
            <a href="<?= base_url('/carrito/pagar') ?>" class="btn btn-cart btn-checkout">
                <i class="fas fa-credit-card"></i> Ir a Pagar
            </a>
        </div>
    <?php endif; ?>
</div>

<?= $this->include('templates/footer') ?>

<script>
// Animación al vaciar el carrito
document.querySelectorAll('.btn-remove').forEach(btn => {
    btn.addEventListener('click', function(e) {
        const item = this.closest('.cart-item');
        item.style.animation = 'fadeOut 0.5s forwards';
        setTimeout(() => {
            item.remove();
            // Actualizar total u otras operaciones necesarias
        }, 500);
    });
});

</script>

</body>
</html>