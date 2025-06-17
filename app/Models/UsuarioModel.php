<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['nombre', 'email','id_perfiles', 'password', 'celular', 'id_direccion', 'activo'];
    protected $useTimestamps = true;
    protected $beforeInsert = ['hashPassword'];
    protected $beforeUpdate = ['hashPassword'];

    protected function hashPassword(array $data)
    {
        if (isset($data['data']['password'])) {
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
    
    public function getUserWithProfile($email)
{
    return $this->select('usuarios.*, perfiles.descripcion as perfil')
        ->join('perfiles', 'perfiles.id_perfiles = usuarios.id_perfiles')
        ->where('usuarios.email', $email)
        ->first();
}

}
