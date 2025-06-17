
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ADMIN - Deliburger</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Administra tu perfil y direcciones en Deliburger">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/proyecto_x_ingrid/public/css/Miestilo.css">
</head>
<body>
    <!-- HEADER -->
    <?= $this->include('templates/header') ?>

    <main class="container my-5">
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
            
            <label>Perfil:</label><br>
            <select name="id_perfiles" required>
                <option value="1" <?= old('id_perfiles', $usuario['id_perfiles']) == 1 ? 'selected' : '' ?>>Administrador</option>
                <option value="2" <?= old('id_perfiles', $usuario['id_perfiles']) == 2 ? 'selected' : '' ?>>Cliente</option>
            </select><br><br>

            <button type="submit">Actualizar</button>
            <a href="<?= site_url('administrador') ?>">Cancelar</a>
        </form>
    </main>

    <?= $this->include('templates/footer') ?>
</body>
</html>
