<?php helper('form'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Información de Contacto - Deliburger</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="/proyecto_x_ingrid/public/css/Miestilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- HEADER -->
    <?= $this->include('templates/header') ?>

    <div class="contact-hero">
        <div class="container">
            <h1 class="contact-title">Contáctanos</h1>
            <p class="contact-subtitle">Estamos aquí para ayudarte</p>
        </div>
    </div>

    <main class="contact-container container">
        <div class="contact-info-section">
            <div class="contact-info-box">
                <h2 class="contact-section-title"><i class="fas fa-map-marker-alt"></i> Nuestra Ubicación</h2>
                <p>Junín 456, Corrientes Capital, Argentina</p>
            </div>
            
            <div class="contact-info-box">
                <h2 class="contact-section-title"><i class="fas fa-phone-alt"></i> Teléfono</h2>
                <p>+54 11 3795 456711</p>
            </div>
            
            <div class="contact-info-box">
                <h2 class="contact-section-title"><i class="fas fa-envelope"></i> Correo Electrónico</h2>
                <p>contacto@deliburger.com</p>
            </div>
        </div>

        <!-- Mostrar mensajes -->
        <?php if (session()->getFlashdata('mensaje')): ?>
            <div class="alert alert-success mt-4"><?= session()->getFlashdata('mensaje') ?></div>
        <?php endif; ?>

        <?php if (isset($validation)): ?>
            <div class="alert alert-danger mt-4"><?= $validation->listErrors() ?></div>
        <?php endif; ?>

        <div class="contact-form-section">
            <h2 class="contact-section-title">Envía un mensaje</h2>
            <p class="contact-form-description">¿Tienes alguna pregunta o comentario? ¡Escríbenos!</p>

            <form class="contact-form" action="<?= base_url('consulta/enviar') ?>" method="post">
                <?= csrf_field() ?>
                
                <div class="form-group">
                    <label for="nombre">Tu nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" required value="<?= set_value('nombre') ?>">
                </div>
                
                <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input type="email" name="email" id="email" class="form-control" required value="<?= set_value('email') ?>">
                </div>
                
                <div class="form-group">
                    <label for="mensaje">Mensaje</label>
                    <textarea name="mensaje" id="mensaje" class="form-control" rows="5" required><?= set_value('mensaje') ?></textarea>
                </div>
                
                <button type="submit" class="btn btn-contact-submit">
                    <i class="fas fa-paper-plane"></i> Enviar Mensaje
                </button>
            </form>
        </div>
    </main>

    <!-- FOOTER -->
    <?= $this->include('templates/footer') ?>
</body>
</html>