<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = Categoria::all();

        foreach ($categorias as $categoria) {
            $productos = $this->getProductosParaCategoria($categoria->nombre);

            foreach ($productos as $producto) {
                Producto::create([
                    'nombre' => $producto,
                    'categoria_id' => $categoria->id,
                ]);
            }
        }
    }

    private function getProductosParaCategoria($categoria)
    {
        switch ($categoria) {
            case 'Electrónica':
                return [
                    'Smartphone Samsung Galaxy S21',
                    'Laptop HP Pavilion',
                    'Auriculares inalámbricos Sony WH-1000XM4',
                    'Smart TV LG 55" 4K',
                    'Tablet Apple iPad Air',
                ];
            case 'Ropa y Accesorios':
                return [
                    'Camiseta de algodón blanco unisex',
                    'Vestido floral de verano',
                    'Zapatillas deportivas Nike Air Max',
                    'Reloj de pulsera elegante',
                    'Gafas de sol Ray-Ban Aviator',
                ];
            case 'Hogar y Jardín':
                return [
                    'Juego de sábanas de algodón',
                    'Set de utensilios de cocina antiadherentes',
                    'Maceta de cerámica para plantas',
                    'Aspiradora robot inteligente',
                    'Alfombra moderna para sala de estar',
                ];
            case 'Juguetes y Juegos':
                return [
                    'Rompecabezas de 1000 piezas',
                    'Muñeca articulada con accesorios',
                    'Juego de construcción LEGO City',
                    'Pelota de fútbol',
                    'Set de bloques magnéticos para niños',
                ];
            case 'Libros y Revistas':
                return [
                    '"Cien años de soledad" de Gabriel García Márquez',
                    'Revista National Geographic',
                    'Colección de libros de cocina italiana',
                    'Libro de desarrollo personal "El Poder del Ahora"',
                    '"1984" de George Orwell',
                ];
            // Repite para otras categorías
            default:
                return [];
        }
    }
}
