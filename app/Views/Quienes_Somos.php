<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Quiénes Somos - Deliburger</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--Estilo CSS-->
  <link rel="stylesheet" href="/proyecto_x_ingrid/public/css/Miestilo.css">
<!--Font-Awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <!--Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>

<body class="routes-body">
<!-- HEADER -->
<?= $this->include('templates/header') ?>

  <main>
    <img src="/proyecto_x_ingrid/public/img/QuienesSomos.png" alt="Quiénes Somos" class="img">

    <section class="container mt-5">
  <section class="row text-center">
    <section class="col-md-6">
      <div class="card">
        <img src="/proyecto_x_ingrid/public/img/mi-foto.jpeg" class="card-img-top" alt="X Ingrid">
        <div class="card-body">
          <h5 class="card-title">X, Ingrid</h5>
          <p class="card-text">"Estudiante de Sistemas, interesada en lo innovador."</p>
        </div>
      </div>
    </section>
    <section class="col-md-6">
      <div class="card">
        <img src="/proyecto_x_ingrid/public/img/yoo.jpg" class="card-img-top" alt="Saucedo Germán">
        <div class="card-body">
          <h5 class="card-title">Saucedo, Germán</h5>
          <p class="card-text">"Estudiante de Sistemas. Programador web"</p>
        </div>
      </div>
    </section>

    <p class="text-center mt-4">
  Este proyecto nace con el objetivo de fortalecer la presencia digital de <span style="color: #fd7e14;">Deliburger</span>, una marca que ha evolucionado con pasión y dedicación en el competitivo mundo gastronómico. Desde sus inicios, <span style="color: #fd7e14;">Deliburger</span> se ha caracterizado por su enfoque innovador, ofreciendo hamburguesas artesanales de alta calidad que combinan ingredientes frescos, sabores únicos y una atención especial al detalle. Con este proyecto buscamos no solo ampliar su alcance en plataformas digitales, sino también transmitir fielmente su esencia: una fusión entre tradición y creatividad culinaria. Nuestra meta es consolidar su identidad visual y comunicativa en el entorno digital, conectar con nuevos públicos y reforzar el vínculo con sus clientes fieles, llevando su propuesta gastronómica a nuevos niveles de experiencia y reconocimiento.
</p>


  </section>
</section>
  </main>

  <!-- FOOTER -->
  <?= $this->include('templates/footer') ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>