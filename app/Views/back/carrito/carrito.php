<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Carrito - Deliburger</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
 
    <link rel="stylesheet" href="/proyecto_x_ingrid/public/css/Miestilo.css">
</head>

<body>

<?= $this->include('templates/header') ?>
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
            <button class="btn btn-cart btn-checkout" id="pagarBtn">
                <i class="fas fa-credit-card"></i> Pagar
            </button>
        </div>
    <?php endif; ?>
</div>

<?= $this->include('templates/footer') ?>

<script>
<script>
// Animación al vaciar el carrito
document.querySelectorAll('.btn-remove').forEach(btn => {
    btn.addEventListener('click', function(e) {
        const item = this.closest('.cart-item');
        item.style.animation = 'fadeOut 0.5s forwards';
        setTimeout(() => {
            item.remove();
        }, 500);
    });
});
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.getElementById('pagarBtn').addEventListener('click', function() {
    <?php if (!empty($carrito)): ?>
        Swal.fire({
            title: '¿Confirmar compra?',
            text: 'Estás a punto de realizar el pago de $<?= number_format($total, 2) ?>',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, pagar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                // Mostrar carga mientras se procesa
                Swal.fire({
                    title: 'Procesando pago',
                    html: 'Por favor espera...',
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading()
                    },
                    allowOutsideClick: false
                });
                
                // Realizar petición AJAX
                fetch('<?= base_url('/carrito/procesar_pago') ?>', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: JSON.stringify({
                        productos: <?= json_encode($carrito) ?>,
                        total: <?= $total ?>
                    })
                })
                .then(response => response.json())
                .then(data => {
                    Swal.close();
                    if (data.success) {
                        // Mostrar confirmación y recargar la página
                        Swal.fire({
                            title: '¡Compra exitosa!',
                            text: 'Tu pedido #' + data.factura_id + ' ha sido procesado',
                            icon: 'success',
                            confirmButtonText: 'Aceptar'
                        }).then(() => {
                            // Recargar la página para vaciar el carrito
                            window.location.reload();
                        });
                    } else {
                        Swal.fire('Error', data.message || 'Ocurrió un error', 'error');
                    }
                })
                .catch(error => {
                    Swal.close();
                    Swal.fire('Error', 'No se pudo conectar con el servidor', 'error');
                });
            }
        });
    <?php endif; ?>
});
</script>
</body>
</html>