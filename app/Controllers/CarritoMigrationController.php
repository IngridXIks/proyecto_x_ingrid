<?php

namespace App\Controllers;

use Config\Services;

class CarritoMigrationController extends BaseController
{
    public function migrar()
    {
        if (ENVIRONMENT !== 'development') {
            return "⛔ No autorizado.";
        }

        $migrate = Services::migrations();

        try {
            $migrate->setNamespace('App')->latest();
            return "✅ Migración aplicada correctamente.";
        } catch (\Throwable $e) {
            return "❌ Error: " . $e->getMessage();
        }
    }
}
