<?php

namespace App\Controllers;

use App\Models\ProductoModel;

class ProductoController extends BaseController
{
    public function index()
    {
        $productoModel = new ProductoModel();
        $data['productos'] = $productoModel->where('activo', 1)->findAll();

        return view('Hamburguesas', $data);
    }
}
