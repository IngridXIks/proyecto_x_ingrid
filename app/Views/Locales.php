<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title> Locales - Deliburger</title>
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
<img src="/proyecto_x_ingrid/public/img/Locales.png" alt="Locales" class="img">
<div class="container py-5">
    <h1 class="text-center mb-4">🏪 Nuestros Locales</h1>

    <div class="row g-5">
        <!-- Local Esquina -->
        <div class="col-md-6">
            <h3 class="text-warning">📍 Esquina, Corrientes</h3>
                <p>Dirección: Av. 25 de Mayo 123, Esquina, Corrientes</p>
            <div class="ratio ratio-16x9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.7184579331997!2d-59.536050225515716!3d-30.01623957493774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x944c8a4ee36919d3%3A0x7f145d32914d77d7!2sAv.%2025%20de%20Mayo%20567%2C%20W3423%20Esquina%2C%20Corrientes!5e0!3m2!1ses-419!2sar!4v1745615027437!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        </div>

        <!-- Local Corrientes Capital -->
        <div class="col-md-6">
            <h3 class="text-warning">📍 Corrientes Capital</h3>
                <p>Dirección: Junín 456, Corrientes Capital</p>
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.070476774452!2d-58.84736142563602!3d-27.467065176321135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456cba36484183%3A0xbb737a6b765ad9c8!2sJunin%20456%2C%20W3400AVK%20Corrientes!5e0!3m2!1ses-419!2sar!4v1745615130611!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
        </div>
    </div>
</div>

<!-- FOOTER -->
<?= $this->include('templates/footer') ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>