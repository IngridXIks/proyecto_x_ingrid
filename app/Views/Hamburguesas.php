<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuestras Hamburguesas - Deliburger</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Righteous&display=swap" rel="stylesheet">
    <!-- Estilo CSS -->
    <link rel="stylesheet" href="<?= base_url('public/css/Miestilo.css') ?>">
</head>

<body>
<?= $this->include('templates/header') ?>

<!-- Hero Section -->
<section class="hero-section-hamburguesas">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
                <h1 class="hero-title text-white">Nuestras Hamburguesas</h1>
                <p class="lead text-white">Descubre nuestra selección de hamburguesas artesanales</p>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="py-5 bg-light">
    <div class="container py-5">
        <?php if(session()->getFlashdata('success')): ?>
            <div class="alert alert-success text-center fade-in"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>
        <?php if(session()->getFlashdata('error')): ?>
            <div class="alert alert-danger text-center fade-in"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>

        <div class="text-center mb-5">
            <h2 class="section-title">Explora nuestro menú</h2>
            <p class="lead">Cada hamburguesa es una experiencia única con ingredientes de la más alta calidad</p>
        </div>

        <div class="row g-4">
            <?php foreach ($productos as $producto): ?>
            <div class="col-lg-4 col-md-6">
                <div class="food-card">
                    <img src="<?= base_url('public/img/hamburguesas/' . $producto['imagen']) ?>" 
                        class="food-img"
                        alt="<?= esc($producto['nombre']) ?>">
                    <div class="food-body">
                        
                        <h3 class="food-title"><?= esc($producto['nombre']) ?></h3>
                        <p class="food-desc"><?= esc($producto['descripcion']) ?></p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <h4 class="food-price">$<?= number_format($producto['precio'], 0, ',', '.') ?></h4>
                            <form action="<?= base_url('carrito/agregar') ?>" method="post" class="mb-0">
                                <?= csrf_field() ?>
                                <input type="hidden" name="id_producto" value="<?= $producto['id'] ?>">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fas fa-cart-plus me-1"></i> Añadir
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= $this->include('templates/footer') ?>

</body>
</html>