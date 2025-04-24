<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/proyecto_x_ingrid/public/css/Miestilo.css">
</head>
<body>
    <!-- Pie de página -->
    <footer class="footer">
        <div class="footer-menu">
            <!-- Logo central -->
            <section class="footer-logo">
                <img src="/proyecto_x_ingrid/public/img/logo.png" alt="Logo de la empresa">
            </section>

            <!-- Enlaces -->
            <section class="footer-links">
                <ul>
                    <li><a href="<?= base_url('terminos') ?>">Términos y Condiciones</a></li>
                    <li><a href="<?= base_url('politica') ?>">Política de Privacidad</a></li>
                    <li><a href="<?= base_url('contacto') ?>">Información de contacto</a></li>
                    <li><a href="<?= base_url('nosotros') ?>">Quiénes Somos</a></li>
                    <li><a href="<?= base_url('comercializacion') ?>">Comercialización</a></li>
                </ul>
            </section>
        </div>

        <!-- Redes sociales -->
        <section class="footer-social">
            <p>Redes sociales</p>
            <section class="social-icons">
                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                <a href="#" aria-label="Twitter"><i class="fab fa-x-twitter"></i></a>
                <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            </section>
        </section>

        <!-- Derechos de autor -->
        <section class="footer-copy">
            <p>© 2025 Deliburgers. Todos los derechos reservados.</p>
        </section>
    </footer>
</body>
</html>