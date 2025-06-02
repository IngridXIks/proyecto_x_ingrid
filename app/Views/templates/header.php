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

            <form class="d-flex" role="search" action="<?= base_url('buscar') ?>" method="get">
                <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Buscar" name="q">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</header>