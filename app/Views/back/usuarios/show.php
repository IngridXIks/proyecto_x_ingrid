<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>

<h1>Detalles del Usuario</h1>

<p><strong>ID:</strong> <?= esc($usuario['id_usuario']) ?></p>
<p><strong>Nombre:</strong> <?= esc($usuario['nombre']) ?></p>
<p><strong>Email:</strong> <?= esc($usuario['email']) ?></p>
<p><strong>Celular:</strong> <?= esc($usuario['celular']) ?></p>
<p><strong>ID Dirección:</strong> <?= esc($usuario['id_direccion']) ?></p>
<p><strong>Activo:</strong> <?= $usuario['activo'] ? 'Sí' : 'No' ?></p>

<a href="<?= site_url('administrador') ?>">Volver a la lista</a>

<?= $this->endSection() ?>

