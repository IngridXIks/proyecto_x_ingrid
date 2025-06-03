<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Iniciar Sesión - Deliburger</title>
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
  <style>
    body {
      min-height: 100vh;
      background: linear-gradient(120deg, #e63946 0%, #f4a261 100%);
      display: flex;
      flex-direction: column;
    }
  </style>
</head>

<body>
  <?= $this->include('templates/header') ?>
  <div class="login-container">
    <div class="col-12 col-sm-10 col-md-7 col-lg-5 col-xl-4">
      <div class="login-card shadow fade-in">
        <div class="brand-logo mb-1">
          <i class="fa-solid fa-burger"></i> Deliburger
        </div>
        <div class="brand-subtitle mb-3">
          ¡Bienvenido! Ingresa para disfrutar de las mejores hamburguesas 🍔
        </div>
        <?php if (session()->getFlashdata('success')): ?>
          <div class="alert alert-success mb-3">
            <?= session()->getFlashdata('success') ?>
          </div>
        <?php endif ?>

        <h2 class="text-center mb-4" style="font-family:'Poppins',sans-serif;font-weight:700;color:#e63946;">Iniciar Sesión</h2>
        
        <?php if (session('error')): ?>
          <div class="alert alert-danger"><?= session('error') ?></div>
        <?php endif ?>
        
        <?php if (session('errors')): ?>
          <div class="alert alert-danger">
            <?php foreach (session('errors') as $error): ?>
              <?= $error ?><br>
            <?php endforeach ?>
          </div>
        <?php endif ?>
        
        <form action="<?= base_url('login') ?>" method="post" autocomplete="off">
          <?= csrf_field() ?>

          <div class="form-group">
            <span class="input-icon"><i class="fa-solid fa-envelope"></i></span>
            <input type="email" class="form-control ps-5" id="email" name="email" 
              value="<?= old('email') ?>" required placeholder="Correo Electrónico">
          </div>
          
          <div class="form-group">
            <span class="input-icon"><i class="fa-solid fa-lock"></i></span>
            <input type="password" class="form-control ps-5" id="password" name="password" required placeholder="Contraseña">
          </div>
          
          <div class="d-grid mb-2">
            <button type="submit" class="btn btn-primary">Ingresar <i class="fa-solid fa-arrow-right-to-bracket ms-1"></i></button>
          </div>
          
          <div class="mt-3 text-center">
            <p>¿No tienes una cuenta? 
              <a href="<?= base_url('register') ?>" class="register-link">Regístrate aquí</a>
            </p>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?= $this->include('templates/footer') ?>
</body>
</html>