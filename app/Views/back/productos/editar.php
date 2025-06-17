<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ADMIN - Deliburger</title>
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
    <h1>Editar Hamburguesa</h1>
    <form method="post" action="<?= site_url('administrador/productos/actualizar/'.$producto['id']) ?>" enctype="multipart/form-data">
        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" value="<?= esc($producto['nombre']) ?>" required>
        </div>
        <div class="mb-3">
            <label>Descripción</label>
            <textarea name="descripcion" class="form-control"><?= esc($producto['descripcion']) ?></textarea>
        </div>
        <div class="mb-3">
            <label>Precio</label>
            <input type="number" name="precio" class="form-control" step="0.01" value="<?= esc($producto['precio']) ?>" required>
        </div>
        <div class="mb-3">
            <label>Imagen actual:</label><br>
            <?php if ($producto['imagen']): ?>
                <img src="<?= base_url('public/img/hamburguesas/'.$producto['imagen']) ?>" width="100"><br>
            <?php endif; ?>
            <label>Nueva imagen (opcional):</label>
            <input type="file" name="imagen" class="form-control">
        </div>
        <div class="mb-3">
            <label>Activo</label>
            <input type="checkbox" name="activo" value="1" <?= $producto['activo'] ? 'checked' : '' ?>>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="<?= site_url('administrador/productos') ?>" class="btn btn-secondary">Cancelar</a>
    </form>
</main>
<?= $this->include('templates/footer') ?>
</body>
</html>