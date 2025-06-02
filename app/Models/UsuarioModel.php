<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['nombre', 'email', 'password', 'celular', 'id_direccion', 'activo'];
    protected $useTimestamps = true;
    protected $beforeInsert = ['hashPassword'];
    protected $beforeUpdate = ['hashPassword'];

    protected function hashPassword(array $data)
    {
        if (isset($data['data']['password'])) {
            // Si la contraseña no está hasheada (ejemplo: no empieza con '$2y$' que es típico de bcrypt)
            if (!preg_match('/^\$2y\$/', $data['data']['password'])) {
                $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
            }
        }
        return $data;
    }

    public function getUserByEmail($email)
    {
        return $this->where('email', $email)
                   ->where('activo', 1)
                   ->first();
    }
}
