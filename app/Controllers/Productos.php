<?php

namespace App\Controllers;

use App\Models\ProductoModel;

class Producto extends BaseController
{
    public function index()
    {
        $model = new ProductoModel();
        $data['productos'] = $model->findAll(); // Obtiene todos los productos
        return view('productos', $data); // Carga la vista con los productos
    }
}
