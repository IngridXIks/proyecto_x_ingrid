<!-- app/Views/productos.php -->

<h1>Catálogo de productos</h1>

<?php foreach ($productos as $producto): ?>
    <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
        <h2><?= esc($producto['nombre']) ?></h2>
        <p><?= esc($producto['descripcion']) ?></p>
        <p>Precio: $<?= esc($producto['precio']) ?></p>

        <form method="post" action="/carrito/agregar">
            <input type="hidden" name="producto_id" value="<?= $producto['id'] ?>">
            <input type="number" name="cantidad" value="1" min="1">
            <button type="submit">Agregar al carrito</button>
        </form>
    </div>
<?php endforeach; ?>
