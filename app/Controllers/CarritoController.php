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
}
