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

<body class="routes-body">
<?= $this->include('templates/header') ?>

<main class="container my-5">
    <h1>Resultados para: "<?= esc($term ?? '') ?>"</h1>
    
    <?php if (empty($results)): ?>
        <p>SOLO SIRVE COMO MODELO DE BUSQUEDA, NO TENEMOS BASE DE DATOS</p>
    <?php else: ?>
        <div class="row">
            <?php foreach ($results as $item): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                    <?php if (!empty($item['imagen'])): ?>
                            <img src="<?= base_url('public/img/' . $item['imagen']) ?>" class="card-img-top" alt="<?= esc($item['nombre']) ?>">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?= esc($item['nombre']) ?></h5>
                            <p class="card-text"><?= esc($item['descripcion']) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    <?php endif ?>
</main>

<?= $this->include('templates/footer') ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>