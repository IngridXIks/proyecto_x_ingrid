<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consultas - Deliburger</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Panel de consultas de Deliburger">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/proyecto_x_ingrid/public/css/Miestilo.css">
</head>
<body>
    <!-- HEADER -->
    <?= $this->include('templates/header') ?>

    <section class="profile-hero">
        <div class="container">
            <h1 class="profile-title"><?= $titulo ?? 'Consultas de Usuarios' ?></h1>
            <p class="profile-subtitle">Visualiza y responde las consultas recibidas</p>
        </div>
    </section>

    <main class="container profile-container my-5">
        <div class="pedidos-container">
            <?php if (empty($consultas)): ?>
                <div class="empty-pedidos text-center">
                    <div class="empty-icon mb-3">
                        <i class="fas fa-question-circle fa-3x"></i>
                    </div>
                    <h3 class="mb-3">No hay consultas</h3>
                    <p class="text-muted mb-4">Aún no se han recibido consultas de los usuarios.</p>
                </div>
            <?php else: ?>
                <div class="row">
                    <?php foreach ($consultas as $consulta): ?>
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="pedido-card card h-100">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <span>Consulta #<?= $consulta['id'] ?></span>
                                    <span class="badge bg-<?= $consulta['respondida'] ? 'success' : 'warning' ?>">
                                        <?= $consulta['respondida'] ? 'Respondida' : 'Pendiente' ?>
                                    </span>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <h6 class="text-muted mb-1">Usuario</h6>
                                        <p class="mb-0"><?= esc($consulta['nombre']) ?></p>
                                    </div>
                                    <div class="mb-3">
                                        <h6 class="text-muted mb-1">Consulta</h6>
                                        <p class="mb-0"><?= esc($consulta['mensaje']) ?></p>
                                    </div>
                                    <div class="mb-3">
                                        <h6 class="text-muted mb-1">Fecha</h6>
                                        <p class="mb-0"><?= date('d/m/Y H:i', strtotime($consulta['creado_en'])) ?></p>
                                    </div>
                                    <div class="d-grid">
                                        <a href="<?= base_url('administrador/consultas/responder/' . $consulta['id']) ?>" class="btn btn-primary">
                                            <i class="fas fa-reply me-2"></i>
                                            <?= $consulta['respondida'] ? 'Ver respuesta' : 'Responder' ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </main>

    <!-- FOOTER -->
    <?= $this->include('templates/footer') ?>
</body>
</html>
