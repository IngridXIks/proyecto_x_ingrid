<?php
namespace App\Models;

use CodeIgniter\Model;

class CarritoModel extends Model
{
    protected $table = 'carrito';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'producto_id', 'cantidad']; 

    public function getCarritoPorUsuario($user_id) 
    {
        return $this->select('carrito.*, productos.nombre, productos.precio')
                    ->join('productos', 'productos.id = carrito.producto_id')
                    ->where('user_id', $user_id) 
                    ->findAll();
    }
}
