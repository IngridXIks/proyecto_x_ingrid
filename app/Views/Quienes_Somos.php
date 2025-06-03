<?php helper('form'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Quiénes Somos - Deliburger | Hamburguesas Artesanales</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Conoce al equipo detrás de Deliburger y nuestra pasión por la gastronomía innovadora">
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
    <section class="about-hero">
        <div class="container">
            <h1 class="about-title">Nuestro Equipo</h1>
            <p class="about-subtitle">Conoce a las personas detrás de Deliburger</p>
        </div>
    </section>

    <main class="about-container container my-5">
        <section class="team-section row g-4 justify-content-center">
            <!-- Tarjeta Ingrid -->
            <article class="col-md-6 col-lg-5">
                <div class="team-card card h-100 shadow-sm border-0">
                    <div class="team-img-container">
                        <img src="/proyecto_x_ingrid/public/img/mi-foto.jpeg" 
                             class="card-img-top" 
                             alt="Ingrid X, co-fundadora de Deliburger">
                    </div>
                    <div class="card-body text-center">
                        <h2 class="card-title h4">Ingrid X</h2>
                        <p class="team-position text-muted">Co-Fundadora</p>
                        <p class="card-text">"Estudiante de Sistemas apasionada por la innovación y desarrollo de soluciones digitales para la gastronomía."</p>
                        <div class="social-links mt-3">
                            <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-github"></i></a>
                            <a href="#" class="social-icon"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Tarjeta Germán -->
            <article class="col-md-6 col-lg-5">
                <div class="team-card card h-100 shadow-sm border-0">
                    <div class="team-img-container">
                        <img src="/proyecto_x_ingrid/public/img/yoo.jpg" 
                             class="card-img-top" 
                             alt="Germán Saucedo, co-fundador de Deliburger">
                    </div>
                    <div class="card-body text-center">
                        <h2 class="card-title h4">Germán Saucedo</h2>
                        <p class="team-position text-muted">Co-Fundador</p>
                        <p class="card-text">"Desarrollador web especializado en crear experiencias digitales para el sector gastronómico."</p>
                        <div class="social-links mt-3">
                            <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-github"></i></a>
                            <a href="#" class="social-icon"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </article>
        </section>

        <!-- Nuestra Historia -->
        <section class="our-story mt-5 py-4">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2 class="section-title text-center mb-4">Nuestra Historia</h2>
                    <div class="story-content bg-light p-4 rounded-3">
                        <p class="lead text-center">
                            En <strong class="text-primary">Deliburger</strong>, nos comprometemos a ofrecer una experiencia gastronómica excepcional, combinando tradición e innovación en cada hamburguesa artesanal.
                        </p>
                        <p>
                            Este proyecto surge como iniciativa para fortalecer la presencia digital de <strong>Deliburger</strong>, marca que ha demostrado excelencia en el competitivo sector gastronómico. Desde su fundación, nos hemos distinguido por nuestro enfoque innovador, ofreciendo productos de alta calidad elaborados con ingredientes frescos y seleccionados meticulosamente.
                        </p>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="d-flex mb-3">
                                    <div class="me-3 text-primary">
                                        <i class="fas fa-bullseye fa-2x"></i>
                                    </div>
                                    <div>
                                        <h3 class="h5">Nuestra Misión</h3>
                                        <p>Revolucionar la experiencia de las hamburguesas artesanales mediante sabores únicos y atención al detalle.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex mb-3">
                                    <div class="me-3 text-primary">
                                        <i class="fas fa-eye fa-2x"></i>
                                    </div>
                                    <div>
                                        <h3 class="h5">Nuestra Visión</h3>
                                        <p>Ser reconocidos como líderes en innovación gastronómica digital para el 2025.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Valores -->
        <section class="values-section mt-5">
            <h2 class="section-title text-center mb-5">Nuestros Valores</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="value-card text-center p-4 h-100">
                        <div class="value-icon mb-3">
                            <i class="fas fa-heart fa-3x text-primary"></i>
                        </div>
                        <h3 class="h5">Pasión</h3>
                        <p>Amamos lo que hacemos y eso se refleja en cada producto que creamos.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="value-card text-center p-4 h-100">
                        <div class="value-icon mb-3">
                            <i class="fas fa-lightbulb fa-3x text-primary"></i>
                        </div>
                        <h3 class="h5">Innovación</h3>
                        <p>Buscamos constantemente nuevas formas de sorprender a nuestros clientes.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="value-card text-center p-4 h-100">
                        <div class="value-icon mb-3">
                            <i class="fas fa-award fa-3x text-primary"></i>
                        </div>
                        <h3 class="h5">Calidad</h3>
                        <p>Utilizamos solo los mejores ingredientes para garantizar la excelencia.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <?= $this->include('templates/footer') ?>

</body>
</html>