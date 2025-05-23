<h2>Lista de Usuarios</h2>
<a href="usuario_controller.php?accion=crear">Crear nuevo usuario</a>
<table border="1">
    <tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Email</th><th>Perfil</th><th>Acciones</th></tr>
    <?php foreach ($usuarios as $u): ?>
        <tr>
            <td><?= $u['id_usuario'] ?></td>
            <td><?= $u['nombre'] ?></td>
            <td><?= $u['apellido'] ?></td>
            <td><?= $u['email'] ?></td>
            <td><?= $u['perfil_descripcion'] ?></td>
            <td>
                <a href="usuario_controller.php?accion=editar&id=<?= $u['id_usuario'] ?>">Editar</a> |
                <a href="usuario_controller.php?accion=eliminar&id=<?= $u['id_usuario'] ?>" onclick="return confirm('¿Eliminar?')">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
