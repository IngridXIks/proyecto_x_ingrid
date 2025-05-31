<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario de Consulta</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Estilos -->
  <link rel="stylesheet" href="/proyecto_x_ingrid/public/css/Miestilo.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>

<!-- HEADER -->
<?= $this->include('templates/header') ?>

<!-- FORMULARIO -->
<div class="container">
  <div class="form-consulta">
    <h2>Formulario de Consulta</h2>

    <?php if (isset($validation)): ?>
      <div class="alert alert-danger">
          <?= $validation->listErrors() ?>
      </div>
    <?php endif; ?>

    <form action="<?= base_url('/consulta/enviar') ?>" method="post" novalidate>
      <?= csrf_field() ?>
      <div class="mb-3">
          <label for="nombre">Nombre</label>
          <input 
              type="text" 
              class="form-control" 
              id="nombre" 
              name="nombre" 
              value="<?= set_value('nombre') ?>" 
              required minlength="3" 
              placeholder="Ingrese su nombre"
              autocomplete="name">
      </div>

      <div class="mb-3">
          <label for="email">Correo Electrónico</label>
          <input 
              type="email" 
              class="form-control" 
              id="email" 
              name="email" 
              value="<?= set_value('email') ?>" 
              required
              placeholder="ejemplo@correo.com"
              autocomplete="email">
      </div>

      <div class="mb-3">
          <label for="mensaje">Mensaje</label>
          <textarea 
              class="form-control" 
              id="mensaje" 
              name="mensaje" 
              rows="5" 
              required minlength="10"
              placeholder="Escriba su consulta aquí"
              autocomplete="off"><?= set_value('mensaje') ?></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
</div>


<!-- FOOTER -->
<?= $this->include('templates/footer') ?>


</body>
</html>
