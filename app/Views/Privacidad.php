<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Política de Privacidad - Deliburger</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Estilo CSS-->
    <link rel="stylesheet" href="/proyecto_x_ingrid/public/css/Miestilo.css">
    <!--Font-Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- HEADER -->
    <?= $this->include('templates/header') ?>

    <div class="legal-hero">
        <div class="container">
            <h1 class="legal-title">Política de Privacidad</h1>
            <p class="legal-subtitle">Protección de tus datos personales</p>
        </div>
    </div>

    <main class="legal-container container">
        <div class="legal-header">
            <p class="legal-update">Fecha de entrada en vigor: 24 de abril de 2025</p>
            <div class="legal-acceptance">
                <p>En Deliburger, valoramos y respetamos tu privacidad. Esta política describe cómo recopilamos, usamos y protegemos tu información personal cuando utilizas nuestro sitio web.</p>
            </div>
        </div>

        <div class="legal-content">
            <section class="legal-section">
                <h2 class="legal-section-title">Información que Recopilamos</h2>
                <div class="legal-section-content">
                    <p>Recopilamos datos que nos proporcionas, como tu nombre, dirección de correo electrónico y detalles de pago, para procesar tus pedidos y mejorar tu experiencia. También recopilamos información sobre tu actividad en el sitio, como:</p>
                    <ul class="legal-list">
                        <li>Fecha y hora de acceso</li>
                        <li>Páginas visitadas</li>
                        <li>Tiempo de permanencia en cada sección</li>
                        <li>Dispositivo y navegador utilizado</li>
                    </ul>
                </div>
            </section>

            <section class="legal-section">
                <h2 class="legal-section-title">Uso de la Información</h2>
                <div class="legal-section-content">
                    <p>Utilizamos la información recopilada para:</p>
                    <ul class="legal-list">
                        <li>Procesar y gestionar tus pedidos</li>
                        <li>Mejorar nuestros servicios y personalizar tu experiencia</li>
                        <li>Enviar comunicaciones relacionadas con tu cuenta</li>
                        <li>Notificarte sobre promociones especiales (solo si has dado tu consentimiento)</li>
                        <li>Garantizar la seguridad de nuestras transacciones</li>
                    </ul>
                </div>
            </section>

            <section class="legal-section">
                <h2 class="legal-section-title">Compartición de Información</h2>
                <div class="legal-section-content">
                    <p>No compartimos tu información personal con terceros, excepto en las siguientes circunstancias:</p>
                    <ul class="legal-list">
                        <li>Para cumplir con obligaciones legales o requerimientos judiciales</li>
                        <li>Para proteger nuestros derechos o los de otros usuarios</li>
                        <li>Con proveedores de servicios que nos ayudan en nuestras operaciones (siempre bajo acuerdos de confidencialidad)</li>
                        <li>En caso de fusión, adquisición o venta de nuestros activos</li>
                    </ul>
                </div>
            </section>

            <section class="legal-section">
                <h2 class="legal-section-title">Seguridad de los Datos</h2>
                <div class="legal-section-content">
                    <p>Implementamos medidas de seguridad adecuadas para proteger tus datos contra accesos no autorizados, alteraciones o divulgaciones. Estas incluyen:</p>
                    <ul class="legal-list">
                        <li>Encriptación de datos sensibles</li>
                        <li>Sistemas de autenticación seguros</li>
                        <li>Accesos restringidos al personal autorizado</li>
                        <li>Revisiones periódicas de nuestros sistemas de seguridad</li>
                    </ul>
                </div>
            </section>

            <section class="legal-section">
                <h2 class="legal-section-title">Derechos del Usuario</h2>
                <div class="legal-section-content">
                    <p>De acuerdo con la legislación aplicable, tienes derecho a:</p>
                    <ul class="legal-list">
                        <li>Acceder a tus datos personales que tenemos almacenados</li>
                        <li>Solicitar la rectificación de información inexacta</li>
                        <li>Pedir la eliminación de tus datos personales</li>
                        <li>Oponerte al tratamiento de tus datos para fines específicos</li>
                        <li>Solicitar la portabilidad de tus datos</li>
                    </ul>
                    <p>Para ejercer estos derechos, contáctanos a través de nuestro correo electrónico: <a href="mailto:privacidad@deliburger.com" class="legal-link">privacidad@deliburger.com</a></p>
                </div>
            </section>

            <section class="legal-section">
                <h2 class="legal-section-title">Actualizaciones de la Política</h2>
                <div class="legal-section-content">
                    <p>Esta política puede actualizarse periódicamente para reflejar cambios en nuestras prácticas o en las leyes aplicables. Te notificaremos sobre cualquier cambio significativo:</p>
                    <ul class="legal-list">
                        <li>Mediante un aviso visible en nuestro sitio web</li>
                        <li>Por correo electrónico (si tenemos tu dirección registrada)</li>
                        <li>Actualizando la fecha de "última modificación" al inicio de este documento</li>
                    </ul>
                    <p>Te recomendamos revisar esta política periódicamente para estar informado sobre cómo protegemos tu información.</p>
                </div>
            </section>
        </div>
    </main>

    <!-- FOOTER -->
    <?= $this->include('templates/footer') ?>
</body>
</html>