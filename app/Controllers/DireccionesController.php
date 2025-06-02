<?php
namespace App\Controllers;

use App\Models\DireccionesModel;
use CodeIgniter\Controller;

class DireccionesController extends Controller
{
    protected $direccionesModel;

    public function __construct()
    {
        $this->direccionesModel = new DireccionesModel();
        helper(['form', 'url', 'session']);
    }

    public function guardar()
    {
        $session = session();
        $userId = $session->get('id_usuario');
        if (!$userId) {
            return redirect()->to(base_url('login'));
        }

        $data = $this->request->getPost();

        $direccionData = [
            'id_usuario' => $userId,
            'calle' => $data['calle'],
            'numero' => $data['numero'],
            'ciudad' => $data['ciudad'],
            'provincia' => $data['provincia'],
            'codigo_postal' => $data['codigo_postal'],
            'descripcion' => $data['descripcion'] ?? null,
        ];

        if ($this->direccionesModel->insert($direccionData)) {
            session()->setFlashdata('success', 'Dirección agregada correctamente.');
        } else {
            session()->setFlashdata('error', 'Error al guardar la dirección.');
        }

        return redirect()->to(base_url('perfil'));
    }

    public function eliminar($id)
        {
            $session = session();
            if (!$session->get('logged_in')) {
                return redirect()->to('/login');
            }

            // Buscar usando id_direccion
            $direccion = $this->direccionesModel->where('id_direccion', $id)->first();

            if ($direccion && $direccion['id_usuario'] == $session->get('id_usuario')) {
                $this->direccionesModel->delete($id); // elimina por PK
                return redirect()->back()->with('success', 'Dirección eliminada.');
            }

            return redirect()->back()->with('error', 'No se pudo eliminar la dirección.');
}

}
