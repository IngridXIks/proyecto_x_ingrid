
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
        <h1>Detalles del Usuario</h1>

        <p><strong>ID:</strong> <?= esc($usuario['id_usuario']) ?></p>
        <p><strong>Nombre:</strong> <?= esc($usuario['nombre']) ?></p>
        <p><strong>Email:</strong> <?= esc($usuario['email']) ?></p>
        <p><strong>Celular:</strong> <?= esc($usuario['celular']) ?></p>
        <p><strong>ID Dirección:</strong> <?= esc($usuario['id_direccion']) ?></p>
        <p><strong>Activo:</strong> <?= $usuario['activo'] ? 'Sí' : 'No' ?></p>

        <a href="<?= site_url('administrador') ?>">Volver a la lista</a>
    </main>

    <?= $this->include('templates/footer') ?>
</body>
</html>