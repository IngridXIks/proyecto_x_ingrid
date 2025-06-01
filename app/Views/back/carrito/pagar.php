<h2>Confirmar Pago</h2>

<?php if (empty($carrito)): ?>
    <p>Tu carrito está vacío. <a href="<?= base_url() ?>">Volver a la tienda</a></p>
<?php else: ?>
    <table>
        <thead>
            <tr>
                <th>Producto</th><th>Cantidad</th><th>Precio</th><th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <?php $total = 0; ?>
            <?php foreach ($carrito as $item): ?>
                <tr>
                    <td><?= esc($item['nombre']) ?></td>
                    <td><?= esc($item['cantidad']) ?></td>
                    <td>$<?= number_format($item['precio'], 2) ?></td>
                    <td>$<?= number_format($item['precio'] * $item['cantidad'], 2) ?></td>
                </tr>
                <?php $total += $item['precio'] * $item['cantidad']; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    <h3>Total: $<?= number_format($total, 2) ?></h3>

    <form action="<?= base_url('carrito/pagar') ?>" method="post">
        <?= csrf_field() ?>

        <!-- Campos de pago, pueden ser ficticios o integrados a pasarela real -->
        <label for="nombre">Nombre en la tarjeta:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="tarjeta">Número de tarjeta:</label>
        <input type="text" id="tarjeta" name="tarjeta" required>

        <label for="fecha_exp">Fecha de expiración:</label>
        <input type="text" id="fecha_exp" name="fecha_exp" placeholder="MM/AA" required>

        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv" required>

        <button type="submit" class="btn btn-success">Pagar</button>
    </form>
<?php endif; ?>
