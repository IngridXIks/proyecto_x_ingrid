<?php helper('form'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Comercialización - Deliburger | Hamburguesas Artesanales</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descubre cómo llevamos el sabor de Deliburger hasta tu puerta con nuestros múltiples canales de distribución">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Estilo personalizado -->
    <link rel="stylesheet" href="/proyecto_x_ingrid/public/css/Miestilo.css">
</head>

<body class="pagina-legal">
    <!-- HEADER -->
    <?= $this->include('templates/header') ?>

    <!-- Hero Section -->
    <section class="commercial-hero">
        <div class="container">
            <h1 class="commercial-title">Nuestros Canales</h1>
            <p class="commercial-subtitle">Llevamos Deliburger a donde estés</p>
        </div>
    </section>

    <main class="commercial-container container my-5">
        <!-- Introducción -->
        <section class="intro-section mb-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title mb-4">En <span class="deliburger-brand">Deliburger</span> nos adaptamos a ti</h2>
                    <p class="lead">Ofrecemos múltiples formas para que disfrutes de nuestras hamburguesas artesanales, con la misma calidad y sabor excepcional en cada canal.</p>
                </div>
            </div>
        </section>

        <!-- Canales de Comercialización -->
        <section class="channels-section">
            <h2 class="section-title text-center mb-5">Cómo puedes disfrutar Deliburger</h2>
            
            <div class="row g-4 justify-content-center">
                <!-- Online -->
                <div class="col-md-6 col-lg-4">
                    <div class="channel-card card h-100 shadow-sm border-0">
                        <div class="channel-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title h4">Pedidos Online</h3>
                            <p class="card-text">Ordena desde nuestra app o página web con solo unos clics. Pago seguro y seguimiento en tiempo real de tu pedido.</p>
                            
                        </div>
                    </div>
                </div>
                
                <!-- Delivery -->
                <div class="col-md-6 col-lg-4">
                    <div class="channel-card card h-100 shadow-sm border-0">
                        <div class="channel-icon">
                            <i class="fas fa-motorcycle"></i>
                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title h4">Delivery Express</h3>
                            <p class="card-text">Recibe en tu hogar u oficina con nuestro servicio de entrega rápida o a través de Rappi y PedidosYa.</p>
                          
                        </div>
                    </div>
                </div>
                
                <!-- Local -->
                <div class="col-md-6 col-lg-4">
                    <div class="channel-card card h-100 shadow-sm border-0">
                        <div class="channel-icon">
                            <i class="fas fa-store"></i>
                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title h4">Experiencia en Local</h3>
                            <p class="card-text">Visita nuestro acogedor restaurante y disfruta del ambiente único Deliburger con servicio de primera.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Proceso de Entrega -->
        <section class="delivery-process mt-5 py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="/proyecto_x_ingrid/public/img/paquete.jpg" alt="Proceso de entrega Deliburger" class="img-fluid rounded-3">
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title mb-4">Nuestro compromiso con la entrega</h2>
                    <p class="lead">Garantizamos que cada hamburguesa llegue a tus manos en perfectas condiciones, manteniendo su calidad y sabor.</p>
                    
                    <div class="process-steps mt-4">
                        <div class="process-step d-flex mb-4">
                            <div class="step-number me-3">1</div>
                            <div>
                                <h3 class="h5">Empaque especial</h3>
                                <p>Diseñado para mantener el calor y textura durante el transporte.</p>
                            </div>
                        </div>
                        
                        <div class="process-step d-flex mb-4">
                            <div class="step-number me-3">2</div>
                            <div>
                                <h3 class="h5">Control de calidad</h3>
                                <p>Verificación exhaustiva antes de salir de nuestra cocina.</p>
                            </div>
                        </div>
                        
                        <div class="process-step d-flex">
                            <div class="step-number me-3">3</div>
                            <div>
                                <h3 class="h5">Entrega rápida</h3>
                                <p>Rutas optimizadas para llegar en el menor tiempo posible.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Aliados -->
        <section class="partners-section mt-5">
            <h2 class="section-title text-center mb-5">Nuestros aliados comerciales</h2>
            <div class="row justify-content-center align-items-center g-4">
                <div class="col-6 col-md-3 text-center">
                    <img src="/proyecto_x_ingrid/public/img/rappi.jpg" alt="Rappi" class="img-fluid partner-logo">
                </div>
                <div class="col-6 col-md-3 text-center">
                    <img src="/proyecto_x_ingrid/public/img/pedidosya.png" alt="PedidosYa" class="img-fluid partner-logo">
                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <?= $this->include('templates/footer') ?>


</body>
</html>