<?php
namespace App\Models;

use CodeIgniter\Model;

class CarritoModel extends Model
{
    protected $table = 'carrito'; // nombre de la tabla
    protected $primaryKey = 'id'; // clave primaria
    protected $allowedFields = ['user_id', 'producto_id', 'cantidad']; // campos permitidos
    public $timestamps = false; // si no usas campos created_at o updated_at
}
