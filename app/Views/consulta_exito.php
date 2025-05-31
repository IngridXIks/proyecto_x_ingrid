<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Consulta Enviada</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Estilo CSS -->
  <link rel="stylesheet" href="/proyecto_x_ingrid/public/css/Miestilo.css">
  <!-- Font-Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Fuente Pacifico -->
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<?= $this->include('templates/header') ?>
<body>

<div class="container">
  <div class="confirmacion-container">
    <h2><i class="fa-solid fa-check-circle"></i> ¡Gracias por tu consulta!</h2>
    <p>Nos pondremos en contacto contigo pronto.</p>
    <a href="<?= base_url('/consulta') ?>" class="btn-volver">Volver al formulario</a>
  </div>
</div>

<?= $this->include('templates/footer') ?>

</body>
</html>
