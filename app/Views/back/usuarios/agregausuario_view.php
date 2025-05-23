<h2>Agregar Nuevo Usuario</h2>

<form method="post" action="../../controladores/usuario_controller.php?accion=guardar">
    <label>Nombre:</label>
    <input type="text" name="nombre" required><br><br>

    <label>Apellido:</label>
    <input type="text" name="apellido" required><br><br>

    <label>Usuario:</label>
    <input type="text" name="usuario" required><br><br>

    <label>Email:</label>
    <input type="email" name="email" required><br><br>

    <label>Contraseña:</label>
    <input type="password" name="pass" required><br><br>

    <label>Perfil:</label>
    <select name="perfil_id" required>
        <?php foreach ($perfiles as $perfil): ?>
            <option value="<?= $perfil['id_perfiles'] ?>"><?= $perfil['descripcion'] ?></option>
        <?php endforeach; ?>
    </select><br><br>

    <input type="submit" value="Guardar Usuario">
</form>
