<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Responder Consulta #<?= $consulta['id'] ?> - Deliburger</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responder consulta del usuario en Deliburger">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/proyecto_x_ingrid/public/css/Miestilo.css">
</head>
<body>
    <!-- HEADER -->
    <?= $this->include('templates/header') ?>

    <section class="profile-hero mb-4">
        <div class="container">
            <h1 class="profile-title">Responder Consulta #<?= $consulta['id'] ?></h1>
            <p class="profile-subtitle">Visualiza y responde la consulta recibida</p>
        </div>
    </section>

    <main class="container profile-container my-5">
        <div class="pedidos-container">
            <div class="card mx-auto" style="max-width: 700px;">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span><?= esc($consulta['nombre']) ?> (<?= esc($consulta['email']) ?>)</span>
                    <span class="badge bg-<?= $consulta['respondida'] ? 'success' : 'warning' ?>">
                        <?= $consulta['respondida'] ? 'Respondida' : 'Pendiente' ?>
                    </span>
                </div>
                <div class="card-body">
                    <p><strong>Mensaje:</strong><br><?= nl2br(esc($consulta['mensaje'])) ?></p>
                    <p><strong>Fecha:</strong> <?= date('d/m/Y H:i', strtotime($consulta['creado_en'])) ?></p>

                    <form method="post" action="<?= site_url('administrador/consultas/responder/' . $consulta['id']) ?>">
                        <?= csrf_field() ?>

                        <div class="mb-3">
                            <label for="respuesta" class="form-label">Respuesta:</label>
                            <textarea name="respuesta" id="respuesta" class="form-control" rows="6" required><?= esc($consulta['respuesta']) ?></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Enviar respuesta</button>
                        <a href="<?= site_url('administrador/consultas') ?>" class="btn btn-secondary ms-2">Volver</a>
                    </form>

                    <?php if (session('mensaje')): ?>
                        <div class="alert alert-success mt-3"><?= session('mensaje') ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <?= $this->include('templates/footer') ?>

</body>
</html>
