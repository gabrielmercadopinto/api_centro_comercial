<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
            'Electrónica',
            'Ropa y Accesorios',
            'Hogar y Jardín',
            'Juguetes y Juegos',
            'Libros y Revistas',
            'Salud y Belleza',
            'Deportes y Actividades al Aire Libre',
            'Automotriz',
            'Alimentos y Bebidas',
            'Electrodomésticos',
            'Muebles',
            'Herramientas y Equipos de Bricolaje',
            'Joyería y Relojes',
            'Arte y Manualidades',
            'Equipaje y Bolsos',
            'Mascotas',
            'Instrumentos Musicales',
            'Películas y Música',
            'Artículos de Oficina y Escolares',
            'Tecnología Wearable',
        ];

        foreach ($categorias as $categoria) {
            Categoria::create(['nombre' => $categoria]);
        }
    }
}
