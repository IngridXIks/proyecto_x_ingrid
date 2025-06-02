<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use App\Models\PerfilModel;

class UsuarioController extends BaseController
{
    protected $usuarioModel;
    protected $perfilModel;

    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
        $this->perfilModel = new PerfilModel();
        helper(['form', 'url']);
    }

    // Listar todos los usuarios
    public function index()
    {
        $data = [
            'usuarios' => $this->usuarioModel->getUsuariosConPerfiles(),
            'title' => 'Lista de Usuarios'
        ];
        return view('back/usuarios/listar', $data);
    }

    // Mostrar formulario de creación
    public function crear()
    {
        $data = [
            'perfiles' => $this->perfilModel->findAll(),
            'title' => 'Crear Nuevo Usuario'
        ];
        return view('back/usuarios/crear', $data);
    }

    // Guardar nuevo usuario
    public function guardar()
    {
        $rules = [
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]',
            'usuario' => 'required|is_unique[usuarios.usuario]',
            'email' => 'required|valid_email|is_unique[usuarios.email]',
            'pass' => 'required|min_length[8]',
            'perfil_id' => 'required|numeric'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'usuario' => $this->request->getPost('usuario'),
            'email' => $this->request->getPost('email'),
            'pass' => password_hash($this->request->getPost('pass'), PASSWORD_DEFAULT),
            'perfil_id' => $this->request->getPost('perfil_id'),
            'baja' => 0 // Por defecto no está dado de baja
        ];

        $this->usuarioModel->insert($data);
        return redirect()->to('/usuarios')->with('success', 'Usuario creado exitosamente');
    }

    // Mostrar formulario de edición
    public function editar($id)
    {
        $data = [
            'usuario' => $this->usuarioModel->find($id),
            'perfiles' => $this->perfilModel->findAll(),
            'title' => 'Editar Usuario'
        ];
        return view('back/usuarios/editar', $data);
    }

    // Actualizar usuario
    public function actualizar($id)
    {
        $rules = [
            'nombre' => 'required|min_length[3]',
            'apellido' => '