<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Administrador - Deliburger</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Panel de administración de Deliburger">
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
        <h1 class="mb-5 text-center">Panel de Administrador</h1>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-4">
                <a href="<?= site_url('administrador/listado') ?>" class="btn btn-primary btn-lg w-100 py-4">
                    <i class="fas fa-users fa-2x mb-2"></i><br>
                    Usuarios
                </a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="<?= site_url('administrador/productos') ?>" class="btn btn-primary btn-lg w-100 py-4">
                    <i class="fas fa-hamburger fa-2x mb-2"></i><br>
                    Productos
                </a>
            </div>
        </div>
    </main>

    <?= $this->include('templates/footer') ?>
</body>
</html>