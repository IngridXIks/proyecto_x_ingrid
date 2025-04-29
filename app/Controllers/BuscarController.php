<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class BuscarController extends BaseController
{
    public function index()
{
    $term = $this->request->getGet('q'); // Obtiene el término de búsqueda

    //de ejemplo
    $results = [
        [
            'nombre' => 'Hamburguesa Simple',
            'descripcion' => 'Deliciosa hamburguesa con carne, queso y vegetales frescos.',
            'imagen' => 'hamburguesa_simple.jpg'
        ],
    ];

    // Si no hay término, no hay necesidad de filtrar
    if ($term) {
        // Filtrar los resultados por el término (esto es un filtro simple)
        $results = array_filter($results, function($item) use ($term) {
            return stripos($item['nombre'], $term) !== false || stripos($item['descripcion'], $term) !== false;
        });
    }

    return view('resultados_busqueda', ['results' => $results, 'term' => $term]);
}

}
