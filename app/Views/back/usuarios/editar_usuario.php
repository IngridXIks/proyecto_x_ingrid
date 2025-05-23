<h2>Editar Usuario</h2>

<form method="post" action="../../controladores/usuario_controller.php?accion=actualizar&id=<?= $usuario['id_usuario'] ?>">
    Nombre: <input name="nombre" value="<?= $usuario['nombre'] ?>"><br>
    Apellido: <input name="apellido" value="<?= $usuario['apellido'] ?>"><br>
    Usuario: <input name="usuario" value="<?= $usuario['usuario'] ?>"><br>
    Email: <input name="email" value="<?= $usuario['email'] ?>"><br>
    Contraseña: <input type="password" name="pass"><br>

    <label>Perfil:</label>
    <select name="perfil_id">
        <?php foreach ($perfiles as $perfil): ?>
            <option value="<?= $perfil['id_perfiles'] ?>" <?= ($usuario['perfil_id'] == $perfil['id_perfiles']) ? 'selected' : '' ?>>
                <?= $perfil['descripcion'] ?>
            </option>
        <?php endforeach; ?>
    </select><br><br>

    <input type="submit" value="Actualizar">
</form>
