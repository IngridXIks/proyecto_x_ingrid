<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>

<h1>Crear Usuario</h1>

<?php if (isset($validation)): ?>
    <div style="color:red;">
        <?= $validation->listErrors() ?>
    </div>
<?php endif; ?>

<form method="post" action="<?= site_url('administrador/create') ?>">
    <label>Nombre:</label><br>
    <input type="text" name="nombre" value="<?= old('nombre') ?>" required><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="<?= old('email') ?>" required><br>

    <label>Contraseña:</label><br>
    <input type="password" name="password" required><br>

    <label>Celular:</label><br>
    <input type="text" name="celular" value="<?= old('celular') ?>"><br>

    <label>ID Dirección:</label><br>
    <input type="number" name="id_direccion" value="<?= old('id_direccion') ?>"><br><br>
    
    <label>Perfil:</label><br>
    <select name="id_perfiles" required>
    <option value="">Seleccione...</option>
    <option value="1" <?= old('id_perfiles') == 1 ? 'selected' : '' ?>>Administrador</option>
    <option value="2" <?= old('id_perfiles') == 2 ? 'selected' : '' ?>>Cliente</option>
</select><br><br>

    <button type="submit">Guardar</button>
    <a href="<?= site_url('administrador') ?>">Cancelar</a>
</form>

<?= $this->endSection() ?>
