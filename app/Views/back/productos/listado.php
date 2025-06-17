<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>PRODUCTOS - Deliburger</title>
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
    <h1>Productos</h1>
    <a href="<?= site_url('administrador/productos/crear') ?>" class="btn btn-success mb-3">Agregar Hamburguesa</a>
    <?php if (session()->getFlashdata('mensaje')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('mensaje') ?></div>
    <?php endif; ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Activo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($productos as $producto): ?>
            <tr>
                <td>
                    <?php if ($producto['imagen']): ?>
                        <img src="<?= base_url('public/img/hamburguesas/'.$producto['imagen']) ?>" width="60">
                    <?php endif; ?>
                </td>
                <td><?= esc($producto['nombre']) ?></td>
                <td>$<?= number_format($producto['precio'], 2) ?></td>
                <td>
                    <span class="badge bg-<?= $producto['activo'] ? 'success' : 'secondary' ?>">
                        <?= $producto['activo'] ? 'Activo' : 'Inactivo' ?>
                    </span>
                </td>
                <td>
                    <a href="<?= site_url('administrador/productos/'.$producto['id']) ?>" class="btn btn-info btn-sm">Ver</a>
                    <a href="<?= site_url('administrador/productos/editar/'.$producto['id']) ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="<?= site_url('administrador/productos/toggle/'.$producto['id']) ?>" class="btn btn-secondary btn-sm">
                        <?= $producto['activo'] ? 'Desactivar' : 'Activar' ?>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</main>
<?= $this->include('templates/footer') ?>
</body>
</html>