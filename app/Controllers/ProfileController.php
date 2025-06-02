<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DireccionesModel;

class ProfileController extends Controller
{
    protected $direccionesModel;

    public function __construct()
    {
        $this->direccionesModel = new DireccionesModel();
        helper(['session']);
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
}
