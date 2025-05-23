<?php
include_once 'modelo/usuario_modelo.php'; // Accede al modelo

$accion = $_GET['accion'] ?? 'listar';

switch ($accion) {
    case 'crear':
    include 'Views/back/usuarios/agregausuario_view.php';
    break;

case 'guardar':
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $usuario = $_POST['usuario'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        crearUsuario($nombre, $apellido, $usuario, $email, $pass);
        header('Location: usuario_controller.php'); // Redirige a lista
    }
    break;


    case 'editar':
        $id = $_GET['id'];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            actualizarUsuario($id, $_POST['nombre'], $_POST['apellido'], $_POST['usuario'], $_POST['email'], $_POST['pass']);
            header('Location: usuario_controller.php');
        } else {
            $usuario = obtenerUsuarioPorId($id);
            include 'vistas/editar_usuario.php';
        }
        break;

    case 'eliminar':
        $id = $_GET['id'];
        eliminarUsuario($id);
        header('Location: usuario_controller.php');
        break;

    default:
        $usuarios = listarUsuarios();
        include 'vistas/listar_usuarios.php';
        break;
}
?>
