<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class UsuarioController extends Controller
{
    protected $usuarioModel;
    protected $validation;

    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
        $this->validation = \Config\Services::validation();
    }

    // Mostrar lista de usuarios
    public function index()
{
    $data['usuarios'] = $this->usuarioModel->findAll();
    return view('usuarios/listado', $data);
}


    // Mostrar formulario para crear usuario
    public function create()
    {
        return view('usuarios/create');
    }

    // Guardar usuario nuevo
    public function store()
    {
        $rules = [
            'nombre' => 'required|min_length[3]',
            'email' => 'required|valid_email|is_unique[usuarios.email]',
            'password' => 'required|min_length[6]',
            'celular' => 'permit_empty|numeric',
            'id_direccion' => 'permit_empty|integer',
        ];

        if (!$this->validate($rules)) {
            return view('usuarios/create', [
                'validation' => $this->validator
            ]);
        }

        $this->usuarioModel->save([
            'nombre' => $this->request->getPost('nombre'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'celular' => $this->request->getPost('celular'),
            'id_direccion' => $this->request->getPost('id_direccion'),
            'activo' => 1,
        ]);

        return redirect()->to(site_url('usuario'))->with('mensaje', 'Usuario creado correctamente.');
    }

    // Mostrar formulario para editar usuario
    public function edit($id = null)
    {
        $usuario = $this->usuarioModel->find($id);
        if (!$usuario) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Usuario no encontrado");
        }
        return view('usuarios/edit', ['usuario' => $usuario]);
    }

    // Actualizar usuario
    public function update($id = null)
    {
        $usuario = $this->usuarioModel->find($id);
        if (!$usuario) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Usuario no encontrado");
        }

        $rules = [
            'nombre' => 'required|min_length[3]',
            'email' => "required|valid_email|is_unique[usuarios.email,id_usuario,$id]",
            'password' => 'permit_empty|min_length[6]',
            'celular' => 'permit_empty|numeric',
            'id_direccion' => 'permit_empty|integer',
        ];

        if (!$this->validate($rules)) {
            return view('usuarios/edit', [
                'validation' => $this->validator,
                'usuario' => $usuario
            ]);
        }

        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'email' => $this->request->getPost('email'),
            'celular' => $this->request->getPost('celular'),
            'id_direccion' => $this->request->getPost('id_direccion'),
        ];

        $password = $this->request->getPost('password');
        if (!empty($password)) {
            $data['password'] = $password;
        }

        $this->usuarioModel->update($id, $data);

        return redirect()->to(site_url('usuario'))->with('mensaje', 'Usuario actualizado correctamente.');
    }

    // Mostrar detalles de usuario
    public function show($id = null)
    {
        $usuario = $this->usuarioModel->find($id);
        if (!$usuario) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Usuario no encontrado");
        }
        return view('usuarios/show', ['usuario' => $usuario]);
    }

    // Eliminar usuario (borrado lógico si tienes campo deleted_at)
    public function delete($id = null)
    {
        $usuario = $this->usuarioModel->find($id);
        if (!$usuario) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Usuario no encontrado");
        }

        // Si usas soft deletes:
        $this->usuarioModel->delete($id);

        // Si quieres borrado físico:
        // $this->usuarioModel->where('id_usuario', $id)->delete();

        return redirect()->to(site_url('usuario'))->with('mensaje', 'Usuario eliminado correctamente.');
    }
}
