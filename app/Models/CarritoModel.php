<?php

namespace App\Models;

use CodeIgniter\Model;

class CarritoModel extends Model
{
    protected $table = 'carrito';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_usuario', 'id_producto', 'cantidad', 'agregado_en'];

    public function getCarritoPorUsuario($id_usuario)
    {
        return $this->select('carrito.*, productos.nombre, productos.precio')
                    ->join('productos', 'productos.id = carrito.id_producto')
                    ->where('id_usuario', $id_usuario)
                    ->findAll();
    }
}
