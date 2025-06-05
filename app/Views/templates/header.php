<header>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<nav class="navbar navbar-expand-lg navbar-dark border-bottom" style="background-color: #111827;">
    <div class="container-fluid">
        <!-- Logo y marca -->
        <div class="d-flex align-items-center">
            <a class="navbar-brand p-0">
                <img src="/proyecto_x_ingrid/public/img/logonav.png" alt="Deliburger Logo" width="70" height="70" class="d-inline-block align-top">
            </a>
            <a class="navbar-brand d-none d-sm-inline">Deliburger</a>
        </div>

        <!-- Botón toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Contenido colapsable -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url('/') ?>">
                        <i class="bi bi-house-door me-1"></i>Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/locales') ?>">
                        <i class="bi bi-geo-alt me-1"></i>Locales
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/hamburguesas') ?>">
                        <i class="bi bi-egg-fried me-1"></i>Hamburguesas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link carrito-link" href="<?= base_url('/carrito') ?>">
                        <i class="bi bi-cart3 me-1"></i>Carrito
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        <i class="bi bi-info-circle me-1"></i>Sobre...
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= base_url('terminos') ?>"><i class="bi bi-file-text me-2"></i>Términos y Condiciones</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('Privacidad') ?>"><i class="bi bi-shield-lock me-2"></i>Política de Privacidad</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('Contacto') ?>"><i class="bi bi-envelope me-2"></i>Contacto</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('Quienes_Somos') ?>"><i class="bi bi-people me-2"></i>Quiénes Somos</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('comercializacion') ?>"><i class="bi bi-briefcase me-2"></i>Comercialización</a></li>
                    </ul>
                </li>
            </ul>
            
            <!-- Botones de usuario -->
            <div class="d-flex">
                <?php if (session('logged_in')): ?>
                    <div class="dropdown">
                        <button class="btn btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle me-1"></i> <?= esc(session('nombre')) ?>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="<?= base_url('perfil') ?>"><i class="bi bi-person-vcard me-2"></i>Mi Perfil</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('mis-pedidos') ?>"><i class="bi bi-clock-history me-2"></i>Mis Pedidos</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="<?= base_url('logout') ?>"><i class="bi bi-box-arrow-right me-2"></i>Cerrar Sesión</a></li>
                        </ul>
                    </div>
                <?php else: ?>
                    <div class="btn-group">
                        <a href="<?= base_url('login') ?>" class="btn btn-outline-light">
                            <i class="bi bi-door-open me-1"></i><span class="d-none d-sm-inline"> Ingresar</span>
                        </a>
                        <a href="<?= base_url('register') ?>" class="btn btn-primary">
                            <i class="bi bi-person-add me-1"></i><span class="d-none d-sm-inline"> Registrarse</span>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</header>

