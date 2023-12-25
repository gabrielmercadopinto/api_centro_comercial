<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function getProductos(){
        $productos = Producto::all();
        return response()->json([
            'productos' => $productos
        ], 200);
    }

    public function getProductosYPuestos(){
        $productos = Producto::with('puestos')->get();
        return response()->json([
            'productos' => $productos,
        ], 200);
    }
}
