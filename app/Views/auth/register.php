
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
<body class="routes-body">
<?= $this->include('templates/header') ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card shadow">
                <div class="card-body p-4">
                    <h2 class="text-center mb-4">Registro de Usuario</h2>
                    
                    <?php if (session('errors')): ?>
                        <div class="alert alert-danger">
                            <?php foreach (session('errors') as $error): ?>
                                <?= $error ?><br>
                            <?php endforeach ?>
                        </div>
                    <?php endif ?>
                    
                    <form action="<?= base_url('register') ?>" method="post">
                        <?= csrf_field() ?>
                            
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre Completo</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" 
                                value="<?= old('nombre') ?>" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" 
                                value="<?= old('email') ?>" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="confirm_password" class="form-label">Confirmar Contraseña</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="celular" class="form-label">Celular (Opcional)</label>
                            <input type="tel" class="form-control" id="celular" name="celular" 
                                value="<?= old('celular') ?>">
                        </div>
                        
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Registrarse</button>
                        </div>
                        
                        <div class="mt-3 text-center">
                            <p>¿Ya tienes una cuenta? <a href="<?= base_url('login') ?>">Inicia sesión aquí</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->include('templates/footer') ?>

</body>
</html>