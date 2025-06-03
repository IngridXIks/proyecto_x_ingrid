<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DireccionesModel;
use App\Models\UsuarioModel;

class ProfileController extends Controller
{
    protected $direccionesModel;
    protected $usuarioModel; // Nota: minúscula "u"

    public function __construct()
    {
        $this->direccionesModel = new DireccionesModel();
        $this->usuarioModel = new UsuarioModel(); // Nota: minúscula "u"
        helper(['session', 'form']);
    }

    public function index()
    {
        $session = session();

        if (!$session->get('logged_in')) {
            return redirect()->to('/login');
        }

        $userId = $session->get('id_usuario');

        $data = [
            'title' => 'Mi Perfil',
            'usuario' => [
                'id_usuario' => $userId,
                'nombre' => $session->get('nombre'),
                'email' => $session->get('email'),
                'celular' => $session->get('celular'),
            ],
            'direcciones' => $this->direccionesModel->where('id_usuario', $userId)->findAll()
        ];

        return view('back/usuarios/index', $data);
    }
     public function actualizarPerfil()
    {
        $session = session();

        if (!$session->get('logged_in')) {
            return redirect()->to('/login');
        }

        $userId = $session->get('id_usuario');

        // Validar los datos del formulario
        $rules = [
            'nombre' => 'required|min_length[3]|max_length[50]',
            'email' => 'required|valid_email|max_length[100]',
            'celular' => 'permit_empty|max_length[20]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Preparar los datos para actualizar
        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'email' => $this->request->getPost('email'),
            'celular' => $this->request->getPost('celular') // Corregido: 'celular' no 'celular'
        ];

        // Actualizar en la base de datos (nota: minúscula "u")
        if ($this->usuarioModel->update($userId, $data)) {
            // Actualizar también los datos en la sesión
            $session->set([
                'nombre' => $data['nombre'],
                'email' => $data['email'],
                'celular' => $data['celular']
            ]);
            
            return redirect()->to('/perfil')->with('message', 'Perfil actualizado correctamente');
        } else {
            return redirect()->back()->withInput()->with('error', 'No se pudo actualizar el perfil');
        }
    }
}
