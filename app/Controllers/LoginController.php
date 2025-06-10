<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login'); // tu formulario de login
    }

    public function autenticar()
    {
        $usuarioModel = new UsuarioModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $usuario = $usuarioModel
            ->where('email', $email)
            ->where('activo', 1)
            ->first();

        if (!$usuario || !password_verify($password, $usuario['password'])) {
            return redirect()->back()->with('error', 'Credenciales inválidas');
        }

        // Guardar sesión
        session()->set([
            'id_usuario'   => $usuario['id_usuario'],
            'nombre'       => $usuario['nombre'],
            'email'        => $usuario['email'],
            'id_perfiles'  => $usuario['id_perfiles'],
            'logueado'     => true,
        ]);

        // Redirección según perfil
        if ($usuario['id_perfiles'] == 1) {
            return redirect()->to('/administrador');
        } else {
            return redirect()->to('/cliente');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
