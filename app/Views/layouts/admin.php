<!DOCTYPE html>
<html>
<head>
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-dark bg-dark p-3">
    <a class="navbar-brand" href="<?= site_url('usuario') ?>">Admin Panel</a>
</nav>

<div class="container mt-4">
    <?= $this->renderSection('content') ?>
</div>

<footer class="text-center mt-4 mb-4 text-muted">
    &copy; <?= date('Y') ?> - Tu empresa
</footer>

</body>
</html>
