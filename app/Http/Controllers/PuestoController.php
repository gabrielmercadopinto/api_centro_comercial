<?php

namespace App\Http\Controllers;

use App\Models\Puesto;
use Illuminate\Http\Request;

class PuestoController extends Controller
{
    public function getPuestos(){
        $puestos = Puesto::all();
        return response()->json([
            'puestos' => $puestos
        ], 200);
    }

    public function getPuestosYProductos(){
        $puestos = Puesto::with('productos')->get();
        return response()->json([
            'puestos' => $puestos,
        ], 200);
    }
}
