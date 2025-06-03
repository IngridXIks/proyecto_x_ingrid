<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Deliburger - Hamburguesas Artesanales</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Righteous&display=swap" rel="stylesheet">
  <!-- Estilo personalizado -->
  <link rel="stylesheet" href="/proyecto_x_ingrid/public/css/Miestilo.css">
</head>

<body>
  <?= $this->include('templates/header') ?>

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <div class="hero-content">
        <h1 class="hero-title logo-font">DELIBURGER</h1>
        <p class="lead fs-3 mb-4">Hamburguesas artesanales hechas con ingredientes frescos y de la más alta calidad.</p>
        <a href="#menu" class="btn btn-primary btn-lg">Ver Menú</a>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="py-5">
    <div class="container py-5">
      <div class="row g-4">
        <div class="col-md-4">
          <div class="feature-card text-center">
            <div class="feature-icon">
              <i class="fas fa-seedling"></i>
            </div>
            <h3>Ingredientes Frescos</h3>
            <p>Usamos solo ingredientes locales y frescos en todas nuestras preparaciones.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-card text-center">
            <div class="feature-icon">
              <i class="fas fa-bread-slice"></i>
            </div>
            <h3>Pan Artesanal</h3>
            <p>Nuestro pan es horneado diariamente con recetas tradicionales.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-card text-center">
            <div class="feature-icon">
              <i class="fas fa-clock"></i>
            </div>
            <h3>Servicio Rápido</h3>
            <p>Preparamos tu pedido en menos de 15 minutos sin sacrificar calidad.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Menu Section -->
  <section id="menu" class="py-5 bg-light">
    <div class="container py-5">
      <h2 class="section-title text-center">¡Algunas Bombas!</h2>
      
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="food-card">
            <img src="/proyecto_x_ingrid/public/img/Hamburguesas/big_pons_simple.jpg" alt="Hamburguesa Simple" class="food-img">
            <div class="food-body">
              <h3 class="food-title">Deli Simple + Papas Fritas</h3>
              <p class="text-muted">Medallon x1 Cheddar Fetas x2 Bacon Cebolla Crispy Aderezo Deli</p>
              <p class="food-price">$16000.00</p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
          <div class="food-card">
            <img src="/proyecto_x_ingrid/public/img/Hamburguesas/big_pons_doble.jpg" alt="Hamburguesa Doble" class="food-img">
            <div class="food-body">
              <h3 class="food-title">Deli Doble + Papas Fritas</h3>
              <p class="text-muted">Medallon x2 Cheddar Fetas x4 Bacon Cebolla Crispy Aderezo Deli</p>
              <p class="food-price">$19500.00</p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
          <div class="food-card">
            <img src="/proyecto_x_ingrid/public/img/Hamburguesas/royal_doble.jpg" alt="Hamburguesa Especial" class="food-img">
            <div class="food-body">
              <h3 class="food-title">Royal Doble + Papas Fritas</h3>
              <p class="text-muted">Medallon x2 Cheddar Fetas x4 Cebolla Cruda Ketchup Mostaza Pepino</p>
              <p class="food-price">$17500.00</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="food-card">
            <img src="/proyecto_x_ingrid/public/img/Hamburguesas/stacked_bacon_doble.jpg" alt="Hamburguesa Especial" class="food-img">
            <div class="food-body">
              <h3 class="food-title">Stacked Bacon Doble + Papas Fritas</h3>
              <p class="text-muted">Medallón x2 + Cheddar x4 + Bacon ahumado x4 + Relish sauce + Papas fritas</p>
              <p class="food-price">$19500.00</p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="text-center mt-5">
        <a href="<?= base_url('/hamburguesas') ?>" class="btn btn-primary btn-lg">
                <i class="fas fa-utensils"></i> Ver Menú Completo
                </a>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="py-5">
    <div class="container py-5">
      <h2 class="section-title text-center">Lo que dicen nuestros clientes</h2>
      
      <div class="row g-4">
        <div class="col-md-4">
          <div class="testimonial-card text-center">
            <img src="/proyecto_x_ingrid/public/img/1.avif" alt="Cliente 1" class="testimonial-img mb-3">
            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p>"Las mejores hamburguesas de la ciudad. El pan es increíble, la carne siempre jugosa y sabrosa."</p>
            <h5 class="mt-3">Carlos M.</h5>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="testimonial-card text-center">
            <img src="/proyecto_x_ingrid/public/img/3.avif" alt="Cliente 2" class="testimonial-img mb-3">
            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p>"Me encanta que usan ingredientes de calidad. Se nota la diferencia con otras cadenas."</p>
            <h5 class="mt-3">Ana L.</h5>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="testimonial-card text-center">
            <img src="/proyecto_x_ingrid/public/img/2.avif" alt="Cliente 3" class="testimonial-img mb-3">
            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <p>"El servicio es rápido y las hamburguesas siempre consistentes en su excelente sabor."</p>
            <h5 class="mt-3">Javier R.</h5>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="cta-section">
    <div class="pattern"></div>
    <div class="container position-relative">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="cta-title">¿Listo para probar la mejor hamburguesa?</h2>
          <p class="lead mb-5">Descarga nuestra app y obtén un 10% de descuento en tu primer pedido.</p>
          <div class="d-flex justify-content-center gap-3">
            <a href="#" class="btn btn-light btn-lg px-4">
              <i class="fab fa-apple me-2"></i> App Store
            </a>
            <a href="#" class="btn btn-light btn-lg px-4">
              <i class="fab fa-google-play me-2"></i> Play Store
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

 
  <?= $this->include('templates/footer') ?>

</body>
</html>