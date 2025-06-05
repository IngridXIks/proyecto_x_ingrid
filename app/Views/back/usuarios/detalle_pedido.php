<?php helper('form'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle de Pedido - Deliburger</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Detalles de tu pedido en Deliburger">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
 
    <link rel="stylesheet" href="/proyecto_x_ingrid/public/css/Miestilo.css">
</head>

<body>
    <!-- HEADER -->
    <?= $this->include('templates/header') ?>

    <div class="container my-5">
        <div class="detalle-container">
            <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
                <h1 class="detalle-title"><i class="fas fa-receipt me-2"></i><?= $titulo ?></h1>
                <a href="<?= base_url('/mis-pedidos') ?>" class="btn btn-volver mt-2 mt-md-0">
                    <i class="fas fa-arrow-left me-2"></i>Volver a Pedidos
                </a>
            </div>

            <!-- Información del pedido -->
            <div class="info-pedido">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h6 class="text-muted mb-1">Número de Pedido</h6>
                            <p class="mb-0">#<?= $factura['id'] ?></p>
                        </div>
                        <div class="mb-3">
                            <h6 class="text-muted mb-1">Fecha</h6>
                            <p class="mb-0"><?= date('d/m/Y H:i', strtotime($factura['fecha'])) ?></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h6 class="text-muted mb-1">Estado</h6>
                            <span class="badge-estado badge bg-<?= 
                                $factura['estado'] == 'completado' ? 'success' : 
                                ($factura['estado'] == 'pendiente' ? 'warning' : 'secondary') 
                            ?>">
                                <?= ucfirst($factura['estado']) ?>
                            </span>
                        </div>
                        <div class="mb-3">
                            <h6 class="text-muted mb-1">Total</h6>
                            <h4 class="mb-0 text-danger">$<?= number_format($factura['total'], 2) ?></h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lista de productos -->
            <h4 class="mb-4"><i class="fas fa-list-ul me-2"></i>Productos</h4>
            
            <div class="row">
                <?php foreach ($detalles as $detalle): ?>
                    <div class="col-12 mb-3">
                        <div class="producto-card card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <h5 class="mb-1"><?= $detalle['nombre'] ?></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row text-center text-md-start">
                                            <div class="col-4 col-md-3">
                                                <h6 class="text-muted mb-1">Cantidad</h6>
                                                <p class="mb-0"><?= $detalle['cantidad'] ?></p>
                                            </div>
                                            <div class="col-4 col-md-3">
                                                <h6 class="text-muted mb-1">Precio</h6>
                                                <p class="mb-0">$<?= number_format($detalle['precio_unitario'], 2) ?></p>
                                            </div>
                                            <div class="col-4 col-md-6">
                                                <h6 class="text-muted mb-1">Subtotal</h6>
                                                <p class="mb-0 fw-bold">$<?= number_format($detalle['subtotal'], 2) ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Total -->
            <div class="total-box mt-4">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Total del Pedido</h4>
                    <h3 class="mb-0 text-danger">$<?= number_format($factura['total'], 2) ?></h3>
                </div>
            </div>

            <!-- Botones -->
            <div class="d-flex justify-content-between mt-4 flex-wrap">
                <a href="<?= base_url('/hamburguesas') ?>" class="btn btn-outline-primary mb-2 mb-md-0">
                    <i class="fas fa-utensils me-2"></i>Volver al Menú
                </a>
            </div>
        </div>
    </div>

    <?= $this->include('templates/footer') ?>
</body>
</html>