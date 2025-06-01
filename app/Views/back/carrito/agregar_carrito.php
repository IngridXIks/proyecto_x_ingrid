<h2>Agregar Producto al Carrito</h2>

<?php if (isset($error)): ?>
    <div class="alert alert-danger"><?= esc($error) ?></div>
<?php endif; ?>

<form action="<?= base_url('carrito/agregar') ?>" method="post">
    <?= csrf_field() ?>
    <input type="hidden" name="producto_id" value="<?= esc($producto['id']) ?>">
    
    <label for="cantidad">Cantidad:</label>
    <input type="number" id="cantidad" name="cantidad" value="1" min="1" required>

    <button type="submit" class="btn btn-primary">Agregar al Carrito</button>
</form>

