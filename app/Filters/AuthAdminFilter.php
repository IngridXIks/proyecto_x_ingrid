<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthAdminFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
{
    $session = \Config\Services::session();

    if (!$session->get('logged_in')) {
        return redirect()->to('/login')->with('error', 'Por favor inicia sesión');
    }

    if ($session->get('id_perfiles') != 1) {
        return redirect()->to('/')->with('error', 'Acceso no autorizado');
    }
}

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // No hace nada después
    }
}
