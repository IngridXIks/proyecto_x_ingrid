<?php

namespace App\Models;

use CodeIgniter\Model;

class DireccionesModel extends Model
{
    protected $table = 'direcciones';
    protected $primaryKey = 'id_direccion';
    protected $allowedFields = [
        'id_usuario',
        'calle',
        'numero',
        'ciudad',
        'provincia',
        'codigo_postal',
        'descripcion'
    ];
}
