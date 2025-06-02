<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    protected $usuarioModel;
    protected $session;
    protected $validation;

    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
        $this->session = \Config\Services::session();
        $this->validation = \Config\Services::validation();
        helper(['form', 'url']);
    }

    // Mostrar formulario de login
    public function login()
    {
        if ($this->session->get('logged_in')) {
            return redirect()->to('/');
        }

        $data = [
            'title' => 'Iniciar Sesión'
        ];
        return view('auth/login', $data);
    }

    // Procesar login
       public function processLogin()
        {
            $email = trim(strtolower($this->request->getPost('email')));
            $password = $this->request->getPost('password');

            // Buscar al usuario por email
            $user = $this->usuarioModel
                ->where('email', $email)
                ->first();

            if (!$user) {
                return redirect()->back()
                                ->withInput()
                                ->with('error', 'Credenciales inválidas');
            }
                echo 'Nuevo hash de 12345678: ' . password_hash('12345678', PASSWORD_DEFAULT);
                echo '<pre>';
                echo "Password ingresado: " . $password . PHP_EOL;
                echo "Password en BD: " . $user['password'] . PHP_EOL;
                echo "Verificación: " . (password_verify($password, $user['password']) ? 'OK' : 'FALLÓ');
                echo '</pre>';
exit;

            // Verificar contraseña
            if (!password_verify($password, $user['password'])) {
                return redirect()->back()
                                ->withInput()
                                ->with('error', 'Credenciales inválidas');
            }

            // Guardar datos en sesión
            session()->set([
                'id_usuario' => $user['id_usuario'],
                'nombre'     => $user['nombre'],
                'email'      => $user['email'],
                'celular'    => $user['celular'],
                'logged_in'  => true
            ]);

            return redirect()->to('/'); // o '/' si preferís ir a home
        }


    // Mostrar formulario de registro
    public function register()
    {
        if ($this->session->get('logged_in')) {
            return redirect()->to('/');
        }

        $data = [
            'title' => 'Registro de Usuario'
        ];
        return view('auth/register', $data);
    }

    // Procesar registro
    public function processRegister()
    {
        $rules = [
            'nombre' => 'required|min_length[3]',
            'email' => 'required|valid_email|is_unique[usuarios.email]',
            'password' => 'required|min_length[8]',
            'confirm_password' => 'required|matches[password]',
            'celular' => 'permit_empty|numeric|min_length[10]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()
                            ->withInput()
                            ->with('errors', $this->validator->getErrors());
        }

        $rawPassword = $this->request->getPost('password');
        $hashedPassword = password_hash($rawPassword, PASSWORD_DEFAULT);

        // Debug temporal para ver qué se está guardando
        // dd($rawPassword, $hashedPassword);

        $userData = [
            'nombre' => $this->request->getPost('nombre'),
            'email' => $this->request->getPost('email'),
            'password' => $hashedPassword,
            'celular' => $this->request->getPost('celular'),
            'activo' => 1
        ];

        $this->usuarioModel->save($userData);

        return redirect()->to('/login')->with('success', '¡Registro exitoso! Ahora inicie sesión.');
}

    // Cerrar sesión
    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/login');
    }
}
