<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title> Información de Contacto - Deliburger</title>
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

      <img src="/proyecto_x_ingrid/public/img/InformacionContacto.png" alt="Información de Contacto" class="img">
      <main>
        <section id="contacto" class="contacto">
  <h2>Contáctanos</h2>
  <p>¿Tienes alguna pregunta o comentario? ¡Estamos aquí para ayudarte!</p>
  
  <div class="info-contacto">
    <p><strong>📍 Dirección:</strong> Junín 456, Corrientes Capital, Argentina</p>
    <p><strong>📞 Teléfono:</strong> +54 11 3795 456711</p>
    <p><strong>✉️ Correo electrónico:</strong> contacto@deliburger.com</p>
  </div>

  <form class="formulario-contacto" id="formulario">
  <input type="text" placeholder="Tu nombre" required>
  <input type="email" placeholder="Tu correo electrónico" required>
  <textarea placeholder="Motivo del contacto..." required></textarea>
  <button type="submit">Enviar</button>
</form>
<p id="mensaje-enviado" style="display: none; color: green; font-weight: bold;">¡Enviado!</p>
<!--Mensaje de enviado(sin destinatario)-->
<script>
  document.getElementById('formulario').addEventListener('submit', function(event) {
    event.preventDefault(); 
    document.getElementById('mensaje-enviado').style.display = 'block';
  });
</script>

</section>
</main>

  <!-- FOOTER -->
  <?= $this->include('templates/footer') ?>
</body>
</html>