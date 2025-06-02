<?php

namespace App\Controllers;
use App\Models\CarritoModel;

class CarritoController extends BaseController
{
    protected $carrito;

    public function __construct()
    {
        $this->carrito = new CarritoModel();
    }

    // Muestra contenido del carrito
    public function index()
    {
        $user_id = session()->get('user_id'); 
        $carrito = $this->carrito->getCarritoPorUsuario($user_id);

        return view('back/carrito/carrito', ['carrito' => $carrito]);
    }

    public function mostrarAgregarCarrito($producto_id)
{
    return view('back/carrito/agregar_carrito', ['producto_id' => $producto_id]);
}

public function mostrarProducto($producto_id)
{
    return view('back/carrito/producto', ['producto_id' => $producto_id]);
}

public function mostrarPagar()
{
    return view('back/carrito/pagar');
}

    // Agregar producto al carrito (POST)
    public function agregar()
    {
        $user_id = session()->get('user_id');
        $producto_id = $this->request->getPost('producto_id');

        if (!$producto_id) {
            return redirect()->back()->with('error', 'Producto no válido.');
        }

        $itemExistente = $this->carrito->where([
            'producto_id' => $producto_id,
            'user_id' => $user_id
        ])->first();

        if ($itemExistente) {
            $itemExistente['cantidad'] += 1;
            $this->carrito->save($itemExistente);
        } else {
            $this->carrito->insert([
                'user_id' => $user_id,
                'producto_id' => $producto_id,
                'cantidad' => 1
            ]);
        }

        return redirect()->to('/carrito')->with('success', 'Producto agregado al carrito.');
    }

    // Eliminar producto del carrito (POST)
    public function eliminar()
    {
        $id = $this->request->getPost('id');

        if (!$id) {
            return redirect()->back()->with('error', 'ID inválido.');
        }

        $this->carrito->delete($id);

        return redirect()->to('/carrito')->with('success', 'Producto eliminado del carrito.');
    }
}
