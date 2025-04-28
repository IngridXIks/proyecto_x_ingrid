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
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Hamburguesa Simple"></button>
      <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Hamburguesa Doble"></button>
      <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Hamburguesa Especial"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/proyecto_x_ingrid/public/img/Hamburguesa simple.jpg"  alt="Hamburguesa Simple">
      </div>
      <div class="carousel-item">
        <img src="/proyecto_x_ingrid/public/img/Hamburguesa doble.jpg" alt="Hamburguesa Doble">
      </div>
      <div class="carousel-item">
        <img src="/proyecto_x_ingrid/public/img/Hamburguesa especial.jpg" alt="Hamburguesa Especial">
      </div>
    </div>

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

<!--Bienvenida-->
<section class="container my-5 deliburger-section">
  <div class="row align-items-center">
   
    <div class="col-md-6">
      <div class="text-center mb-5">
        <h1 class="deliburger-title">
          Bienvenido a Deliburger
        </h1>
      </div>
      <p class="mb-4 fs-5">
        Somos una empresa dedicada a la venta de comida rápida. 🚀
      </p>
      <p class="mb-4 fs-5">
        Nuestros combos están pensados para que disfrutes más por menos, sin sacrificar calidad. 🍔
      </p>
      <p class="mb-4 fs-5">
        Usamos solo pan artesanal, carne 100% de res y vegetales frescos. 🥬
      </p>
      <p class="fs-5">
        Vení a vivir la experiencia Deliburger: rápido, delicioso y con la mejor atención. 🍽️
      </p>
    </div>


    <div class="col-md-6 text-center">
      <img src="/proyecto_x_ingrid/public/img/Camarero.jpg" alt="Camarero" class="img-fluid" style="max-height: 400px;">
    </div>
  </div>
</section>

<?php
echo file_get_contents(APPPATH . 'Views/Principal.html');
?>
<?= $this->include('templates/footer') ?>

</body>
</html>
