<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="/proyecto_x_ingrid/public/css/Miestilo.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?= $this->include('templates/header') ?>

   <!--Carrusel de Hamburguesas-->
   <section class="container-fluid p-0">
  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    
    <!-- Indicadores -->
    <div class="carousel-indicator">
      <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Hamburguesa Simple"></button>
      <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Hamburguesa Doble"></button>
      <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Hamburguesa Especial"></button>
    </div>

    <!-- Imágenes -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/proyecto_x_ingrid/public/img/Hamburguesa simple.jpg" class="d-block w-100" alt="Hamburguesa Simple">
      </div>
      <div class="carousel-item">
        <img src="/proyecto_x_ingrid/public/img/Hamburguesa doble.jpg" class="d-block w-100" alt="Hamburguesa Doble">
      </div>
      <div class="carousel-item">
        <img src="/proyecto_x_ingrid/public/img/Hamburguesa especial.jpg" class="d-block w-100" alt="Hamburguesa Especial">
      </div>
    </div>

    <!-- Controles -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Siguiente</span>
    </button>
  </div>
</section>
<!--Fin Carrusel de Hamburguesas-->

<section class="container my-5 deliburger-section">
  <div class="text-center mb-4">
  <span class="text- fw-bold fst-italic fs-2 deliburger-title">Bienvenido a Deliburger</span>
  </div>
  <p class="mb-4">
    Somos una empresa dedicada a la venta de comida rápida.🚀
  </p>
  <p class="mb-4">
    Nuestros combos están pensados para que disfrutes más por menos, sin sacrificar calidad. 🍔
  </p>
  <p class="mb-4">
    Usamos solo pan artesanal, carne 100% de res y vegetales frescos. 🥬
  </p>
  <p>
    Ven a vivir la experiencia Deliburger: rápido, delicioso y con la mejor atención. 🍽️
  </p>
</section>

<?php
echo file_get_contents(APPPATH . 'Views/Principal.html');
?>
<?= $this->include('templates/footer') ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
