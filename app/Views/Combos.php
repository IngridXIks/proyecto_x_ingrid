<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Combos - Deliburger</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Estilo CSS -->
  <link rel="stylesheet" href="/proyecto_x_ingrid/public/css/Miestilo.css">
  
  <!-- Font-Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>

<body>

<!-- HEADER -->
<?= $this->include('templates/header') ?>

<section class="container my-5">
<div class="cartel-proximamente">
  Próximamente...
</div>
<h2 class="text-center mb-4">🍔🍟 ¡Nuestros Combos! 🍔🍟</h2>


  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
    
    <!-- Combo 1 -->
    <div class="col">
      <div class="card h-100 shadow">
        <img src="/proyecto_x_ingrid/public/img/big-house.png" class="card-img-top" alt="Combo Big House">
        <div class="card-body">
          <h5 class="card-title">Combo Big House</h5>
          <p class="card-text">Hamburguesa Big House + Papas Fritas + Gaseosa 500ml.</p>
        </div>
        <div class="card-footer bg-white text-center">
          <p class="fw-bold text-success m-0">$2.500</p>
          <button class="btn btn-primary mt-2">¡Lo quiero!</button>
        </div>
      </div>
    </div>

    <!-- Combo 2 -->
    <div class="col">
      <div class="card h-100 shadow">
        <img src="/proyecto_x_ingrid/public/img/blue-moon.png" class="card-img-top" alt="Combo Blue Moon">
        <div class="card-body">
          <h5 class="card-title">Combo Blue Moon</h5>
          <p class="card-text">Hamburguesa Blue Moon + Papas Rústicas + Gaseosa 500ml.</p>
        </div>
        <div class="card-footer bg-white text-center">
          <p class="fw-bold text-success m-0">$3.000</p>
          <button class="btn btn-primary mt-2">¡Lo quiero!</button>
        </div>
      </div>
    </div>

    <!-- Combo 3 -->
    <div class="col">
      <div class="card h-100 shadow">
        <img src="/proyecto_x_ingrid/public/img/portal.png" class="card-img-top" alt="Combo Portal">
        <div class="card-body">
          <h5 class="card-title">Combo Portal</h5>
          <p class="card-text">Hamburguesa Portal + Papas Cheddar + Gaseosa 500ml.</p>
        </div>
        <div class="card-footer bg-white text-center">
          <p class="fw-bold text-success m-0">$3.800</p>
          <button class="btn btn-primary mt-2">¡Lo quiero!</button>
        </div>
      </div>
    </div>

    <!-- Combo 4 -->
    <div class="col">
      <div class="card h-100 shadow">
        <img src="/proyecto_x_ingrid/public/img/butterfly.png" class="card-img-top" alt="Combo Butterfly">
        <div class="card-body">
          <h5 class="card-title">Combo Butterfly</h5>
          <p class="card-text">Hamburguesa Butterfly + Papas Fritas + Gaseosa 500ml.</p>
        </div>
        <div class="card-footer bg-white text-center">
          <p class="fw-bold text-success m-0">$3.800</p>
          <button class="btn btn-primary mt-2">¡Lo quiero!</button>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- FOOTER -->
<?= $this->include('templates/footer') ?>


</body>
</html>
