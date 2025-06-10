<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Panel de Administración</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Righteous&display=swap" rel="stylesheet">
  <!-- Estilo CSS -->
  <link rel="stylesheet" href="/proyecto_x_ingrid/public/css/Miestilo.css">
</head>

<body>
  <?= $this->include('templates/header') ?>

<nav class="navbar navbar-dark bg-dark p-3">
    <a class="navbar-brand" href="<?= site_url('usuario') ?>">Admin Panel</a>
</nav>

<div class="container mt-4">
    <?= $this->renderSection('content') ?>
</div>

<footer>
    <?= $this->include('templates/footer') ?>
</footer>

</body>
</html>
