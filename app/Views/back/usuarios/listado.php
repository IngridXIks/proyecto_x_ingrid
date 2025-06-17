
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
    <!-- HEADER -->
    <?= $this->include('templates/header') ?>

    <main class="container my-5">
        <h1>Lista de Usuarios</h1>

        <?php if (session()->getFlashdata('mensaje')): ?>
            <p style="color:green;"><?= session()->getFlashdata('mensaje') ?></p>
        <?php endif; ?>

        <a href="<?= site_url('administrador/create') ?>" class="btn btn-primary mb-3">Crear nuevo usuario</a>

        <table border="1" cellpadding="5" class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th><th>Nombre</th><th>Email</th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?= esc($usuario['id_usuario']) ?></td>
                    <td><?= esc($usuario['nombre']) ?></td>
                    <td><?= esc($usuario['email']) ?></td>
                    <td>
                        <a href="<?= site_url('administrador/show/'.$usuario['id_usuario']) ?>">Ver</a> |
                        <a href="<?= site_url('administrador/edit/'.$usuario['id_usuario']) ?>">Editar</a> |
                        <a href="<?= site_url('administrador/delete/'.$usuario['id_usuario']) ?>" onclick="return confirm('¿Estás seguro?')">Eliminar</a> |
                        <a href="<?= site_url('administrador/pedidos/'.$usuario['id_usuario']) ?>">Ver pedidos</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </main>

    <?= $this->include('templates/footer') ?>
</body>
</html>