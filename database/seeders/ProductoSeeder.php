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
                    'Samsung Galaxy A52s 5G',
                    'Samsung Galaxy A42 5G',
                    'Samsung Galaxy A32 5G',
                    'Samsung Galaxy A22 5G',
                    'Samsung Galaxy A12 5G',
                    'Samsung Galaxy A51',
                    'Samsung Galaxy A41',
                    'Samsung Galaxy A31',
                    'Samsung Galaxy A21s',
                    'Samsung Galaxy A11',
                    'Samsung Galaxy A50',
                    'Samsung Galaxy A40',
                    'Samsung Galaxy A30',
                    'Samsung Galaxy A20',
                    'Samsung Galaxy A10',
                    'Samsung Galaxy J7',
                    'Samsung Galaxy J6',
                    'Samsung Galaxy J5',
                    'Samsung Galaxy J4',
                    'Samsung Galaxy J3',
                    'Samsung Galaxy A53 5G',
                    'Samsung Galaxy A33 5G',
                    'Samsung Galaxy A23',
                    'Samsung Galaxy A13 5G',
                    'Samsung Galaxy S23 Ultra',
                    'Samsung Galaxy S23+',
                    'Samsung Galaxy S23',
                    'Samsung Galaxy Z Fold 4',
                    'Samsung Galaxy Z Flip 4',
                    'Laptop HP Pavilion',
                    'Auriculares inalámbricos Sony WH-1000XM4',
                    'Smart TV LG 55" 4K',
                    'Tablet Apple iPad Air',
                    'Acer Chromebook 315',
                    'Dell Chromebook 11 3000',
                    'HP Chromebook 11a',
                    'Lenovo Chromebook 11e',
                    'Asus Chromebook C223',
                    'Acer Aspire 3',
                    'Dell Inspiron 15 3500',
                    'HP Pavilion 15',
                    'Acer Aspire 5',
                    'Dell Inspiron 15 3000',
                    'HP Pavilion Aero 13',
                    'Lenovo IdeaPad 5',
                    'Asus VivoBook 15',
                    'Acer Chromebook Spin 713',
                    'Dell Inspiron Chromebook 14 2-in-1',
                    'HP Chromebook x360 14c',
                    'Apple MacBook Pro 16 M1 Max',
                    'Dell XPS 13 9310',
                    'HP Spectre x360 14',
                    'Microsoft Surface Pro 8',
                    'Asus ZenBook 13 OLED',
                    'Razer Blade 14',
                    'Lenovo ThinkPad X1 Carbon Gen 9',
                    'Acer Swift 5 Intel EVO Thin & Light Laptop',
                    'iPhone 13 mini',
                    'iPhone 12 mini',
                    'iPhone 11 mini',
                    'iPhone SE (2020)',
                    'iPhone 8',
                    'iPhone 8 Plus',
                    'iPhone 7',
                    'iPhone 7 Plus',
                    'iPhone 6s',
                    'iPhone 6s Plus',
                    'iPhone SE (1ra generación)',
                    'iPhone 5s',
                    'iPhone 5c',
                    'iPhone 5',
                    'iPhone 12 Pro Max',
                    'iPhone 12 Pro',
                    'iPhone 12',
                    'iPhone 11 Pro Max',
                    'iPhone 11 Pro',
                    'iPhone 11',
                    'iPhone 14 Pro Max',
                    'iPhone 14 Pro',
                    'iPhone 14',
                    'iPhone 13 Pro Max',
                    'iPhone 13 Pro',
                    'iPhone 13',
                    'iPhone 15 Pro Max',
                    'iPhone 15 Pro',
                    'iPhone 15',
                    'iPhone SE (2023)',
                ];
            case 'Ropa y Accesorios':
                return [
                    'Camiseta de algodón blanco unisex',
                    'Vestido floral de verano',
                    'Zapatillas deportivas Nike Air Max',
                    'Reloj de pulsera elegante',
                    'Gafas de sol Ray-Ban Aviator',
                    'Gorras de béisbol',
                    'Gorras de pescador',
                    'Gafas de sol para hombre',
                    'Gafas de sol para mujer',
                    'Gafas de sol para niños',
                    'Cinturones de cuero',
                    'Cinturones de tela',
                    'Carteras para mujer',
                    'Carteras para hombre',
                    'Carteras para niños',
                    'Bolsos de viaje',
                    'Bolsos de mujer',
                    'Zapatillas deportivas',
                    'Zapatos de vestir',
                    'Botas',
                    'Sandalias',
                    'Zapatos de mujer',
                    'Zapatos para hombre',
                    'Zapatos para niños',
                    'Ropa interior para hombre',
                    'Ropa interior para mujer',
                    'Ropa interior para niños',
                    'Camisetas deportivas',
                    'Pantalones deportivos',
                    'Shorts deportivos',
                    'Sudaderas',
                    'Chaquetas deportivas',
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
                    'Cien años de soledad',
                    'Revista National Geographic',
                    'Colección de libros de cocina italiana',
                    'Libro de desarrollo personal "El Poder del Ahora"',
                    '1984 de George Orwell',
                    'El Señor de los Anillos',
                    'Ulises',
                    'La metamorfosis',
                    '1984',
                    'El Gran Gatsby',
                    'Matar a un ruiseñor',
                    'El guardián entre el centeno',
                    'El código da Vinci',
                    'La Odisea',
                    'La Ilíada',
                    'La Biblia',
                    'La Divina Comedia',
                    'El Quijote',
                    'Hamlet',
                    'Crimen y castigo',

                ];
            // Repite para otras categorías
            default:
                return [];
        }
    }
}
