<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle de Consulta - Deliburger</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <main class="container my-5">
        <div class="card mx-auto" style="max-width: 600px;">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>Consulta #<?= $consulta['id'] ?></span>
                <span class="badge bg-<?= $consulta['respondida'] ? 'success' : 'warning' ?>">
                    <?= $consulta['respondida'] ? 'Respondida' : 'Pendiente' ?>
                </span>
            </div>
            <div class="card-body">
                <h5><?= esc($consulta['nombre']) ?> (<?= esc($consulta['email']) ?>)</h5>
                <p><strong>Mensaje:</strong> <?= esc($consulta['mensaje']) ?></p>
                <p><strong>Fecha:</strong> <?= date('d/m/Y H:i', strtotime($consulta['creado_en'])) ?></p>
                <form action="<?= base_url('administrador/consultas/responder/'.$consulta['id']) ?>" method="post">
                    <?= csrf_field() ?>
                    
                    <div class="mb-3">
                        <label for="respuesta" class="form-label">Respuesta:</label>
                        <textarea class="form-control" id="respuesta" name="respuesta" rows="3" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Enviar respuesta</button>
                </form>
                <?php if (session('success')): ?>
                    <div class="alert alert-success mt-3"><?= session('success') ?></div>
                <?php endif; ?>
            </div>
        </div>
    </main>
</body>
</html>