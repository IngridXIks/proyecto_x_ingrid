<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title> Hamburguesas - Deliburger</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--Estilo CSS-->
  <link rel="stylesheet" href="/proyecto_x_ingrid/public/css/Miestilo.css">
<!--Font-Awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <!--Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>

<body>

<!-- HEADER -->
<?= $this->include('templates/header') ?>

<section class="container my-5">
  <h2 class="text-center mb-4">🍔 Nuestras Hamburguesas 🍔 </h2>

  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
    
    <!-- Card 1 -->
    <div class="col">
      <div class="card h-100">
        <img src="/proyecto_x_ingrid/public/img/big-house.png" class="card-img-top" alt="Hamburguesa Big House">
        <div class="card-body">
          <h5 class="card-title">Hamburguesa Big House</h5>
          <p class="card-text">Pan Casero, Doble Carne, Cheddar, Cebolla Picada, Lechuga, Pepinos y Salsa Big House.</p>
        </div>
        <div class="card-footer">
          <p class="fw-bold text-success m-0">$1.500</p>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col">
      <div class="card h-100">
        <img src="/proyecto_x_ingrid/public/img/blue-moon.png" class="card-img-top" alt="Hamburguesa Blue Moon">
        <div class="card-body">
          <h5 class="card-title">Hamburguesa Blue Moon</h5>
          <p class="card-text">Pan Casero, Carne, Queso Azul, Queso Dambo, Champiñones y Cebolla Caramelizada.</p>
        </div>
        <div class="card-footer">
          <p class="fw-bold text-success m-0">$2.000</p>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col">
      <div class="card h-100">
        <img src="/proyecto_x_ingrid/public/img/portal.png" class="card-img-top" alt="Hamburguesa Portal">
        <div class="card-body">
          <h5 class="card-title">Hamburguesa Portal</h5>
          <p class="card-text">Pan Casero, Carne, Cheddar, Cebolla Caramelizada, Bacon y Huevo.</p>
        </div>
        <div class="card-footer">
          <p class="fw-bold text-success m-0">$2.800</p>
        </div>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="col">
      <div class="card h-100">
        <img src="/proyecto_x_ingrid/public/img/butterfly.png" class="card-img-top" alt="Hamburguesa Butterfly">
        <div class="card-body">
          <h5 class="card-title">Hamburguesa Butterfly</h5>
          <p class="card-text">Pan Casero, Carne, Cheddar, Cebolla al Vino, Manteca a la Provenzal y Bacon.</p>
        </div>
        <div class="card-footer">
          <p class="fw-bold text-success m-0">$2.800</p>
        </div>
      </div>
    </div>

  </div>
</section>


<!-- FOOTER -->
<?= $this->include('templates/footer') ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
