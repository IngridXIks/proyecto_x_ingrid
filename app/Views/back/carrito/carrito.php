<h1>🛒 Tu Carrito</h1>

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
<?php endif; ?>
