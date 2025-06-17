<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>VER HAMBURGUESA - Deliburger</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Administra tu perfil y direcciones en Deliburger">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/proyecto_x_ingrid/public/css/Miestilo.css">
</head>
<body>
<?= $this->include('templates/header') ?>
<main class="container my-5">
    <h1><?= esc($producto['nombre']) ?></h1>
    <?php if ($producto['imagen']): ?>
        <img src="<?= base_url('public/img/hamburguesas/'.$producto['imagen']) ?>" width="200" class="mb-3">
    <?php endif; ?>
    <p><strong>Descripción:</strong> <?= esc($producto['descripcion']) ?></p>
    <p><strong>Precio:</strong> $<?= number_format($producto['precio'], 2) ?></p>
    <p><strong>Estado:</strong> <?= $producto['activo'] ? 'Activo' : 'Inactivo' ?></p>
    <a href="<?= site_url('administrador/productos/editar/'.$producto['id']) ?>" class="btn btn-warning">Editar</a>
    <a href="<?= site_url('administrador/productos') ?>" class="btn btn-secondary">Volver</a>
</main>
<?= $this->include('templates/footer') ?>
</body>
</html>