<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>

<h1>Lista de Usuarios</h1>

<?php if (session()->getFlashdata('mensaje')): ?>
    <p style="color:green;"><?= session()->getFlashdata('mensaje') ?></p>
<?php endif; ?>

<a href="<?= site_url('administrador/create') ?>" class="btn btn-primary mb-3">Crear nuevo usuario</a>


<table border="1" cellpadding="5" class="table table-striped">
    <thead>
        <tr>
            <th>ID</th><th>Nombre</th><th>Email</th><th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td><?= esc($usuario['id_usuario']) ?></td>
            <td><?= esc($usuario['nombre']) ?></td>
            <td><?= esc($usuario['email']) ?></td>
            <td>
              <a href="<?= site_url('administrador/show/'.$usuario['id_usuario']) ?>">Ver</a> |
              <a href="<?= site_url('administrador/edit/'.$usuario['id_usuario']) ?>">Editar</a> |
              <a href="<?= site_url('administrador/delete/'.$usuario['id_usuario']) ?>" onclick="return confirm('¿Estás seguro?')">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection() ?>

