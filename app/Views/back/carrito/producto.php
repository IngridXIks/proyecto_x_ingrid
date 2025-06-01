<h2><?= esc($producto['nombre']) ?></h2>

<p>Precio: $<?= number_format($producto['precio'], 2) ?></p>
<p>Descripción: <?= esc($producto['descripcion']) ?></p>

<form action="<?= base_url('carrito/agregar') ?>" method="post">
    <?= csrf_field() ?>
    <input type="hidden" name="producto_id" value="<?= esc($producto['id']) ?>">

    <label for="cantidad">Cantidad:</label>
    <input type="number" id="cantidad" name="cantidad" value="1" min="1" required>

    <button type="submit" class="btn btn-primary">Agregar al Carrito</button>
</form>
