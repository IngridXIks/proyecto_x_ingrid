<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>

<h1>Editar Usuario</h1>

<?php if (isset($validation)): ?>
    <div style="color:red;">
        <?= $validation->listErrors() ?>
    </div>
<?php endif; ?>

<form method="post" action="<?= site_url('administrador/edit/' . $usuario['id_usuario']) ?>">
    <label>Nombre:</label><br>
    <input type="text" name="nombre" value="<?= old('nombre', esc($usuario['nombre'])) ?>" required><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="<?= old('email', esc($usuario['email'])) ?>" required><br>

    <label>Celular:</label><br>
    <input type="text" name="celular" value="<?= old('celular', esc($usuario['celular'])) ?>"><br>

    <label>ID Dirección:</label><br>
    <input type="number" name="id_direccion" value="<?= old('id_direccion', esc($usuario['id_direccion'])) ?>"><br>

    <label>Nueva contraseña (opcional):</label><br>
    <input type="password" name="password"><br><br>

    <button type="submit">Actualizar</button>
    <a href="<?= site_url('administrador') ?>">Cancelar</a>
</form>

<?= $this->endSection() ?>


