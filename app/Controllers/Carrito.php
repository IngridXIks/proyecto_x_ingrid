<?php

namespace App\Controllers;

use App\Models\CarritoModel;
use CodeIgniter\Controller;

class Carrito extends Controller
{
    public function agregar()
    {
        helper('session');
        $session = session();

        $producto_id = $this->request->getPost('producto_id');
        $cantidad = $this->request->getPost('cantidad') ?? 1;
        $session_id = $session->getId();

        $carritoModel = new CarritoModel();

        // Verificar si el producto ya existe
        $carritoExistente = $carritoModel
            ->where('session_id', $session_id)
            ->where('producto_id', $producto_id)
            ->first();

        if ($carritoExistente) {
            // Aumentar la cantidad
            $carritoModel->update($carritoExistente['id'], [
                'cantidad' => $carritoExistente['cantidad'] + $cantidad
            ]);
        } else {
            // Insertar nuevo
            $carritoModel->insert([
                'session_id' => $session_id,
                'producto_id' => $producto_id,
                'cantidad' => $cantidad
            ]);
        }

        return redirect()->to('/carrito/ver');
    }

    public function ver()
    {
        // Aquí puedes cargar los productos del carrito y mostrarlos en una vista
    }
}
