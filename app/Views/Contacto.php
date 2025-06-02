<?php helper('form'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Información de Contacto - Deliburger</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- CSS -->
  <link rel="stylesheet" href="/proyecto_x_ingrid/public/css/Miestilo.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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

      <!-- Mostrar mensajes -->
      <?php if (session()->getFlashdata('mensaje')): ?>
        <div class="alert alert-success mt-3"><?= session()->getFlashdata('mensaje') ?></div>
      <?php endif; ?>

      <?php if (isset($validation)): ?>
        <div class="alert alert-danger mt-3"><?= $validation->listErrors() ?></div>
      <?php endif; ?>

      <!-- Formulario funcional -->
      <form class="formulario-contacto mt-3" action="<?= base_url('consulta/enviar') ?>" method="post">
        <?= csrf_field() ?>
        <input type="text" name="nombre" placeholder="Tu nombre" required value="<?= set_value('nombre') ?>">
        <input type="email" name="email" placeholder="Tu correo electrónico" required value="<?= set_value('email') ?>">
        <textarea name="mensaje" placeholder="Motivo del contacto..." required><?= set_value('mensaje') ?></textarea>
        <button type="submit">Enviar</button>
      </form>
    </section>
  </main>

  <!-- FOOTER -->
  <?= $this->include('templates/footer') ?>
</body>
</html>
