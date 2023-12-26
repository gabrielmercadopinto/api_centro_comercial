<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Puesto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PuestoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $puestos = [];

        for ($i = 1; $i <= 123; $i++) {
            $puestos[] = [
                'nombre' => 'Puesto ' . $i,
                'nro' => $i,
                'longitud' => $this->generateRandomCoordinate(-180, 180),
                'latitud' => $this->generateRandomCoordinate(-90, 90),
            ];
        }

        foreach ($puestos as $p) {
            $puesto = Puesto::create($p);
            $array = ['Libros y Revistas', 'Juguetes y Juegos', 'Hogar y Jardín', 'Ropa y Accesorios', 'Electrónica'];
            $index = array_rand($array);
            $categoria = Categoria::where('nombre', $array[$index])->first();
            $productos = Producto::where('categoria_id', $categoria->id)->pluck('id');
            $puesto->productos()->attach($productos, [
                'imagen' => 'https://picsum.photos/200',
                'precio' => rand(100, 1000)
            ]);
        }
    }

    private function generateRandomCoordinate($min, $max)
    {
        return mt_rand($min * 1000000, $max * 1000000) / 1000000;
    }
}
