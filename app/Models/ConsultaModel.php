<?php

namespace App\Models;

use CodeIgniter\Model;

class ConsultaModel extends Model
{
    protected $table = 'consultas';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nombre', 
        'email', 
        'mensaje', 
        'respuesta', 
        'respondida', 
        'fecha_respuesta',
        'creado_en'
    ];
    protected $useTimestamps = true;
    protected $createdField = 'creado_en';
    protected $updatedField = 'actualizado_en';
}
