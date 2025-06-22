<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;
use App\Models\FacturaModel;
use App\Models\DetalleFacturaModel;
use App\Models\ProductoModel;
use App\Models\ConsultaModel;


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
        return view('back/usuarios/panel_admin', $data);
    }

    public function lista()
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
                'id_perfiles' => 'required|integer|in_list[1,2]',
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

    public function pedidos($id_usuario)
    {
        $usuario = $this->usuarioModel->find($id_usuario);
        if (!$usuario || !$usuario['activo']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Usuario no encontrado");
        }

        $pedidoModel = new FacturaModel();
        $pedidos = $pedidoModel->where('usuario_id', $id_usuario)->orderBy('id', 'DESC')->findAll();

        return view('back/usuarios/pedidos', [
            'usuario' => $usuario,
            'pedidos' => $pedidos
        ]);
    }

    public function pedido_detalle($id_pedido)
    {
        $pedidoModel = new FacturaModel();
        $detalleModel = new DetalleFacturaModel();

        $pedido = $pedidoModel->find($id_pedido);
        if (!$pedido) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Pedido no encontrado");
        }

        // JOIN usando el modelo, no builder, y usando productos.id
        $detalles = $detalleModel
            ->select('detalle_factura.*, productos.nombre as nombre_producto')
            ->join('productos', 'productos.id = detalle_factura.producto_id')
            ->where('detalle_factura.factura_id', $id_pedido)
            ->findAll();

        return view('back/usuarios/pedido_detalle', [
            'pedido' => $pedido,
            'detalles' => $detalles
        ]);
    }


    public function productos()
    {
        $productoModel = new ProductoModel();
        $productos = $productoModel->findAll();
        return view('back/productos/listado', ['productos' => $productos]);
    }

    // Formulario para crear producto
    public function producto_create()
    {
        return view('back/productos/crear');
    }

    // Guardar producto nuevo
    public function producto_store()
    {
        $productoModel = new ProductoModel();
        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion'),
            'precio' => $this->request->getPost('precio'),
            'activo' => $this->request->getPost('activo') ? 1 : 0,
        ];

        // Manejo de imagen
        $img = $this->request->getFile('imagen');
        if ($img && $img->isValid()) {
            $imgName = $img->getClientName(); // o getRandomName() si prefieres nombres únicos
            $img->move(ROOTPATH . 'public/img/hamburguesas', $imgName);
            $data['imagen'] = $imgName;
        }

        $productoModel->insert($data);
        return redirect()->to('administrador/productos')->with('mensaje', 'Producto creado');
    }

    // Formulario para editar producto
    public function producto_edit($id)
    {
        $productoModel = new ProductoModel();
        $producto = $productoModel->find($id);
        if (!$producto) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Producto no encontrado");
        }
        return view('back/productos/editar', ['producto' => $producto]);
    }

    // Actualizar producto
    public function producto_update($id)
    {
        $productoModel = new ProductoModel();
        $producto = $productoModel->find($id);
        if (!$producto) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Producto no encontrado");
        }

        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion'),
            'precio' => $this->request->getPost('precio'),
            'activo' => $this->request->getPost('activo') ? 1 : 0,
        ];

        // Manejo de imagen
        $img = $this->request->getFile('imagen');
        if ($img && $img->isValid()) {
            $imgName = $img->getClientName();
            $img->move(ROOTPATH . 'public/img/hamburguesas', $imgName);
            $data['imagen'] = $imgName;
        }

        $productoModel->update($id, $data);
        return redirect()->to('administrador/productos')->with('mensaje', 'Producto actualizado');
    }

    // Activar/desactivar producto
    public function producto_toggle($id)
    {
        $productoModel = new ProductoModel();
        $producto = $productoModel->find($id);
        if (!$producto) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Producto no encontrado");
        }
        $nuevoEstado = $producto['activo'] ? 0 : 1;
        $productoModel->update($id, ['activo' => $nuevoEstado]);
        return redirect()->to('administrador/productos');
    }

    // Ver producto
    public function producto_show($id)
    {
        $productoModel = new ProductoModel();
        $producto = $productoModel->find($id);
        if (!$producto) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Producto no encontrado");
        }
        return view('back/productos/show', ['producto' => $producto]);
    }

    public function consultas()
{
    $consultaModel = new ConsultaModel();
    $data['consultas'] = $consultaModel->orderBy('creado_en', 'DESC')->findAll();
    return view('back/usuarios/consultas/panel_consultas', $data);
}

public function responder_consulta($id)
{
    log_message('debug', 'Entré a responder_consulta con método: ' . $this->request->getMethod());

    $consultaModel = new \App\Models\ConsultaModel();
    $consulta = $consultaModel->find($id);

    if (!$consulta) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Consulta no encontrada");
    }

    if (strtolower($this->request->getMethod()) === 'post') {
        log_message('debug', 'Formulario enviado con POST');

        $respuesta = $this->request->getPost('respuesta');
        log_message('debug', 'Respuesta recibida: ' . $respuesta);
        if (empty(trim($respuesta))) {
            return redirect()->back()->with('error', 'La respuesta no puede estar vacía');
        }

        $updated = $consultaModel->update($id, [
            'respuesta' => $respuesta,
            'respondida' => 1,
            'fecha_respuesta' => date('Y-m-d H:i:s'),
        ]);

        if (!$updated) {
            $errors = $consultaModel->errors();
            log_message('error', 'Error al actualizar consulta: ' . json_encode($errors));
            return redirect()->back()->with('error', 'Error al guardar la respuesta');
        }

        return redirect()->to('/administrador/consultas')->with('mensaje', 'Consulta respondida correctamente');
    }

    return view('back/usuarios/consultas/responder', ['consulta' => $consulta]);
}

}
