<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bebidas y Postres - Deliburger</title>
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
  <h2 class="text-center mb-4">🍹🍰 ¡Bebidas y Postres! 🍹🍰</h2>


    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
      
      <!-- Bebida 1 -->
      <div class="col">
        <div class="card h-100 shadow">
          <img src="/proyecto_x_ingrid/public/img/coca.png" class="card-img-top" alt="Coca Cola">
          <div class="card-body">
            <h5 class="card-title">Coca-Cola 500ml</h5>
            <p class="card-text">Refrescante y burbujeante, ideal para acompañar tu combo.</p>
          </div>
          <div class="card-footer bg-white text-center">
            <p class="fw-bold text-success m-0">$800</p>
            <button class="btn btn-primary mt-2">Agregar</button>
          </div>
        </div>
      </div>

      <!-- Bebida 2 -->
      <div class="col">
        <div class="card h-100 shadow">
          <img src="/proyecto_x_ingrid/public/img/agua.png" class="card-img-top" alt="Agua Mineral">
          <div class="card-body">
            <h5 class="card-title">Agua Villavicencio 500ml</h5>
            <p class="card-text">Agua mineral natural, fresca y saludable.</p>
          </div>
          <div class="card-footer bg-white text-center">
            <p class="fw-bold text-success m-0">$700</p>
            <button class="btn btn-primary mt-2">Agregar</button>
          </div>
        </div>
      </div>

      <!-- Postre 1 -->
      <div class="col">
        <div class="card h-100 shadow">
          <img src="/proyecto_x_ingrid/public/img/cheesecake.jpeg" class="card-img-top" alt="Cheesecake">
          <div class="card-body">
            <h5 class="card-title">Cheesecake de Frutilla</h5>
            <p class="card-text">Tarta de queso cremosa con topping de frutillas frescas.</p>
          </div>
          <div class="card-footer bg-white text-center">
            <p class="fw-bold text-success m-0">$1.500</p>
            <button class="btn btn-primary mt-2">Agregar</button>
          </div>
        </div>
      </div>

      <!-- Postre 2 -->
      <div class="col">
        <div class="card h-100 shadow">
          <img src="/proyecto_x_ingrid/public/img/brownie.jpeg" class="card-img-top" alt="Brownie">
          <div class="card-body">
            <h5 class="card-title">Brownie con Helado</h5>
            <p class="card-text">Brownie de chocolate tibio con una bocha de helado de crema.</p>
          </div>
          <div class="card-footer bg-white text-center">
            <p class="fw-bold text-success m-0">$1.800</p>
            <button class="btn btn-primary mt-2">Agregar</button>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- FOOTER -->
  <?= $this->include('templates/footer') ?>

</div>
</body>
</html>
