<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">


  <link rel="stylesheet" href="/proyecto_x_ingrid/public/css/Miestilo.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- Barra de Navegación con logo -->
  <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">

      <a class="navbar-brand" href="#">
        <img src="/proyecto_x_ingrid/public/img/logonav.png" alt="Deliburger Logo" width="70" height="70">
      </a>
      <a class="navbar-brand" href="#">Deliburger</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Promociones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Locales</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Productos
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Hamburguesas</a></li>
              <li><a class="dropdown-item" href="#">Combos y Papas</a></li>
              <li><a class="dropdown-item" href="#">Bebidas y Postres</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Buscar</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- Fin de Barra de Navegación -->
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


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
