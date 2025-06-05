<?php namespace App\Controllers;

use App\Models\FacturaModel;
use App\Models\DetalleFacturaModel;
use App\Models\ProductoModel;

class PedidosController extends BaseController
{
    protected $facturaModel;
    protected $detalleFacturaModel;
    protected $productoModel;

    public function __construct()
    {
        $this->facturaModel = new FacturaModel();
        $this->detalleFacturaModel = new DetalleFacturaModel();
        $this->productoModel = new ProductoModel();
    }

    // Procesar el pago y generar factura
    public function procesarPago()
    {
        if (!$this->request->isAJAX()) {
            return redirect()->back()->with('error', 'Acceso no permitido');
        }

        $carrito = session()->get('carrito') ?? [];
        $usuarioId = session()->get('user_id');

        if (empty($carrito)) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'El carrito está vacío'
            ]);
        }

        if (!$usuarioId) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Debes iniciar sesión para realizar el pago'
            ]);
        }

        $total = array_reduce($carrito, function($sum, $item) {
            return $sum + ($item['precio'] * $item['cantidad']);
        }, 0);

        $db = \Config\Database::connect();
        $db->transStart();

        try {
            // Crear factura
            $facturaId = $this->facturaModel->insert([
                'usuario_id' => $usuarioId,
                'fecha' => date('Y-m-d H:i:s'),
                'total' => $total,
                'estado' => 'completado'
            ]);

            // Crear detalles de factura
            foreach ($carrito as $item) {
                $this->detalleFacturaModel->insert([
                    'factura_id' => $facturaId,
                    'producto_id' => $item['id_producto'],
                    'cantidad' => $item['cantidad'],
                    'precio_unitario' => $item['precio'],
                    'subtotal' => $item['precio'] * $item['cantidad']
                ]);
            }

            // Vaciar carrito
            session()->remove('carrito');

            $db->transComplete();

            return $this->response->setJSON([
                'success' => true,
                'factura_id' => $facturaId,
                'redirect' => base_url('/mis-pedidos/' . $facturaId)
            ]);

        } catch (\Exception $e) {
            $db->transRollback();
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Error al procesar el pago: ' . $e->getMessage()
            ]);
        }
    }

    // Mostrar pedidos del usuario
    public function misPedidos()
    {
        $usuarioId = session()->get('id_usuario');
        
        if (!$usuarioId) {
            return redirect()->to('/login')->with('error', 'Debes iniciar sesión para ver tus pedidos');
        }

        $pedidos = $this->facturaModel->where('usuario_id', $usuarioId)
                                    ->orderBy('fecha', 'DESC')
                                    ->findAll();

        return view('back/usuarios/mis_pedidos', [
            'pedidos' => $pedidos,
            'titulo' => 'Mis Pedidos'
        ]);
    }

    // Detalle de un pedido específico
    public function detallePedido($id)
    {
        $usuarioId = session()->get('id_usuario');
        $factura = $this->facturaModel->find($id);

        if (!$factura || $factura['usuario_id'] != $usuarioId) {
            return redirect()->to('/mis-pedidos')->with('error', 'Pedido no encontrado');
        }

        $detalles = $this->detalleFacturaModel->select('detalle_factura.*, productos.nombre, productos.imagen')
                                            ->join('productos', 'productos.id = detalle_factura.producto_id')
                                            ->where('factura_id', $id)
                                            ->findAll();

        return view('back/usuarios/detalle_pedido', [
            'factura' => $factura,
            'detalles' => $detalles,
            'titulo' => 'Detalle del Pedido #' . $id
        ]);
    }
}