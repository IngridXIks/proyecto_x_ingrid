<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Locales - Deliburger</title>
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

  <section class="hero-section-locales">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 text-center">
          <h1 class="hero-title text-white">Nuestros Locales</h1>
          <p class="lead text-white">Encuentra la Deliburger más cercana y ven a disfrutar de nuestra experiencia</p>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5 bg-light">
    <div class="container py-5">
      <div class="text-center mb-5">
        <h2 class="section-title">Descubre dónde estamos</h2>
        <p class="lead">Visítanos en cualquiera de nuestros locales y disfruta del auténtico sabor Deliburger</p>
      </div>

      <div class="row g-4">
        <!-- Local Esquina -->
        <div class="col-lg-6">
          <div class="local-card">
            <div class="local-header">
              <h3><i class="fas fa-map-marker-alt me-2"></i>Esquina, Corrientes</h3>
              <div class="local-info">
                <p><i class="fas fa-clock me-2"></i>Lunes a Domingo: 11:00 - 23:00</p>
                <p><i class="fas fa-phone me-2"></i>(03777) 42-1234</p>
              </div>
            </div>
            <div class="local-body">
              <div class="ratio ratio-16x9 mb-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.7184579331997!2d-59.536050225515716!3d-30.01623957493774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x944c8a4ee36919d3%3A0x7f145d32914d77d7!2sAv.%2025%20de%20Mayo%20567%2C%20W3423%20Esquina%2C%20Corrientes!5e0!3m2!1ses-419!2sar!4v1745615027437!5m2!1ses-419!2sar" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <div class="local-address">
                <h5><i class="fas fa-map-pin me-2"></i>Dirección</h5>
                <p>Av. 25 de Mayo 123, Esquina, Corrientes</p>
                <a href="https://www.google.com/maps/place/Av.+25+de+Mayo,+Esquina,+Corrientes/data=!4m2!3m1!1s0x944c8a5020e3bc3b:0xb87542d52556e2e7?sa=X&ved=1t:242&ictx=111" class="btn btn-primary mt-2" target="_blank">
                  <i class="fas fa-directions me-2"></i>Cómo llegar
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Local Corrientes Capital -->
        <div class="col-lg-6">
          <div class="local-card">
            <div class="local-header">
              <h3><i class="fas fa-map-marker-alt me-2"></i>Corrientes Capital</h3>
              <div class="local-info">
                <p><i class="fas fa-clock me-2"></i>Lunes a Domingo: 11:00 - 00:00</p>
                <p><i class="fas fa-phone me-2"></i>(0379) 44-5678</p>
              </div>
            </div>
            <div class="local-body">
              <div class="ratio ratio-16x9 mb-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.070476774452!2d-58.84736142563602!3d-27.467065176321135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456cba36484183%3A0xbb737a6b765ad9c8!2sJunin%20456%2C%20W3400AVK%20Corrientes!5e0!3m2!1ses-419!2sar!4v1745615130611!5m2!1ses-419!2sar" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <div class="local-address">
                <h5><i class="fas fa-map-pin me-2"></i>Dirección</h5>
                <p>Junín 456, Corrientes Capital</p>
                <a href="https://www.google.com/maps/place/Junin+456,+W3400AVK+Corrientes/data=!4m2!3m1!1s0x94456cba35e80aaf:0x3b4f426439f2732d?sa=X&ved=1t:242&ictx=111" class="btn btn-primary mt-2" target="_blank">
                  <i class="fas fa-directions me-2"></i>Cómo llegar
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-lg-8 mx-auto text-center">
          <div class="delivery-info p-4 rounded">
            <h3 class="mb-3">¿No puedes visitarnos?</h3>
            <p class="lead mb-4">También puedes disfrutar de Deliburger a domicilio</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
              <a class="btn btn-outline-primary" href="<?= base_url('/carrito') ?>" >
                <i class="fas fa-motorcycle me-2"></i>Pedir por delivery
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?= $this->include('templates/footer') ?>

</body>
</html>