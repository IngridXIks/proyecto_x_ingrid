<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;

class AdministradorController extends BaseController
{
    protected $usuarioModel;

    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
    }

    // Mostrar todos los usuarios
    public function index()
    {
        $data['usuarios'] = $this->usuarioModel->where('activo', 1)->findAll();
        return view('back/usuarios/listado', $data);

    }

    // Mostrar un solo usuario
    public function show($id)
    {
        $usuario = $this->usuarioModel->find($id);

        if (!$usuario || !$usuario['activo']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Usuario no encontrado");
        }

        return view('back/usuarios/show', ['usuario' => $usuario]);
    }

    // Crear usuario
   public function create()
{
    helper(['form']);

    if ($this->request->getMethod() === 'post') {
        $rules = [
            'nombre'       => 'required|min_length[3]',
            'email'        => 'required|valid_email|is_unique[usuarios.email]',
            'password'     => 'required|min_length[6]',
            'celular'      => 'permit_empty|min_length[8]|max_length[15]',
            'id_direccion' => 'permit_empty|integer',
        ];

        if (!$this->validate($rules)) {
            return view('back/usuarios/crear', [
                'validation' => $this->validator
            ]);
        }

        $data = $this->request->getPost([
            'nombre',
            'email',
            'password',
            'celular',
            'id_direccion',
        ]);

        $data['activo'] = 1;

        $this->usuarioModel->save($data);
        return redirect()->to('/administrador')->with('mensaje', 'Usuario creado correctamente');
    }

    return view('back/usuarios/crear');
}


    // Editar usuario
    public function edit($id)
    {
    helper(['form']);
    $usuario = $this->usuarioModel->find($id);

    if (!$usuario || !$usuario['activo']) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Usuario no encontrado");
    }

    if ($this->request->getMethod() === 'post') {
        $email = $this->request->getPost('email');

        $rules = [
            'nombre'       => 'required|min_length[3]',
            'email'        => 'required|valid_email|is_unique[usuarios.email,id_usuario,'.$id.']',
            'celular'      => 'permit_empty|min_length[8]|max_length[15]',
            'id_direccion' => 'permit_empty|integer',
        ];

        // Si se va a cambiar contraseña
        if ($this->request->getPost('password')) {
            $rules['password'] = 'min_length[6]';
        }

        if (!$this->validate($rules)) {
            return view('back/usuarios/editar', [
                'validation' => $this->validator,
                'usuario' => $usuario
            ]);
        }

        $data = $this->request->getPost([
            'nombre',
            'email',
            'celular',
            'id_direccion'
        ]);

        if ($this->request->getPost('password')) {
            $data['password'] = $this->request->getPost('password');
        }

        $data['id_usuario'] = $id;

        $this->usuarioModel->save($data);
        return redirect()->to('/administrador')->with('mensaje', 'Usuario actualizado');
    }

    return view('back/usuarios/editar', ['usuario' => $usuario]);
}


    // Eliminar usuario (borrado lógico)
    public function delete($id)
    {
        $usuario = $this->usuarioModel->find($id);

        if (!$usuario || !$usuario['activo']) {
            return redirect()->to('/administrador')->with('error', 'Usuario no encontrado o ya eliminado');
        }

        $this->usuarioModel->delete($id);
        return redirect()->to('/administrador')->with('mensaje', 'Usuario eliminado correctamente');
    }

    // (Opcional) Función de login básica usando tu método getUserByEmail
    /*
    public function login()
    {
        if ($this->request->getMethod() === 'post') {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $usuario = $this->usuarioModel->getUserByEmail($email);

            if ($usuario && password_verify($password, $usuario['password'])) {
                // Aquí iniciarías sesión
                return redirect()->to('/usuario');
            } else {
                return redirect()->back()->with('error', 'Credenciales inválidas');
            }
        }

        return view('usuarios/login');
    }
    */
}
