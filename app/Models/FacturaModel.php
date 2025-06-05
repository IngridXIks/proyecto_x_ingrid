<?php namespace App\Models;

use CodeIgniter\Model;

class FacturaModel extends Model
{
    protected $table = 'facturas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['usuario_id', 'fecha', 'total', 'estado'];
    protected $useTimestamps = false;
}