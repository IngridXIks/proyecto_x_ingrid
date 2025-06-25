<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>MIS PEDIDOS - Deliburger</title>
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

    <section class="profile-hero">
        <div class="container">
            <h1 class="profile-title"><?= $titulo ?? 'Mis Pedidos' ?></h1>
            <p class="profile-subtitle">Consulta el historial de tus pedidos realizados</p>
        </div>
    </section>

    <main class="container profile-container my-5">
        <div class="pedidos-container">
            <?php if (empty($pedidos)): ?>
                <div class="empty-pedidos">
                    <div class="empty-icon">
                        <i class="fas fa-shopping-basket"></i>
                    </div>
                    <h3 class="mb-3">No tienes pedidos aún</h3>
                    <p class="text-muted mb-4">¡Descubre nuestras deliciosas hamburguesas y realiza tu primer pedido!</p>
                    <a href="<?= base_url('/hamburguesas') ?>" class="btn btn-primary btn-lg">
                        <i class="fas fa-utensils me-2"></i> Ver Menú
                    </a>
                </div>
            <?php else: ?>
                <div class="row">
                    <?php foreach ($pedidos as $pedido): ?>
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="pedido-card card h-100">
                                <div class="pedido-header card-header d-flex justify-content-between align-items-center">
                                    <span>Pedido #<?= $pedido['id'] ?></span>
                                    <span class="pedido-badge badge bg-<?= 
                                        $pedido['estado'] == 'completado' ? 'success' : 
                                        ($pedido['estado'] == 'pendiente' ? 'warning' : 'secondary') 
                                    ?>">
                                        <?= ucfirst($pedido['estado']) ?>
                                    </span>
                                </div>
                                <div class="pedido-body card-body">
                                    <div class="mb-3">
                                        <h6 class="text-muted mb-1">Fecha</h6>
                                        <p class="mb-0"><?= date('d/m/Y H:i', strtotime($pedido['fecha'])) ?></p>
                                    </div>
                                    <div class="mb-4">
                                        <h6 class="text-muted mb-1">Total</h6>
                                        <h5 class="mb-0 text-danger">$<?= number_format($pedido['total'], 2) ?></h5>
                                    </div>
                                    <div class="d-grid">
                                        <a href="<?= base_url('mis-pedidos/' . $pedido['id']) ?>" class="btn btn-ver-detalle">
                                            <i class="fas fa-eye me-2"></i>Ver Detalles
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

    <?= $this->include('templates/footer') ?>
</body>
</html>