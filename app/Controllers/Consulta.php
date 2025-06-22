<?php
namespace App\Controllers;

use App\Models\ConsultaModel;

class Consulta extends BaseController
{
    public function index()
    {
        helper('form'); // Para usar set_value() en la vista
        return view('Contacto');
    }

    public function enviar()
    {
        helper('form');

        $reglas = [
            'nombre'  => 'required|min_length[3]|max_length[100]',
            'email'   => 'required|valid_email',
            'mensaje' => 'required|min_length[5]',
        ];

        if (!$this->validate($reglas)) {
            return view('Contacto', [
                'validation' => $this->validator
            ]);
        }

        $modelo = new ConsultaModel();

        $datos = [
            'nombre'  => $this->request->getPost('nombre'),
            'email'   => $this->request->getPost('email'),
            'mensaje' => $this->request->getPost('mensaje'),
            'respondida'=> 0
        ];

        $modelo->insert($datos);

        session()->setFlashdata('mensaje', 'Consulta enviada correctamente. ¡Gracias!');

        return redirect()->to('/informacion-contacto');
    }
}
