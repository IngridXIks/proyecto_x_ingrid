<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title> Promociones - Deliburger</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--Estilo CSS-->
  <link rel="stylesheet" href="/proyecto_x_ingrid/public/css/Miestilo.css">
<!--Font-Awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <!--Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>

<body>
<?= $this->include('templates/header') ?>
<img src="/proyecto_x_ingrid/public/img/Promociones.png" alt="Promos" class="img">
    <div class="bg-warning text-white text-center py-5">
        <p class="lead">🔥¡Ofertas irresistibles solo por tiempo limitado!🔥</p>
    </div>

    <div class="container py-5">
        <div class="row g-4">
    <!-- Promo 1 -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="/proyecto_x_ingrid/public/img/papas.jpg" class="card-img-top" alt="Combo Clásico">
            <div class="card-body text-center">
                <h5 class="card-title">Combo Clásico</h5>
                <p class="card-text">Hamburguesa simple + papas + bebida por solo <strong>$2500</strong></p>
                <a href="#" class="btn btn-outline-warning">¡Lo quiero!</a>
            </div>
        </div>
    </div>

    <!-- Promo 2 -->
    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <img src="/proyecto_x_ingrid/public/img/Combo-2-Hamburguesa-Doble-1-300x300.png" class="card-img-top" alt="Doble Delicia">
            <div class="card-body text-center">
            <h5 class="card-title">Para Dos</h5>
            <p class="card-text">Doble hamburguesa + dos papas grandes + dos bebidas por <strong>$3500</strong></p>
            <a href="#" class="btn btn-outline-warning">¡Vamos!</a>
            </div>
        </div>
    </div>

    <!-- Promo 3 -->
    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <img src="/proyecto_x_ingrid/public/img/postres.webp" class="card-img-top" alt="Postre Gratis">
            <div class="card-body text-center">
            <h5 class="card-title">Postre Gratis</h5>
            <p class="card-text">Llevate un postre dulce en compras desde <strong>$4000</strong></p>
            <a href="#" class="btn btn-outline-warning">¡Aprovechar!</a>
            </div>
        </div>
    </div>

    </div>
</div>

<?= $this->include('templates/footer') ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>