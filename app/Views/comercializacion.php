<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title> Comercialización - Deliburger</title>
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

       <img src="/proyecto_x_ingrid/public/img/Comercializacion.png" alt="Comercialización" class="img">
       <main>
        <section class="comercializacion">
  <h2>En <strong>Deliburger</strong> llevamos nuestras deliciosas hamburguesas a donde estés, gracias a una estrategia de comercialización moderna, eficiente y centrada en el cliente.</h2>

  <ul>
    <li><strong>Ventas en línea:</strong> A través de nuestra plataforma web y app móvil, puedes hacer tu pedido fácil y rápido.</li>
    <li><strong>Entrega a domicilio:</strong> Llegamos a cada rincón de la ciudad con nuestro equipo de reparto propio y alianzas con plataformas como Rappi y PedidosYa.</li>
    <li><strong>Local físico:</strong> Contamos con un espacio acogedor donde puedes disfrutar tu hamburguesa favorita.</li>
    <li><strong>Eventos y foodtrucks:</strong> Participamos en ferias gastronómicas y llevamos el sabor de Deliburger a eventos especiales.</li>
  </ul>
</section>
</main>

  <!-- FOOTER -->
  <?= $this->include('templates/footer') ?>

  
</body>
</html>