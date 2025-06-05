<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>MI USUARIO - Deliburger</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Administra tu perfil y direcciones en Deliburger">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
 
    <link rel="stylesheet" href="/proyecto_x_ingrid/public/css/Miestilo.css">
</head>

<body>
    <!-- HEADER -->
    <?= $this->include('templates/header') ?>

    <section class="profile-hero">
        <div class="container">
            <h1 class="profile-title">Mi Perfil</h1>
            <p class="profile-subtitle">Administra tu información y direcciones</p>
        </div>
    </section>

    <main class="container profile-container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Información del Usuario -->
                <div class="profile-card card shadow-sm mb-4">
                    <div class="card-header bg-primary text-white">
                        <h2 class="h4 mb-0"><i class="fas fa-user-circle me-2"></i>Información Personal</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label text-muted small">Nombre completo</label>
                                <p class="profile-info"><?= esc($usuario['nombre']) ?></p>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label text-muted small">Correo electrónico</label>
                                <p class="profile-info"><?= esc($usuario['email']) ?></p>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-muted small">Teléfono celular</label>
                                <p class="profile-info"><?= esc($usuario['celular']) ?: 'No proporcionado' ?></p>
                            </div>
                        </div>
                        <button class="btn btn-outline-primary mt-3" data-bs-toggle="modal" data-bs-target="#modalEditarPerfil">
                            <i class="fas fa-edit me-1"></i> Editar información
                        </button>
                    </div>
                </div>

                <!-- Direcciones -->
                <div class="profile-card card shadow-sm mb-4">
                    <div class="card-header bg-primary text-white mb-4">
                        <h2 class="h4 mb-0"><i class="fas fa-map-marker-alt me-2"></i>Mis Direcciones</h2>
                    </div>
                    <div class="card-body">
                        <?php if (!empty($direcciones)): ?>
                            <div class="row g-3 mb-4">
                                <?php foreach ($direcciones as $direccion): ?>
                                    <div class="col-md-6">
                                        <div class="address-card card h-100">
                                            <div class="card-body">
                                                <h3 class="h5">
                                                    <?= esc($direccion['descripcion'] ?? 'Dirección principal') ?>
                                                </h3>
                                                <p class="mb-1"><?= esc($direccion['calle']) ?> <?= esc($direccion['numero']) ?></p>
                                                <p class="mb-1"><?= esc($direccion['ciudad']) ?>, <?= esc($direccion['provincia']) ?></p>
                                                <p class="mb-3">CP: <?= esc($direccion['codigo_postal']) ?></p>
                                                
                                                <div class="btn-group btn-group-sm">
                                                    <form action="<?= base_url('direcciones/eliminar/' . $direccion['id_direccion']) ?>" method="post">
                                                        <?= csrf_field() ?>
                                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('¿Eliminar esta dirección?');">
                                                            <i class="fas fa-trash-alt me-1"></i> Eliminar
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        <?php else: ?>
                            <div class="text-center py-4">
                                <i class="fas fa-map-marker-alt fa-3x text-muted mb-3"></i>
                                <p class="text-muted">No tienes direcciones guardadas</p>
                            </div>
                        <?php endif ?>

                        <div class="text-center mt-3">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgregarDireccion">
                            <i class="fas fa-plus me-1"></i> Agregar Nueva Dirección
                        </button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Modal para agregar dirección -->
    <div class="modal fade" id="modalAgregarDireccion" tabindex="-1" aria-labelledby="modalAgregarDireccionLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form action="<?= base_url('direcciones/guardar') ?>" method="post" class="modal-content">
                <?= csrf_field() ?>
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="modalAgregarDireccionLabel"><i class="fas fa-map-marker-alt me-2"></i>Agregar Nueva Dirección</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="descripcion" class="form-label">Descripción (ej: Casa, Trabajo)</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="¿Cómo quieres llamar a esta dirección?">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="calle" class="form-label">Calle *</label>
                            <input type="text" class="form-control" id="calle" name="calle" required>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="numero" class="form-label">Número *</label>
                            <input type="number" class="form-control" id="numero" name="numero" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="ciudad" class="form-label">Ciudad *</label>
                            <input type="text" class="form-control" id="ciudad" name="ciudad" required>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="provincia" class="form-label">Provincia *</label>
                            <input type="text" class="form-control" id="provincia" name="provincia" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="codigo_postal" class="form-label">Código Postal *</label>
                            <input type="number" class="form-control" id="codigo_postal" name="codigo_postal" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success">Guardar Dirección</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal para editar perfil -->
    <div class="modal fade" id="modalEditarPerfil" tabindex="-1" aria-labelledby="modalEditarPerfilLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="<?= base_url('perfil/actualizar') ?>" method="post" class="modal-content">
                <?= csrf_field() ?>
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="modalEditarPerfilLabel"><i class="fas fa-user-edit me-2"></i>Editar Perfil</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre completo *</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?= esc($usuario['nombre']) ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico *</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?= esc($usuario['email']) ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="celular" class="form-label">Teléfono celular</label>
                        <input type="tel" class="form-control" id="celular" name="celular" value="<?= esc($usuario['celular'] ?? '') ?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>

    <?= $this->include('templates/footer') ?>
</body>
</html>