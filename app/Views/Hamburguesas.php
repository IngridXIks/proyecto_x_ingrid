<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hamburguesas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap y fuentes -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <!-- Tu estilo personalizado -->
    <link rel="stylesheet" href="<?= base_url('public/css/Miestilo.css') ?>">
</head>

<?= $this->include('templates/header') ?>

<body>

<div class="container py-5">
    <h1 class="text-center mb-5">🍔 Nuestras Hamburguesas</h1>

    <?php if(session()->getFlashdata('success')): ?>
        <div class="alert alert-success text-center"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>
    <?php if(session()->getFlashdata('error')): ?>
        <div class="alert alert-danger text-center"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>

    <div class="row">
        <?php foreach ($productos as $producto): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="<?= base_url('public/img/hamburguesas/' . $producto['imagen']) ?>"
                         class="card-img-top"
                         alt="<?= esc($producto['nombre']) ?>">

                    <div class="card-body">
                        <h5 class="card-title"><?= esc($producto['nombre']) ?></h5>
                        <p class="card-text"><?= esc($producto['descripcion']) ?></p>
                        <h6 class="card-subtitle text-muted">$<?= number_format($producto['precio'], 0, ',', '.') ?></h6>
                    </div>
                    <div class="card-footer bg-white border-0 text-center">
                        <form action="<?= base_url('carrito/agregar') ?>" method="post">
                            <?= csrf_field() ?>
                            <input type="hidden" name="id_producto" value="<?= $producto['id'] ?>">
                            <button type="submit" class="btn btn-warning w-100">
                                <i class="fas fa-shopping-cart"></i> Agregar al carrito
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->include('templates/footer') ?>
</body>
</html>
