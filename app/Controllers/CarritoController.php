<?php

namespace App\Controllers;

use App\Models\CarritoModel;
use App\Models\ProductoModel;

class CarritoController extends BaseController
{
    protected $carritoModel;
    protected $productoModel;

    public function __construct()
    {
        $this->carritoModel = new CarritoModel();
        $this->productoModel = new ProductoModel();
    }

    public function index()
    {
        $id_usuario = session()->get('id_usuario'); // Asegurate de que esté seteado en login

        $data['carrito'] = $this->carritoModel->getCarritoPorUsuario($id_usuario);

        return view('back/carrito/carrito', $data);
    }

    public function agregar()
{
    $id_usuario = session()->get('id_usuario');
    if (!$id_usuario) {
        return redirect()->to('/login')->with('error', 'Debes iniciar sesión.');
    }

    $id_producto = $this->request->getPost('id_producto');

    $productoModel = new \App\Models\ProductoModel();
    $producto = $productoModel->where('id', $id_producto)->where('activo', 1)->first();

    if (!$producto) {
        return redirect()->back()->with('error', 'Producto no válido o no activo.');
    }

    $carritoModel = new \App\Models\CarritoModel();

    $itemExistente = $carritoModel->where('id_usuario', $id_usuario)
                                ->where('id_producto', $id_producto)
                                ->first();

    if ($itemExistente) {
        $actualizado = $carritoModel->update($itemExistente['id'], [
            'cantidad' => $itemExistente['cantidad'] + 1
        ]);

        if (!$actualizado) {
            dd('Error actualizando carrito:', $carritoModel->errors());
        }
    } else {
        $insertado = $carritoModel->insert([
            'id_usuario' => $id_usuario,
            'id_producto' => $id_producto,
            'cantidad' => 1,
            'agregado_en' => date('Y-m-d H:i:s')
        ]);

        if (!$insertado) {
            dd('Error insertando carrito:', $carritoModel->errors());
        }
    }

    return redirect()->back()->with('success', 'Producto agregado al carrito.');
}
    public function actualizar()
{
    $id_usuario = session()->get('id_usuario');
    if (!$id_usuario) {
        return redirect()->to('/login')->with('error', 'Debes iniciar sesión.');
    }

    $id_producto = $this->request->getPost('id');
    $nueva_cantidad = $this->request->getPost('cantidad');

    // Validar que la cantidad sea al menos 1
    if ($nueva_cantidad < 1) {
        return redirect()->back()->with('error', 'La cantidad no puede ser menor a 1.');
    }

    // Buscar el ítem en el carrito
    $itemExistente = $this->carritoModel
                        ->where('id_usuario', $id_usuario)
                        ->where('id_producto', $id_producto)
                        ->first();

    if ($itemExistente) {
        // Actualizar la cantidad
        $this->carritoModel->update($itemExistente['id'], [
            'cantidad' => $nueva_cantidad
        ]);
        
        return redirect()->back()->with('success', 'Cantidad actualizada.');
    }

    return redirect()->back()->with('error', 'Producto no encontrado en el carrito.');
}

    public function eliminar()
    {
        $id = $this->request->getPost('id');
        $this->carritoModel->delete($id);
        return redirect()->back()->with('success', 'Producto eliminado del carrito.');
    }

    public function pagar()
    {
        return view('back/carrito/pagar'); // Placeholder
    }
    public function procesar_pago()
{
    if (!$this->request->isAJAX()) {
        return $this->response->setStatusCode(403)->setJSON([
            'success' => false,
            'message' => 'Acceso no permitido'
        ]);
    }

    $usuarioId = session()->get('id_usuario');
    if (!$usuarioId) {
        return $this->response->setJSON([
            'success' => false,
            'message' => 'Debes iniciar sesión para pagar'
        ]);
    }

    // Obtener carrito desde la base de datos
    $carrito = $this->carritoModel->getCarritoPorUsuario($usuarioId);

    if (empty($carrito)) {
        return $this->response->setJSON([
            'success' => false,
            'message' => 'El carrito está vacío'
        ]);
    }

    // Calcular total
    $total = array_reduce($carrito, function($sum, $item) {
        return $sum + ($item['precio'] * $item['cantidad']);
    }, 0);

    // Modelos
    $facturaModel = new \App\Models\FacturaModel();
    $detalleModel = new \App\Models\DetalleFacturaModel();

    $db = \Config\Database::connect();
    $db->transStart();

    try {
        // 1. Crear factura
        $facturaId = $facturaModel->insert([
            'usuario_id' => $usuarioId,
            'fecha' => date('Y-m-d H:i:s'),
            'total' => $total,
            'estado' => 'completado'
        ]);

        // 2. Crear detalles
        foreach ($carrito as $item) {
            $detalleModel->insert([
                'factura_id' => $facturaId,
                'producto_id' => $item['id_producto'],
                'cantidad' => $item['cantidad'],
                'precio_unitario' => $item['precio'],
                'subtotal' => $item['precio'] * $item['cantidad']
            ]);
        }

        // 3. Vaciar carrito
        $this->carritoModel->where('id_usuario', $usuarioId)->delete();

        $db->transComplete();

        return $this->response->setJSON([
            'success' => true,
            'factura_id' => $facturaId,
            'message' => 'Factura generada correctamente'
        ]);

    } catch (\Exception $e) {
        $db->transRollback();
        return $this->response->setJSON([
            'success' => false,
            'message' => 'Error al procesar: ' . $e->getMessage()
        ]);
    }
}
}
