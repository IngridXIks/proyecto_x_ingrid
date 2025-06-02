<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= esc($title) ?> - Deliburger</title>
    <link rel="stylesheet" href="/proyecto_x_ingrid/public/css/Miestilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <?= $this->include('templates/header') ?>

    <div class="container mt-5">
        <h1 class="mb-4">Mi Perfil</h1>

        <div class="card p-4 shadow" style="max-width: 500px;">
            <p><strong>Nombre:</strong> <?= esc($usuario['nombre']) ?></p>
            <p><strong>Email:</strong> <?= esc($usuario['email']) ?></p>
            <p><strong>Celular:</strong> <?= esc($usuario['celular']) ?: 'No proporcionado' ?></p>

            <hr>

            <h4>Direcciones</h4>

            <?php if (!empty($direcciones)): ?>
                <ul class="list-group mb-3">
                    <?php foreach ($direcciones as $direccion): ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?= esc($direccion['calle']) ?> <?= esc($direccion['numero']) ?>, 
                            <?= esc($direccion['ciudad']) ?>, <?= esc($direccion['provincia']) ?> - C.P.: <?= esc($direccion['codigo_postal']) ?>
                            <form action="<?= base_url('direcciones/eliminar/' . $direccion['id_direccion']) ?>" method="post" style="margin:0;">

                                <?= csrf_field() ?>
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar esta dirección?');">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </li>
                    <?php endforeach ?>
                </ul>
            <?php else: ?>
                <p>No tienes direcciones guardadas.</p>
            <?php endif ?>

            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgregarDireccion">
                <i class="fa fa-plus"></i> Agregar Dirección
            </button>
        </div>
    </div>

    <!-- Modal para agregar dirección -->
    <div class="modal fade" id="modalAgregarDireccion" tabindex="-1" aria-labelledby="modalAgregarDireccionLabel" aria-hidden="true">
      <div class="modal-dialog">
        <form action="<?= base_url('direcciones/guardar') ?>" method="post" class="modal-content">
          <?= csrf_field() ?>
          <div class="modal-header">
            <h5 class="modal-title" id="modalAgregarDireccionLabel">Agregar Nueva Dirección</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
          </div>
          <div class="modal-body">

            <div class="mb-3">
                <label for="calle" class="form-label">Calle</label>
                <input type="text" class="form-control" id="calle" name="calle" required>
            </div>

            <div class="mb-3">
                <label for="numero" class="form-label">Número</label>
                <input type="number" class="form-control" id="numero" name="numero" required>
            </div>

            <div class="mb-3">
                <label for="ciudad" class="form-label">Ciudad</label>
                <input type="text" class="form-control" id="ciudad" name="ciudad" required>
            </div>

            <div class="mb-3">
                <label for="provincia" class="form-label">Provincia</label>
                <input type="text" class="form-control" id="provincia" name="provincia" required>
            </div>

            <div class="mb-3">
                <label for="codigo_postal" class="form-label">Código Postal</label>
                <input type="number" class="form-control" id="codigo_postal" name="codigo_postal" required>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción (opcional)</label>
                <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-success">Guardar Dirección</button>
          </div>
        </form>
      </div>
    </div>

    <?= $this->include('templates/footer') ?>
</body>
</html>
