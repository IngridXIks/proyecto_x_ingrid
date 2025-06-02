<h2>Agregar producto ID <?= esc($producto_id) ?> al carrito</h2>
<form action="<?= base_url('carrito/agregar') ?>" method="post">
    <?= csrf_field() ?>
    <input type="hidden" name="producto_id" value="<?= esc($producto_id) ?>">
    <button type="submit" class="btn btn-primary">Agregar</button>
</form>
