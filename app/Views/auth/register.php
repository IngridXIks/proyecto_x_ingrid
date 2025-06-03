<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registro de Usuario - Deliburger</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <!-- Estilo personalizado -->
  <link rel="stylesheet" href="/proyecto_x_ingrid/public/css/Miestilo.css">
</head>
<body class="login-register">
<?= $this->include('templates/header') ?>
<div class="register-container">
  <div class="col-12 col-sm-10 col-md-7 col-lg-5 col-xl-4">
    <div class="register-card shadow fade-in">
      <div class="brand-logo mb-1">
        <i class="fa-solid fa-burger"></i> Deliburger
      </div>
      <div class="brand-subtitle mb-3">
        ¡Crea tu cuenta y sé parte de la experiencia Deliburger!
      </div>
      <h2 class="text-center mb-4" style="font-family:'Poppins',sans-serif;font-weight:700;color:#e63946;">Registro de Usuario</h2>
      <?php if (session('errors')): ?>
        <div class="alert alert-danger">
          <?php foreach (session('errors') as $error): ?>
            <?= $error ?><br>
          <?php endforeach ?>
        </div>
      <?php endif ?>
      <form action="<?= base_url('register') ?>" method="post" autocomplete="off">
        <?= csrf_field() ?>
        <div class="form-group">
          <span class="input-icon"><i class="fa-solid fa-user"></i></span>
          <input type="text" class="form-control ps-5" id="nombre" name="nombre"
            value="<?= old('nombre') ?>" required placeholder="Nombre Completo">
        </div>
        <div class="form-group">
          <span class="input-icon"><i class="fa-solid fa-envelope"></i></span>
          <input type="email" class="form-control ps-5" id="email" name="email"
            value="<?= old('email') ?>" required placeholder="Correo Electrónico">
        </div>
        <div class="form-group">
          <span class="input-icon"><i class="fa-solid fa-lock"></i></span>
          <input type="password" class="form-control ps-5" id="password" name="password" required placeholder="Contraseña">
        </div>
        <div class="form-group">
          <span class="input-icon"><i class="fa-solid fa-lock"></i></span>
          <input type="password" class="form-control ps-5" id="confirm_password" name="confirm_password" required placeholder="Confirmar Contraseña">
        </div>
        <div class="form-group">
          <span class="input-icon"><i class="fa-solid fa-mobile-screen-button"></i></span>
          <input type="tel" class="form-control ps-5" id="celular" name="celular"
            value="<?= old('celular') ?>" placeholder="Celular (opcional)">
        </div>
        <div class="d-grid mb-2">
          <button type="submit" class="btn btn-primary">Registrarse <i class="fa-solid fa-user-plus ms-1"></i></button>
        </div>
        <div class="mt-3 text-center">
          <p>¿Ya tienes una cuenta?
            <a href="<?= base_url('login') ?>" class="login-link">Inicia sesión aquí</a>
          </p>
        </div>
      </form>
    </div>
  </div>
</div>
<?= $this->include('templates/footer') ?>
</body>
</html>