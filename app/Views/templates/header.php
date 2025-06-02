<header>
<nav class="navbar navbar-expand-lg border-bottom border-body" style="background-color: #111827;" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand">
            <img src="/proyecto_x_ingrid/public/img/logonav.png" alt="Deliburger Logo" width="70" height="70">
        </a>

        <a class="navbar-brand">Deliburger</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_url('/') ?>">
                        <i class="fas fa-home"></i> Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/promociones') ?>">
                        <i class="fas fa-tags"></i> Promociones
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/locales') ?>">
                        <i class="fas fa-map-marker-alt"></i> Locales
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Productos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= base_url('/hamburguesas')?>">Hamburguesas</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('/combos')?>">Combos y Papas</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('/bebidas')?>">Bebidas y Postres</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link carrito-link" href="<?= base_url('/carrito') ?>">
                        <i class="fas fa-shopping-cart"></i> Carrito
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Sobre...
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= base_url('terminos') ?>">Términos y Condiciones</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('Privacidad') ?>">Política de Privacidad</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('Contacto') ?>">Información de contacto</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('Quienes_Somos') ?>">Quiénes Somos</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('comercializacion') ?>">Comercialización</a></li>
                    </ul>
                </li>
                 </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/consulta') ?>">Consultas</a>
                    </li>
               
                <li class="nav-item">
                    <a class="nav-link carrito-link" href="<?= base_url('/carrito') ?>">
                        <i class="fas fa-shopping-cart"></i> Carrito
                    </a>
                </li>
            </ul>

            <form class="d-flex me-3" role="search" action="<?= base_url('buscar') ?>" method="get">
                <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Buscar" name="q">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>

            <!-- Botón de Login/Logout y Perfil -->
            <div class="d-flex">
                <?php if (session('logged_in')): ?>
                    <div class="dropdown">
                        <button class="btn btn-outline-light dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown">
                            <i class="fas fa-user-circle me-1"></i> <?= esc(session('nombre')) ?>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="<?= base_url('perfil') ?>"><i class="fas fa-user me-2"></i>Mi Perfil</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('pedidos') ?>"><i class="fas fa-history me-2"></i>Mis Pedidos</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="<?= base_url('logout') ?>"><i class="fas fa-sign-out-alt me-2"></i>Cerrar Sesión</a></li>
                        </ul>
                    </div>
                <?php else: ?>
                    <a href="<?= base_url('login') ?>" class="btn btn-outline-light me-2">
                        <i class="fas fa-sign-in-alt me-1"></i> Ingresar
                    </a>
                    <a href="<?= base_url('register') ?>" class="btn btn-primary">
                        <i class="fas fa-user-plus me-1"></i> Registrarse
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</header>