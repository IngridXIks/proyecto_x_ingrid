<?php 
namespace App\Controllers;

use App\Models\ConsultaModel;

class Consulta extends BaseController
{
    public function __construct()
    {
        // Activar reportes de error aquí, dentro del constructor
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
    }
    public function index()
    {
        helper(['form']);
        return view('consulta_form');
    }

 public function enviar()
{
    helper(['form']);
    $validation = \Config\Services::validation();

    $validation->setRules([
        'nombre' => 'required|min_length[3]',
        'email' => 'required|valid_email',
        'mensaje' => 'required|min_length[10]'
    ]);

    if (!$validation->withRequest($this->request)->run()) {
        return view('consulta_form', [
            'validation' => $validation
        ]);
    }


    $modelo = new ConsultaModel();
    $modelo->save([
        'nombre' => $this->request->getPost('nombre'),
        'email' => $this->request->getPost('email'),
        'mensaje' => $this->request->getPost('mensaje')
    ]);

    $email = \Config\Services::email();
    $email->setFrom('tu_correo@example.com', 'Tu Nombre');
    $email->setTo('destinatario@example.com');
    $email->setSubject('Nueva Consulta');
    $email->setMessage("Nombre: {$this->request->getPost('nombre')}\nEmail: {$this->request->getPost('email')}\nMensaje: {$this->request->getPost('mensaje')}");
    $email->send();


    return view('consulta_exito');
}

}
